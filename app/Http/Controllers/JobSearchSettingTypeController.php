<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobSearchSettingTypeRequest;
use App\Http\Requests\UpdateJobSearchSettingTypeRequest;
use App\Repositories\JobSearchSettingTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobSearchSettingTypeController extends AppBaseController
{
    /** @var  JobSearchSettingTypeRepository */
    private $jobSearchSettingTypeRepository;

    public function __construct(JobSearchSettingTypeRepository $jobSearchSettingTypeRepo)
    {
        $this->jobSearchSettingTypeRepository = $jobSearchSettingTypeRepo;
    }

    /**
     * Display a listing of the JobSearchSettingType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobSearchSettingTypeRepository->pushCriteria(new RequestCriteria($request));
        $jobSearchSettingTypes = $this->jobSearchSettingTypeRepository->all();

        return view('job_search_setting_types.index')
            ->with('jobSearchSettingTypes', $jobSearchSettingTypes);
    }

    /**
     * Show the form for creating a new JobSearchSettingType.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_search_setting_types.create');
    }

    /**
     * Store a newly created JobSearchSettingType in storage.
     *
     * @param CreateJobSearchSettingTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateJobSearchSettingTypeRequest $request)
    {
        $input = $request->all();

        $jobSearchSettingType = $this->jobSearchSettingTypeRepository->create($input);

        Flash::success('Job Search Setting Type saved successfully.');

        return redirect(route('jobSearchSettingTypes.index'));
    }

    /**
     * Display the specified JobSearchSettingType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobSearchSettingType = $this->jobSearchSettingTypeRepository->findWithoutFail($id);

        if (empty($jobSearchSettingType)) {
            Flash::error('Job Search Setting Type not found');

            return redirect(route('jobSearchSettingTypes.index'));
        }

        return view('job_search_setting_types.show')->with('jobSearchSettingType', $jobSearchSettingType);
    }

    /**
     * Show the form for editing the specified JobSearchSettingType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobSearchSettingType = $this->jobSearchSettingTypeRepository->findWithoutFail($id);

        if (empty($jobSearchSettingType)) {
            Flash::error('Job Search Setting Type not found');

            return redirect(route('jobSearchSettingTypes.index'));
        }

        return view('job_search_setting_types.edit')->with('jobSearchSettingType', $jobSearchSettingType);
    }

    /**
     * Update the specified JobSearchSettingType in storage.
     *
     * @param  int              $id
     * @param UpdateJobSearchSettingTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobSearchSettingTypeRequest $request)
    {
        $jobSearchSettingType = $this->jobSearchSettingTypeRepository->findWithoutFail($id);

        if (empty($jobSearchSettingType)) {
            Flash::error('Job Search Setting Type not found');

            return redirect(route('jobSearchSettingTypes.index'));
        }

        $jobSearchSettingType = $this->jobSearchSettingTypeRepository->update($request->all(), $id);

        Flash::success('Job Search Setting Type updated successfully.');

        return redirect(route('jobSearchSettingTypes.index'));
    }

    /**
     * Remove the specified JobSearchSettingType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobSearchSettingType = $this->jobSearchSettingTypeRepository->findWithoutFail($id);

        if (empty($jobSearchSettingType)) {
            Flash::error('Job Search Setting Type not found');

            return redirect(route('jobSearchSettingTypes.index'));
        }

        $this->jobSearchSettingTypeRepository->delete($id);

        Flash::success('Job Search Setting Type deleted successfully.');

        return redirect(route('jobSearchSettingTypes.index'));
    }
}
