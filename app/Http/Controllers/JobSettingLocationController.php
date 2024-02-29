<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobSettingLocationRequest;
use App\Http\Requests\UpdateJobSettingLocationRequest;
use App\Repositories\JobSettingLocationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobSettingLocationController extends AppBaseController
{
    /** @var  JobSettingLocationRepository */
    private $jobSettingLocationRepository;

    public function __construct(JobSettingLocationRepository $jobSettingLocationRepo)
    {
        $this->jobSettingLocationRepository = $jobSettingLocationRepo;
    }

    /**
     * Display a listing of the JobSettingLocation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobSettingLocationRepository->pushCriteria(new RequestCriteria($request));
        $jobSettingLocations = $this->jobSettingLocationRepository->all();

        return view('job_setting_locations.index')
            ->with('jobSettingLocations', $jobSettingLocations);
    }

    /**
     * Show the form for creating a new JobSettingLocation.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_setting_locations.create');
    }

    /**
     * Store a newly created JobSettingLocation in storage.
     *
     * @param CreateJobSettingLocationRequest $request
     *
     * @return Response
     */
    public function store(CreateJobSettingLocationRequest $request)
    {
        $input = $request->all();

        $jobSettingLocation = $this->jobSettingLocationRepository->create($input);

        Flash::success('Job Setting Location saved successfully.');

        return redirect(route('jobSettingLocations.index'));
    }

    /**
     * Display the specified JobSettingLocation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobSettingLocation = $this->jobSettingLocationRepository->findWithoutFail($id);

        if (empty($jobSettingLocation)) {
            Flash::error('Job Setting Location not found');

            return redirect(route('jobSettingLocations.index'));
        }

        return view('job_setting_locations.show')->with('jobSettingLocation', $jobSettingLocation);
    }

    /**
     * Show the form for editing the specified JobSettingLocation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobSettingLocation = $this->jobSettingLocationRepository->findWithoutFail($id);

        if (empty($jobSettingLocation)) {
            Flash::error('Job Setting Location not found');

            return redirect(route('jobSettingLocations.index'));
        }

        return view('job_setting_locations.edit')->with('jobSettingLocation', $jobSettingLocation);
    }

    /**
     * Update the specified JobSettingLocation in storage.
     *
     * @param  int              $id
     * @param UpdateJobSettingLocationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobSettingLocationRequest $request)
    {
        $jobSettingLocation = $this->jobSettingLocationRepository->findWithoutFail($id);

        if (empty($jobSettingLocation)) {
            Flash::error('Job Setting Location not found');

            return redirect(route('jobSettingLocations.index'));
        }

        $jobSettingLocation = $this->jobSettingLocationRepository->update($request->all(), $id);

        Flash::success('Job Setting Location updated successfully.');

        return redirect(route('jobSettingLocations.index'));
    }

    /**
     * Remove the specified JobSettingLocation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobSettingLocation = $this->jobSettingLocationRepository->findWithoutFail($id);

        if (empty($jobSettingLocation)) {
            Flash::error('Job Setting Location not found');

            return redirect(route('jobSettingLocations.index'));
        }

        $this->jobSettingLocationRepository->delete($id);

        Flash::success('Job Setting Location deleted successfully.');

        return redirect(route('jobSettingLocations.index'));
    }
}
