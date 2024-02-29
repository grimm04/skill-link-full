<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobApplyUserRequest;
use App\Http\Requests\UpdateJobApplyUserRequest;
use App\Repositories\JobApplyUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobApplyUserController extends AppBaseController
{
    /** @var  JobApplyUserRepository */
    private $jobApplyUserRepository;

    public function __construct(JobApplyUserRepository $jobApplyUserRepo)
    {
        $this->jobApplyUserRepository = $jobApplyUserRepo;
    }

    /**
     * Display a listing of the JobApplyUser.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobApplyUserRepository->pushCriteria(new RequestCriteria($request));
        $jobApplyUsers = $this->jobApplyUserRepository->all();

        return view('job_apply_users.index')
            ->with('jobApplyUsers', $jobApplyUsers);
    }

    /**
     * Show the form for creating a new JobApplyUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_apply_users.create');
    }

    /**
     * Store a newly created JobApplyUser in storage.
     *
     * @param CreateJobApplyUserRequest $request
     *
     * @return Response
     */
    public function store(CreateJobApplyUserRequest $request)
    {
        $input = $request->all();

        $jobApplyUser = $this->jobApplyUserRepository->create($input);

        Flash::success('Job Apply User saved successfully.');

        return redirect(route('jobApplyUsers.index'));
    }

    /**
     * Display the specified JobApplyUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobApplyUser = $this->jobApplyUserRepository->findWithoutFail($id);

        if (empty($jobApplyUser)) {
            Flash::error('Job Apply User not found');

            return redirect(route('jobApplyUsers.index'));
        }

        return view('job_apply_users.show')->with('jobApplyUser', $jobApplyUser);
    }

    /**
     * Show the form for editing the specified JobApplyUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobApplyUser = $this->jobApplyUserRepository->findWithoutFail($id);

        if (empty($jobApplyUser)) {
            Flash::error('Job Apply User not found');

            return redirect(route('jobApplyUsers.index'));
        }

        return view('job_apply_users.edit')->with('jobApplyUser', $jobApplyUser);
    }

    /**
     * Update the specified JobApplyUser in storage.
     *
     * @param  int              $id
     * @param UpdateJobApplyUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobApplyUserRequest $request)
    {
        $jobApplyUser = $this->jobApplyUserRepository->findWithoutFail($id);

        if (empty($jobApplyUser)) {
            Flash::error('Job Apply User not found');

            return redirect(route('jobApplyUsers.index'));
        }

        $jobApplyUser = $this->jobApplyUserRepository->update($request->all(), $id);

        Flash::success('Job Apply User updated successfully.');

        return redirect(route('jobApplyUsers.index'));
    }

    /**
     * Remove the specified JobApplyUser from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobApplyUser = $this->jobApplyUserRepository->findWithoutFail($id);

        if (empty($jobApplyUser)) {
            Flash::error('Job Apply User not found');

            return redirect(route('jobApplyUsers.index'));
        }

        $this->jobApplyUserRepository->delete($id);

        Flash::success('Job Apply User deleted successfully.');

        return redirect(route('jobApplyUsers.index'));
    }
}
