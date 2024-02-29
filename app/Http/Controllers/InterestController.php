<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInterestRequest;
use App\Http\Requests\UpdateInterestRequest;
use App\Repositories\InterestRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InterestController extends AppBaseController
{
    /** @var  InterestRepository */
    private $interestRepository;

    public function __construct(InterestRepository $interestRepo)
    {
        $this->interestRepository = $interestRepo;
    }

    /**
     * Display a listing of the Interest.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->interestRepository->pushCriteria(new RequestCriteria($request));
        $interests = $this->interestRepository->all();

        return view('interests.index')
            ->with('interests', $interests);
    }

    /**
     * Show the form for creating a new Interest.
     *
     * @return Response
     */
    public function create()
    {
        return view('interests.create');
    }

    /**
     * Store a newly created Interest in storage.
     *
     * @param CreateInterestRequest $request
     *
     * @return Response
     */
    public function store(CreateInterestRequest $request)
    {
        $input = $request->all();

        $interest = $this->interestRepository->create($input);

        Flash::success('Interest saved successfully.');

        return redirect(route('interests.index'));
    }

    /**
     * Display the specified Interest.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $interest = $this->interestRepository->findWithoutFail($id);

        if (empty($interest)) {
            Flash::error('Interest not found');

            return redirect(route('interests.index'));
        }

        return view('interests.show')->with('interest', $interest);
    }

    /**
     * Show the form for editing the specified Interest.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $interest = $this->interestRepository->findWithoutFail($id);

        if (empty($interest)) {
            Flash::error('Interest not found');

            return redirect(route('interests.index'));
        }

        return view('interests.edit')->with('interest', $interest);
    }

    /**
     * Update the specified Interest in storage.
     *
     * @param  int              $id
     * @param UpdateInterestRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInterestRequest $request)
    {
        $interest = $this->interestRepository->findWithoutFail($id);

        if (empty($interest)) {
            Flash::error('Interest not found');

            return redirect(route('interests.index'));
        }

        $interest = $this->interestRepository->update($request->all(), $id);

        Flash::success('Interest updated successfully.');

        return redirect(route('interests.index'));
    }

    /**
     * Remove the specified Interest from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $interest = $this->interestRepository->findWithoutFail($id);

        if (empty($interest)) {
            Flash::error('Interest not found');

            return redirect(route('interests.index'));
        }

        $this->interestRepository->delete($id);

        Flash::success('Interest deleted successfully.');

        return redirect(route('interests.index'));
    }
}
