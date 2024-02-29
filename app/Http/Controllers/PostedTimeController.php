<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostedTimeRequest;
use App\Http\Requests\UpdatePostedTimeRequest;
use App\Repositories\PostedTimeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PostedTimeController extends AppBaseController
{
    /** @var  PostedTimeRepository */
    private $postedTimeRepository;

    public function __construct(PostedTimeRepository $postedTimeRepo)
    {
        $this->postedTimeRepository = $postedTimeRepo;
    }

    /**
     * Display a listing of the PostedTime.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->postedTimeRepository->pushCriteria(new RequestCriteria($request));
        $postedTimes = $this->postedTimeRepository->all();

        return view('posted_times.index')
            ->with('postedTimes', $postedTimes);
    }

    /**
     * Show the form for creating a new PostedTime.
     *
     * @return Response
     */
    public function create()
    {
        return view('posted_times.create');
    }

    /**
     * Store a newly created PostedTime in storage.
     *
     * @param CreatePostedTimeRequest $request
     *
     * @return Response
     */
    public function store(CreatePostedTimeRequest $request)
    {
        $input = $request->all();

        $postedTime = $this->postedTimeRepository->create($input);

        Flash::success('Posted Time saved successfully.');

        return redirect(route('postedTimes.index'));
    }

    /**
     * Display the specified PostedTime.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $postedTime = $this->postedTimeRepository->findWithoutFail($id);

        if (empty($postedTime)) {
            Flash::error('Posted Time not found');

            return redirect(route('postedTimes.index'));
        }

        return view('posted_times.show')->with('postedTime', $postedTime);
    }

    /**
     * Show the form for editing the specified PostedTime.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $postedTime = $this->postedTimeRepository->findWithoutFail($id);

        if (empty($postedTime)) {
            Flash::error('Posted Time not found');

            return redirect(route('postedTimes.index'));
        }

        return view('posted_times.edit')->with('postedTime', $postedTime);
    }

    /**
     * Update the specified PostedTime in storage.
     *
     * @param  int              $id
     * @param UpdatePostedTimeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostedTimeRequest $request)
    {
        $postedTime = $this->postedTimeRepository->findWithoutFail($id);

        if (empty($postedTime)) {
            Flash::error('Posted Time not found');

            return redirect(route('postedTimes.index'));
        }

        $postedTime = $this->postedTimeRepository->update($request->all(), $id);

        Flash::success('Posted Time updated successfully.');

        return redirect(route('postedTimes.index'));
    }

    /**
     * Remove the specified PostedTime from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $postedTime = $this->postedTimeRepository->findWithoutFail($id);

        if (empty($postedTime)) {
            Flash::error('Posted Time not found');

            return redirect(route('postedTimes.index'));
        }

        $this->postedTimeRepository->delete($id);

        Flash::success('Posted Time deleted successfully.');

        return redirect(route('postedTimes.index'));
    }
}
