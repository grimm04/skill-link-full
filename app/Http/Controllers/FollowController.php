<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFollowRequest;
use App\Http\Requests\UpdateFollowRequest;
use App\Repositories\FollowRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FollowController extends AppBaseController
{
    /** @var  FollowRepository */
    private $followRepository;

    public function __construct(FollowRepository $followRepo)
    {
        $this->followRepository = $followRepo;
    }

    /**
     * Display a listing of the Follow.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->followRepository->pushCriteria(new RequestCriteria($request));
        $follows = $this->followRepository->all();

        return view('follows.index')
            ->with('follows', $follows);
    }

    /**
     * Show the form for creating a new Follow.
     *
     * @return Response
     */
    public function create()
    {
        return view('follows.create');
    }

    /**
     * Store a newly created Follow in storage.
     *
     * @param CreateFollowRequest $request
     *
     * @return Response
     */
    public function store(CreateFollowRequest $request)
    {
        $input = $request->all();

        $follow = $this->followRepository->create($input);

        Flash::success('Follow saved successfully.');

        return redirect(route('follows.index'));
    }

    /**
     * Display the specified Follow.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $follow = $this->followRepository->findWithoutFail($id);

        if (empty($follow)) {
            Flash::error('Follow not found');

            return redirect(route('follows.index'));
        }

        return view('follows.show')->with('follow', $follow);
    }

    /**
     * Show the form for editing the specified Follow.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $follow = $this->followRepository->findWithoutFail($id);

        if (empty($follow)) {
            Flash::error('Follow not found');

            return redirect(route('follows.index'));
        }

        return view('follows.edit')->with('follow', $follow);
    }

    /**
     * Update the specified Follow in storage.
     *
     * @param  int              $id
     * @param UpdateFollowRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFollowRequest $request)
    {
        $follow = $this->followRepository->findWithoutFail($id);

        if (empty($follow)) {
            Flash::error('Follow not found');

            return redirect(route('follows.index'));
        }

        $follow = $this->followRepository->update($request->all(), $id);

        Flash::success('Follow updated successfully.');

        return redirect(route('follows.index'));
    }

    /**
     * Remove the specified Follow from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $follow = $this->followRepository->findWithoutFail($id);

        if (empty($follow)) {
            Flash::error('Follow not found');

            return redirect(route('follows.index'));
        }

        $this->followRepository->delete($id);

        Flash::success('Follow deleted successfully.');

        return redirect(route('follows.index'));
    }
}
