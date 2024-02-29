<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHireRequest;
use App\Http\Requests\UpdateHireRequest;
use App\Repositories\HireRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HireController extends AppBaseController
{
    /** @var  HireRepository */
    private $hireRepository;

    public function __construct(HireRepository $hireRepo)
    {
        $this->hireRepository = $hireRepo;
    }

    /**
     * Display a listing of the Hire.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->hireRepository->pushCriteria(new RequestCriteria($request));
        $hires = $this->hireRepository->all();

        return view('hires.index')
            ->with('hires', $hires);
    }

    /**
     * Show the form for creating a new Hire.
     *
     * @return Response
     */
    public function create()
    {
        return view('hires.create');
    }

    /**
     * Store a newly created Hire in storage.
     *
     * @param CreateHireRequest $request
     *
     * @return Response
     */
    public function store(CreateHireRequest $request)
    {
        $input = $request->all();

        $hire = $this->hireRepository->create($input);

        Flash::success('Hire saved successfully.');

        return redirect(route('hires.index'));
    }

    /**
     * Display the specified Hire.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hire = $this->hireRepository->findWithoutFail($id);

        if (empty($hire)) {
            Flash::error('Hire not found');

            return redirect(route('hires.index'));
        }

        return view('hires.show')->with('hire', $hire);
    }

    /**
     * Show the form for editing the specified Hire.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hire = $this->hireRepository->findWithoutFail($id);

        if (empty($hire)) {
            Flash::error('Hire not found');

            return redirect(route('hires.index'));
        }

        return view('hires.edit')->with('hire', $hire);
    }

    /**
     * Update the specified Hire in storage.
     *
     * @param  int              $id
     * @param UpdateHireRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHireRequest $request)
    {
        $hire = $this->hireRepository->findWithoutFail($id);

        if (empty($hire)) {
            Flash::error('Hire not found');

            return redirect(route('hires.index'));
        }

        $hire = $this->hireRepository->update($request->all(), $id);

        Flash::success('Hire updated successfully.');

        return redirect(route('hires.index'));
    }

    /**
     * Remove the specified Hire from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hire = $this->hireRepository->findWithoutFail($id);

        if (empty($hire)) {
            Flash::error('Hire not found');

            return redirect(route('hires.index'));
        }

        $this->hireRepository->delete($id);

        Flash::success('Hire deleted successfully.');

        return redirect(route('hires.index'));
    }
}
