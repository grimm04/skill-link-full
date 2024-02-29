<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobSearchSettingLocationRequest;
use App\Http\Requests\UpdateJobSearchSettingLocationRequest;
use App\Repositories\JobSearchSettingLocationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobSearchSettingLocationController extends AppBaseController
{
    /** @var  JobSearchSettingLocationRepository */
    private $jobSearchSettingLocationRepository;

    public function __construct(JobSearchSettingLocationRepository $jobSearchSettingLocationRepo)
    {
        $this->jobSearchSettingLocationRepository = $jobSearchSettingLocationRepo;
    }

    /**
     * Display a listing of the JobSearchSettingLocation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobSearchSettingLocationRepository->pushCriteria(new RequestCriteria($request));
        $jobSearchSettingLocations = $this->jobSearchSettingLocationRepository->all();

        return view('job_search_setting_locations.index')
            ->with('jobSearchSettingLocations', $jobSearchSettingLocations);
    }

    /**
     * Show the form for creating a new JobSearchSettingLocation.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_search_setting_locations.create');
    }

    /**
     * Store a newly created JobSearchSettingLocation in storage.
     *
     * @param CreateJobSearchSettingLocationRequest $request
     *
     * @return Response
     */
    public function store(CreateJobSearchSettingLocationRequest $request)
    {
        $input = $request->all();

        $jobSearchSettingLocation = $this->jobSearchSettingLocationRepository->create($input);

        Flash::success('Job Search Setting Location saved successfully.');

        return redirect(route('jobSearchSettingLocations.index'));
    }

    /**
     * Display the specified JobSearchSettingLocation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobSearchSettingLocation = $this->jobSearchSettingLocationRepository->findWithoutFail($id);

        if (empty($jobSearchSettingLocation)) {
            Flash::error('Job Search Setting Location not found');

            return redirect(route('jobSearchSettingLocations.index'));
        }

        return view('job_search_setting_locations.show')->with('jobSearchSettingLocation', $jobSearchSettingLocation);
    }

    /**
     * Show the form for editing the specified JobSearchSettingLocation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobSearchSettingLocation = $this->jobSearchSettingLocationRepository->findWithoutFail($id);

        if (empty($jobSearchSettingLocation)) {
            Flash::error('Job Search Setting Location not found');

            return redirect(route('jobSearchSettingLocations.index'));
        }

        return view('job_search_setting_locations.edit')->with('jobSearchSettingLocation', $jobSearchSettingLocation);
    }

    /**
     * Update the specified JobSearchSettingLocation in storage.
     *
     * @param  int              $id
     * @param UpdateJobSearchSettingLocationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobSearchSettingLocationRequest $request)
    {
        $jobSearchSettingLocation = $this->jobSearchSettingLocationRepository->findWithoutFail($id);

        if (empty($jobSearchSettingLocation)) {
            Flash::error('Job Search Setting Location not found');

            return redirect(route('jobSearchSettingLocations.index'));
        }

        $jobSearchSettingLocation = $this->jobSearchSettingLocationRepository->update($request->all(), $id);

        Flash::success('Job Search Setting Location updated successfully.');

        return redirect(route('jobSearchSettingLocations.index'));
    }

    /**
     * Remove the specified JobSearchSettingLocation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobSearchSettingLocation = $this->jobSearchSettingLocationRepository->findWithoutFail($id);

        if (empty($jobSearchSettingLocation)) {
            Flash::error('Job Search Setting Location not found');

            return redirect(route('jobSearchSettingLocations.index'));
        }

        $this->jobSearchSettingLocationRepository->delete($id);

        Flash::success('Job Search Setting Location deleted successfully.');

        return redirect(route('jobSearchSettingLocations.index'));
    }
}
