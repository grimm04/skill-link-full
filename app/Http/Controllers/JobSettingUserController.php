<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobSettingUserRequest;
use App\Http\Requests\UpdateJobSettingUserRequest;
use App\Repositories\JobSettingUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobSettingUserController extends AppBaseController
{
    /** @var  JobSettingUserRepository */
    private $jobSettingUserRepository;

    public function __construct(JobSettingUserRepository $jobSettingUserRepo)
    {
        $this->jobSettingUserRepository = $jobSettingUserRepo;
    }

    /**
     * Display a listing of the JobSettingUser.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobSettingUserRepository->pushCriteria(new RequestCriteria($request));
        $jobSettingUsers = $this->jobSettingUserRepository->all();

        return view('job_setting_users.index')
            ->with('jobSettingUsers', $jobSettingUsers);
    }

    /**
     * Show the form for creating a new JobSettingUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_setting_users.create');
    }

    /**
     * Store a newly created JobSettingUser in storage.
     *
     * @param CreateJobSettingUserRequest $request
     *
     * @return Response
     */
    public function store(CreateJobSettingUserRequest $request)
    {
        $input = $request->all();

        $jobSettingUser = $this->jobSettingUserRepository->create($input);

        Flash::success('Job Setting User saved successfully.');

        return redirect(route('jobSettingUsers.index'));
    }

    /**
     * Display the specified JobSettingUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobSettingUser = $this->jobSettingUserRepository->findWithoutFail($id);

        if (empty($jobSettingUser)) {
            Flash::error('Job Setting User not found');

            return redirect(route('jobSettingUsers.index'));
        }

        return view('job_setting_users.show')->with('jobSettingUser', $jobSettingUser);
    }

    /**
     * Show the form for editing the specified JobSettingUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobSettingUser = $this->jobSettingUserRepository->findWithoutFail($id);

        if (empty($jobSettingUser)) {
            Flash::error('Job Setting User not found');

            return redirect(route('jobSettingUsers.index'));
        }

        return view('job_setting_users.edit')->with('jobSettingUser', $jobSettingUser);
    }

    /**
     * Update the specified JobSettingUser in storage.
     *
     * @param  int              $id
     * @param UpdateJobSettingUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobSettingUserRequest $request)
    {
        $jobSettingUser = $this->jobSettingUserRepository->findWithoutFail($id);

        if (empty($jobSettingUser)) {
            Flash::error('Job Setting User not found');

            return redirect(route('jobSettingUsers.index'));
        }

        $jobSettingUser = $this->jobSettingUserRepository->update($request->all(), $id);

        Flash::success('Job Setting User updated successfully.');

        return redirect(route('jobSettingUsers.index'));
    }

    /**
     * Remove the specified JobSettingUser from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobSettingUser = $this->jobSettingUserRepository->findWithoutFail($id);

        if (empty($jobSettingUser)) {
            Flash::error('Job Setting User not found');

            return redirect(route('jobSettingUsers.index'));
        }

        $this->jobSettingUserRepository->delete($id);

        Flash::success('Job Setting User deleted successfully.');

        return redirect(route('jobSettingUsers.index'));
    }
}
