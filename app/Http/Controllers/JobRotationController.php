<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobRotationRequest;
use App\Http\Requests\UpdateJobRotationRequest;
use App\Repositories\JobRotationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobRotationController extends AppBaseController
{
    /** @var  JobRotationRepository */
    private $jobRotationRepository;

    public function __construct(JobRotationRepository $jobRotationRepo)
    {
        $this->jobRotationRepository = $jobRotationRepo;
    }

    /**
     * Display a listing of the JobRotation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobRotationRepository->pushCriteria(new RequestCriteria($request));
        $jobRotations = $this->jobRotationRepository->all();

        return view('job_rotations.index')
            ->with('jobRotations', $jobRotations);
    }

    /**
     * Show the form for creating a new JobRotation.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_rotations.create');
    }

    /**
     * Store a newly created JobRotation in storage.
     *
     * @param CreateJobRotationRequest $request
     *
     * @return Response
     */
    public function store(CreateJobRotationRequest $request)
    {
        $input = $request->all();

        $jobRotation = $this->jobRotationRepository->create($input);

        Flash::success('Job Rotation saved successfully.');

        return redirect(route('jobRotations.index'));
    }

    /**
     * Display the specified JobRotation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobRotation = $this->jobRotationRepository->findWithoutFail($id);

        if (empty($jobRotation)) {
            Flash::error('Job Rotation not found');

            return redirect(route('jobRotations.index'));
        }

        return view('job_rotations.show')->with('jobRotation', $jobRotation);
    }

    /**
     * Show the form for editing the specified JobRotation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobRotation = $this->jobRotationRepository->findWithoutFail($id);

        if (empty($jobRotation)) {
            Flash::error('Job Rotation not found');

            return redirect(route('jobRotations.index'));
        }

        return view('job_rotations.edit')->with('jobRotation', $jobRotation);
    }

    /**
     * Update the specified JobRotation in storage.
     *
     * @param  int              $id
     * @param UpdateJobRotationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobRotationRequest $request)
    {
        $jobRotation = $this->jobRotationRepository->findWithoutFail($id);

        if (empty($jobRotation)) {
            Flash::error('Job Rotation not found');

            return redirect(route('jobRotations.index'));
        }

        $jobRotation = $this->jobRotationRepository->update($request->all(), $id);

        Flash::success('Job Rotation updated successfully.');

        return redirect(route('jobRotations.index'));
    }

    /**
     * Remove the specified JobRotation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobRotation = $this->jobRotationRepository->findWithoutFail($id);

        if (empty($jobRotation)) {
            Flash::error('Job Rotation not found');

            return redirect(route('jobRotations.index'));
        }

        $this->jobRotationRepository->delete($id);

        Flash::success('Job Rotation deleted successfully.');

        return redirect(route('jobRotations.index'));
    }
}
