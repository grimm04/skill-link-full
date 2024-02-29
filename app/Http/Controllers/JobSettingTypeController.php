<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobSettingTypeRequest;
use App\Http\Requests\UpdateJobSettingTypeRequest;
use App\Repositories\JobSettingTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobSettingTypeController extends AppBaseController
{
    /** @var  JobSettingTypeRepository */
    private $jobSettingTypeRepository;

    public function __construct(JobSettingTypeRepository $jobSettingTypeRepo)
    {
        $this->jobSettingTypeRepository = $jobSettingTypeRepo;
    }

    /**
     * Display a listing of the JobSettingType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobSettingTypeRepository->pushCriteria(new RequestCriteria($request));
        $jobSettingTypes = $this->jobSettingTypeRepository->all();

        return view('job_setting_types.index')
            ->with('jobSettingTypes', $jobSettingTypes);
    }

    /**
     * Show the form for creating a new JobSettingType.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_setting_types.create');
    }

    /**
     * Store a newly created JobSettingType in storage.
     *
     * @param CreateJobSettingTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateJobSettingTypeRequest $request)
    {
        $input = $request->all();

        $jobSettingType = $this->jobSettingTypeRepository->create($input);

        Flash::success('Job Setting Type saved successfully.');

        return redirect(route('jobSettingTypes.index'));
    }

    /**
     * Display the specified JobSettingType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobSettingType = $this->jobSettingTypeRepository->findWithoutFail($id);

        if (empty($jobSettingType)) {
            Flash::error('Job Setting Type not found');

            return redirect(route('jobSettingTypes.index'));
        }

        return view('job_setting_types.show')->with('jobSettingType', $jobSettingType);
    }

    /**
     * Show the form for editing the specified JobSettingType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobSettingType = $this->jobSettingTypeRepository->findWithoutFail($id);

        if (empty($jobSettingType)) {
            Flash::error('Job Setting Type not found');

            return redirect(route('jobSettingTypes.index'));
        }

        return view('job_setting_types.edit')->with('jobSettingType', $jobSettingType);
    }

    /**
     * Update the specified JobSettingType in storage.
     *
     * @param  int              $id
     * @param UpdateJobSettingTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobSettingTypeRequest $request)
    {
        $jobSettingType = $this->jobSettingTypeRepository->findWithoutFail($id);

        if (empty($jobSettingType)) {
            Flash::error('Job Setting Type not found');

            return redirect(route('jobSettingTypes.index'));
        }

        $jobSettingType = $this->jobSettingTypeRepository->update($request->all(), $id);

        Flash::success('Job Setting Type updated successfully.');

        return redirect(route('jobSettingTypes.index'));
    }

    /**
     * Remove the specified JobSettingType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobSettingType = $this->jobSettingTypeRepository->findWithoutFail($id);

        if (empty($jobSettingType)) {
            Flash::error('Job Setting Type not found');

            return redirect(route('jobSettingTypes.index'));
        }

        $this->jobSettingTypeRepository->delete($id);

        Flash::success('Job Setting Type deleted successfully.');

        return redirect(route('jobSettingTypes.index'));
    }
}
