<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeDutyRequest;
use App\Http\Requests\UpdateEmployeDutyRequest;
use App\Repositories\EmployeDutyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EmployeDutyController extends AppBaseController
{
    /** @var  EmployeDutyRepository */
    private $employeDutyRepository;

    public function __construct(EmployeDutyRepository $employeDutyRepo)
    {
        $this->employeDutyRepository = $employeDutyRepo;
    }

    /**
     * Display a listing of the EmployeDuty.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->employeDutyRepository->pushCriteria(new RequestCriteria($request));
        $employeDuties = $this->employeDutyRepository->all();

        return view('employe_duties.index')
            ->with('employeDuties', $employeDuties);
    }

    /**
     * Show the form for creating a new EmployeDuty.
     *
     * @return Response
     */
    public function create()
    {
        return view('employe_duties.create');
    }

    /**
     * Store a newly created EmployeDuty in storage.
     *
     * @param CreateEmployeDutyRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeDutyRequest $request)
    {
        $input = $request->all();

        $employeDuty = $this->employeDutyRepository->create($input);

        Flash::success('Employe Duty saved successfully.');

        return redirect(route('employeDuties.index'));
    }

    /**
     * Display the specified EmployeDuty.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employeDuty = $this->employeDutyRepository->findWithoutFail($id);

        if (empty($employeDuty)) {
            Flash::error('Employe Duty not found');

            return redirect(route('employeDuties.index'));
        }

        return view('employe_duties.show')->with('employeDuty', $employeDuty);
    }

    /**
     * Show the form for editing the specified EmployeDuty.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employeDuty = $this->employeDutyRepository->findWithoutFail($id);

        if (empty($employeDuty)) {
            Flash::error('Employe Duty not found');

            return redirect(route('employeDuties.index'));
        }

        return view('employe_duties.edit')->with('employeDuty', $employeDuty);
    }

    /**
     * Update the specified EmployeDuty in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeDutyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeDutyRequest $request)
    {
        $employeDuty = $this->employeDutyRepository->findWithoutFail($id);

        if (empty($employeDuty)) {
            Flash::error('Employe Duty not found');

            return redirect(route('employeDuties.index'));
        }

        $employeDuty = $this->employeDutyRepository->update($request->all(), $id);

        Flash::success('Employe Duty updated successfully.');

        return redirect(route('employeDuties.index'));
    }

    /**
     * Remove the specified EmployeDuty from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employeDuty = $this->employeDutyRepository->findWithoutFail($id);

        if (empty($employeDuty)) {
            Flash::error('Employe Duty not found');

            return redirect(route('employeDuties.index'));
        }

        $this->employeDutyRepository->delete($id);

        Flash::success('Employe Duty deleted successfully.');

        return redirect(route('employeDuties.index'));
    }
}
