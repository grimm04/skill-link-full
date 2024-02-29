<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobTypeRequest;
use App\Http\Requests\UpdateJobTypeRequest;
use App\Repositories\JobTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobTypeController extends AppBaseController
{
    /** @var  JobTypeRepository */
    private $jobTypeRepository;

    public function __construct(JobTypeRepository $jobTypeRepo)
    {
        $this->jobTypeRepository = $jobTypeRepo;
    }

    /**
     * Display a listing of the JobType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobTypeRepository->pushCriteria(new RequestCriteria($request));
        $jobTypes = $this->jobTypeRepository->all();

        return view('job_types.index')
            ->with('jobTypes', $jobTypes);
    }

    /**
     * Show the form for creating a new JobType.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_types.create');
    }

    /**
     * Store a newly created JobType in storage.
     *
     * @param CreateJobTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateJobTypeRequest $request)
    {
        $input = $request->all();

        $jobType = $this->jobTypeRepository->create($input);

        Flash::success('Job Type saved successfully.');

        return redirect(route('jobTypes.index'));
    }

    /**
     * Display the specified JobType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobType = $this->jobTypeRepository->findWithoutFail($id);

        if (empty($jobType)) {
            Flash::error('Job Type not found');

            return redirect(route('jobTypes.index'));
        }

        return view('job_types.show')->with('jobType', $jobType);
    }

    /**
     * Show the form for editing the specified JobType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobType = $this->jobTypeRepository->findWithoutFail($id);

        if (empty($jobType)) {
            Flash::error('Job Type not found');

            return redirect(route('jobTypes.index'));
        }

        return view('job_types.edit')->with('jobType', $jobType);
    }

    /**
     * Update the specified JobType in storage.
     *
     * @param  int              $id
     * @param UpdateJobTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobTypeRequest $request)
    {
        $jobType = $this->jobTypeRepository->findWithoutFail($id);

        if (empty($jobType)) {
            Flash::error('Job Type not found');

            return redirect(route('jobTypes.index'));
        }

        $jobType = $this->jobTypeRepository->update($request->all(), $id);

        Flash::success('Job Type updated successfully.');

        return redirect(route('jobTypes.index'));
    }

    /**
     * Remove the specified JobType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobType = $this->jobTypeRepository->findWithoutFail($id);

        if (empty($jobType)) {
            Flash::error('Job Type not found');

            return redirect(route('jobTypes.index'));
        }

        $this->jobTypeRepository->delete($id);

        Flash::success('Job Type deleted successfully.');

        return redirect(route('jobTypes.index'));
    }
}
