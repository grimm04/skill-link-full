<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobDurationRequest;
use App\Http\Requests\UpdateJobDurationRequest;
use App\Repositories\JobDurationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobDurationController extends AppBaseController
{
    /** @var  JobDurationRepository */
    private $jobDurationRepository;

    public function __construct(JobDurationRepository $jobDurationRepo)
    {
        $this->jobDurationRepository = $jobDurationRepo;
    }

    /**
     * Display a listing of the JobDuration.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobDurationRepository->pushCriteria(new RequestCriteria($request));
        $jobDurations = $this->jobDurationRepository->all();

        return view('job_durations.index')
            ->with('jobDurations', $jobDurations);
    }

    /**
     * Show the form for creating a new JobDuration.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_durations.create');
    }

    /**
     * Store a newly created JobDuration in storage.
     *
     * @param CreateJobDurationRequest $request
     *
     * @return Response
     */
    public function store(CreateJobDurationRequest $request)
    {
        $input = $request->all();

        $jobDuration = $this->jobDurationRepository->create($input);

        Flash::success('Job Duration saved successfully.');

        return redirect(route('jobDurations.index'));
    }

    /**
     * Display the specified JobDuration.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobDuration = $this->jobDurationRepository->findWithoutFail($id);

        if (empty($jobDuration)) {
            Flash::error('Job Duration not found');

            return redirect(route('jobDurations.index'));
        }

        return view('job_durations.show')->with('jobDuration', $jobDuration);
    }

    /**
     * Show the form for editing the specified JobDuration.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobDuration = $this->jobDurationRepository->findWithoutFail($id);

        if (empty($jobDuration)) {
            Flash::error('Job Duration not found');

            return redirect(route('jobDurations.index'));
        }

        return view('job_durations.edit')->with('jobDuration', $jobDuration);
    }

    /**
     * Update the specified JobDuration in storage.
     *
     * @param  int              $id
     * @param UpdateJobDurationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobDurationRequest $request)
    {
        $jobDuration = $this->jobDurationRepository->findWithoutFail($id);

        if (empty($jobDuration)) {
            Flash::error('Job Duration not found');

            return redirect(route('jobDurations.index'));
        }

        $jobDuration = $this->jobDurationRepository->update($request->all(), $id);

        Flash::success('Job Duration updated successfully.');

        return redirect(route('jobDurations.index'));
    }

    /**
     * Remove the specified JobDuration from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobDuration = $this->jobDurationRepository->findWithoutFail($id);

        if (empty($jobDuration)) {
            Flash::error('Job Duration not found');

            return redirect(route('jobDurations.index'));
        }

        $this->jobDurationRepository->delete($id);

        Flash::success('Job Duration deleted successfully.');

        return redirect(route('jobDurations.index'));
    }
}
