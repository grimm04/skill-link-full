<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobSettingPositionRequest;
use App\Http\Requests\UpdateJobSettingPositionRequest;
use App\Repositories\JobSettingPositionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobSettingPositionController extends AppBaseController
{
    /** @var  JobSettingPositionRepository */
    private $jobSettingPositionRepository;

    public function __construct(JobSettingPositionRepository $jobSettingPositionRepo)
    {
        $this->jobSettingPositionRepository = $jobSettingPositionRepo;
    }

    /**
     * Display a listing of the JobSettingPosition.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobSettingPositionRepository->pushCriteria(new RequestCriteria($request));
        $jobSettingPositions = $this->jobSettingPositionRepository->all();

        return view('job_setting_positions.index')
            ->with('jobSettingPositions', $jobSettingPositions);
    }

    /**
     * Show the form for creating a new JobSettingPosition.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_setting_positions.create');
    }

    /**
     * Store a newly created JobSettingPosition in storage.
     *
     * @param CreateJobSettingPositionRequest $request
     *
     * @return Response
     */
    public function store(CreateJobSettingPositionRequest $request)
    {
        $input = $request->all();

        $jobSettingPosition = $this->jobSettingPositionRepository->create($input);

        Flash::success('Job Setting Position saved successfully.');

        return redirect(route('jobSettingPositions.index'));
    }

    /**
     * Display the specified JobSettingPosition.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobSettingPosition = $this->jobSettingPositionRepository->findWithoutFail($id);

        if (empty($jobSettingPosition)) {
            Flash::error('Job Setting Position not found');

            return redirect(route('jobSettingPositions.index'));
        }

        return view('job_setting_positions.show')->with('jobSettingPosition', $jobSettingPosition);
    }

    /**
     * Show the form for editing the specified JobSettingPosition.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobSettingPosition = $this->jobSettingPositionRepository->findWithoutFail($id);

        if (empty($jobSettingPosition)) {
            Flash::error('Job Setting Position not found');

            return redirect(route('jobSettingPositions.index'));
        }

        return view('job_setting_positions.edit')->with('jobSettingPosition', $jobSettingPosition);
    }

    /**
     * Update the specified JobSettingPosition in storage.
     *
     * @param  int              $id
     * @param UpdateJobSettingPositionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobSettingPositionRequest $request)
    {
        $jobSettingPosition = $this->jobSettingPositionRepository->findWithoutFail($id);

        if (empty($jobSettingPosition)) {
            Flash::error('Job Setting Position not found');

            return redirect(route('jobSettingPositions.index'));
        }

        $jobSettingPosition = $this->jobSettingPositionRepository->update($request->all(), $id);

        Flash::success('Job Setting Position updated successfully.');

        return redirect(route('jobSettingPositions.index'));
    }

    /**
     * Remove the specified JobSettingPosition from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobSettingPosition = $this->jobSettingPositionRepository->findWithoutFail($id);

        if (empty($jobSettingPosition)) {
            Flash::error('Job Setting Position not found');

            return redirect(route('jobSettingPositions.index'));
        }

        $this->jobSettingPositionRepository->delete($id);

        Flash::success('Job Setting Position deleted successfully.');

        return redirect(route('jobSettingPositions.index'));
    }
}
