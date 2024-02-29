<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeendorsmentRequest;
use App\Http\Requests\UpdateEmployeendorsmentRequest;
use App\Repositories\EmployeendorsmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EmployeendorsmentController extends AppBaseController
{
    /** @var  EmployeendorsmentRepository */
    private $employeendorsmentRepository;

    public function __construct(EmployeendorsmentRepository $employeendorsmentRepo)
    {
        $this->employeendorsmentRepository = $employeendorsmentRepo;
    }

    /**
     * Display a listing of the Employeendorsment.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->employeendorsmentRepository->pushCriteria(new RequestCriteria($request));
        $employeendorsments = $this->employeendorsmentRepository->all();

        return view('employeendorsments.index')
            ->with('employeendorsments', $employeendorsments);
    }

    /**
     * Show the form for creating a new Employeendorsment.
     *
     * @return Response
     */
    public function create()
    {
        return view('employeendorsments.create');
    }

    /**
     * Store a newly created Employeendorsment in storage.
     *
     * @param CreateEmployeendorsmentRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeendorsmentRequest $request)
    {
        $input = $request->all();

        $employeendorsment = $this->employeendorsmentRepository->create($input);

        Flash::success('Employeendorsment saved successfully.');

        return redirect(route('employeendorsments.index'));
    }

    /**
     * Display the specified Employeendorsment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employeendorsment = $this->employeendorsmentRepository->findWithoutFail($id);

        if (empty($employeendorsment)) {
            Flash::error('Employeendorsment not found');

            return redirect(route('employeendorsments.index'));
        }

        return view('employeendorsments.show')->with('employeendorsment', $employeendorsment);
    }

    /**
     * Show the form for editing the specified Employeendorsment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employeendorsment = $this->employeendorsmentRepository->findWithoutFail($id);

        if (empty($employeendorsment)) {
            Flash::error('Employeendorsment not found');

            return redirect(route('employeendorsments.index'));
        }

        return view('employeendorsments.edit')->with('employeendorsment', $employeendorsment);
    }

    /**
     * Update the specified Employeendorsment in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeendorsmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeendorsmentRequest $request)
    {
        $employeendorsment = $this->employeendorsmentRepository->findWithoutFail($id);

        if (empty($employeendorsment)) {
            Flash::error('Employeendorsment not found');

            return redirect(route('employeendorsments.index'));
        }

        $employeendorsment = $this->employeendorsmentRepository->update($request->all(), $id);

        Flash::success('Employeendorsment updated successfully.');

        return redirect(route('employeendorsments.index'));
    }

    /**
     * Remove the specified Employeendorsment from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employeendorsment = $this->employeendorsmentRepository->findWithoutFail($id);

        if (empty($employeendorsment)) {
            Flash::error('Employeendorsment not found');

            return redirect(route('employeendorsments.index'));
        }

        $this->employeendorsmentRepository->delete($id);

        Flash::success('Employeendorsment deleted successfully.');

        return redirect(route('employeendorsments.index'));
    }
}
