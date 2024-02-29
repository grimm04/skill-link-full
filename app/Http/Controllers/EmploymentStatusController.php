<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmploymentStatusRequest;
use App\Http\Requests\UpdateEmploymentStatusRequest;
use App\Repositories\EmploymentStatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EmploymentStatusController extends AppBaseController
{
    /** @var  EmploymentStatusRepository */
    private $employmentStatusRepository;

    public function __construct(EmploymentStatusRepository $employmentStatusRepo)
    {
        $this->employmentStatusRepository = $employmentStatusRepo;
    }

    /**
     * Display a listing of the EmploymentStatus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->employmentStatusRepository->pushCriteria(new RequestCriteria($request));
        $employmentStatuses = $this->employmentStatusRepository->all();

        return view('employment_statuses.index')
            ->with('employmentStatuses', $employmentStatuses);
    }

    /**
     * Show the form for creating a new EmploymentStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('employment_statuses.create');
    }

    /**
     * Store a newly created EmploymentStatus in storage.
     *
     * @param CreateEmploymentStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateEmploymentStatusRequest $request)
    {
        $input = $request->all();

        $employmentStatus = $this->employmentStatusRepository->create($input);

        Flash::success('Employment Status saved successfully.');

        return redirect(route('employmentStatuses.index'));
    }

    /**
     * Display the specified EmploymentStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employmentStatus = $this->employmentStatusRepository->findWithoutFail($id);

        if (empty($employmentStatus)) {
            Flash::error('Employment Status not found');

            return redirect(route('employmentStatuses.index'));
        }

        return view('employment_statuses.show')->with('employmentStatus', $employmentStatus);
    }

    /**
     * Show the form for editing the specified EmploymentStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employmentStatus = $this->employmentStatusRepository->findWithoutFail($id);

        if (empty($employmentStatus)) {
            Flash::error('Employment Status not found');

            return redirect(route('employmentStatuses.index'));
        }

        return view('employment_statuses.edit')->with('employmentStatus', $employmentStatus);
    }

    /**
     * Update the specified EmploymentStatus in storage.
     *
     * @param  int              $id
     * @param UpdateEmploymentStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmploymentStatusRequest $request)
    {
        $employmentStatus = $this->employmentStatusRepository->findWithoutFail($id);

        if (empty($employmentStatus)) {
            Flash::error('Employment Status not found');

            return redirect(route('employmentStatuses.index'));
        }

        $employmentStatus = $this->employmentStatusRepository->update($request->all(), $id);

        Flash::success('Employment Status updated successfully.');

        return redirect(route('employmentStatuses.index'));
    }

    /**
     * Remove the specified EmploymentStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employmentStatus = $this->employmentStatusRepository->findWithoutFail($id);

        if (empty($employmentStatus)) {
            Flash::error('Employment Status not found');

            return redirect(route('employmentStatuses.index'));
        }

        $this->employmentStatusRepository->delete($id);

        Flash::success('Employment Status deleted successfully.');

        return redirect(route('employmentStatuses.index'));
    }
}
