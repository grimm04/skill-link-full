<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobSearchSettingRequest;
use App\Http\Requests\UpdateJobSearchSettingRequest;
use App\Repositories\JobSearchSettingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobSearchSettingController extends AppBaseController
{
    /** @var  JobSearchSettingRepository */
    private $jobSearchSettingRepository;

    public function __construct(JobSearchSettingRepository $jobSearchSettingRepo)
    {
        $this->jobSearchSettingRepository = $jobSearchSettingRepo;
    }

    /**
     * Display a listing of the JobSearchSetting.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobSearchSettingRepository->pushCriteria(new RequestCriteria($request));
        $jobSearchSettings = $this->jobSearchSettingRepository->all();

        return view('job_search_settings.index')
            ->with('jobSearchSettings', $jobSearchSettings);
    }

    /**
     * Show the form for creating a new JobSearchSetting.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_search_settings.create');
    }

    /**
     * Store a newly created JobSearchSetting in storage.
     *
     * @param CreateJobSearchSettingRequest $request
     *
     * @return Response
     */
    public function store(CreateJobSearchSettingRequest $request)
    {
        $input = $request->all();

        $jobSearchSetting = $this->jobSearchSettingRepository->create($input);

        Flash::success('Job Search Setting saved successfully.');

        return redirect(route('jobSearchSettings.index'));
    }

    /**
     * Display the specified JobSearchSetting.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobSearchSetting = $this->jobSearchSettingRepository->findWithoutFail($id);

        if (empty($jobSearchSetting)) {
            Flash::error('Job Search Setting not found');

            return redirect(route('jobSearchSettings.index'));
        }

        return view('job_search_settings.show')->with('jobSearchSetting', $jobSearchSetting);
    }

    /**
     * Show the form for editing the specified JobSearchSetting.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobSearchSetting = $this->jobSearchSettingRepository->findWithoutFail($id);

        if (empty($jobSearchSetting)) {
            Flash::error('Job Search Setting not found');

            return redirect(route('jobSearchSettings.index'));
        }

        return view('job_search_settings.edit')->with('jobSearchSetting', $jobSearchSetting);
    }

    /**
     * Update the specified JobSearchSetting in storage.
     *
     * @param  int              $id
     * @param UpdateJobSearchSettingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobSearchSettingRequest $request)
    {
        $jobSearchSetting = $this->jobSearchSettingRepository->findWithoutFail($id);

        if (empty($jobSearchSetting)) {
            Flash::error('Job Search Setting not found');

            return redirect(route('jobSearchSettings.index'));
        }

        $jobSearchSetting = $this->jobSearchSettingRepository->update($request->all(), $id);

        Flash::success('Job Search Setting updated successfully.');

        return redirect(route('jobSearchSettings.index'));
    }

    /**
     * Remove the specified JobSearchSetting from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobSearchSetting = $this->jobSearchSettingRepository->findWithoutFail($id);

        if (empty($jobSearchSetting)) {
            Flash::error('Job Search Setting not found');

            return redirect(route('jobSearchSettings.index'));
        }

        $this->jobSearchSettingRepository->delete($id);

        Flash::success('Job Search Setting deleted successfully.');

        return redirect(route('jobSearchSettings.index'));
    }
}
