<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobSkillRequest;
use App\Http\Requests\UpdateJobSkillRequest;
use App\Repositories\JobSkillRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobSkillController extends AppBaseController
{
    /** @var  JobSkillRepository */
    private $jobSkillRepository;

    public function __construct(JobSkillRepository $jobSkillRepo)
    {
        $this->jobSkillRepository = $jobSkillRepo;
    }

    /**
     * Display a listing of the JobSkill.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobSkillRepository->pushCriteria(new RequestCriteria($request));
        $jobSkills = $this->jobSkillRepository->all();

        return view('job_skills.index')
            ->with('jobSkills', $jobSkills);
    }

    /**
     * Show the form for creating a new JobSkill.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_skills.create');
    }

    /**
     * Store a newly created JobSkill in storage.
     *
     * @param CreateJobSkillRequest $request
     *
     * @return Response
     */
    public function store(CreateJobSkillRequest $request)
    {
        $input = $request->all();

        $jobSkill = $this->jobSkillRepository->create($input);

        Flash::success('Job Skill saved successfully.');

        return redirect(route('jobSkills.index'));
    }

    /**
     * Display the specified JobSkill.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobSkill = $this->jobSkillRepository->findWithoutFail($id);

        if (empty($jobSkill)) {
            Flash::error('Job Skill not found');

            return redirect(route('jobSkills.index'));
        }

        return view('job_skills.show')->with('jobSkill', $jobSkill);
    }

    /**
     * Show the form for editing the specified JobSkill.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobSkill = $this->jobSkillRepository->findWithoutFail($id);

        if (empty($jobSkill)) {
            Flash::error('Job Skill not found');

            return redirect(route('jobSkills.index'));
        }

        return view('job_skills.edit')->with('jobSkill', $jobSkill);
    }

    /**
     * Update the specified JobSkill in storage.
     *
     * @param  int              $id
     * @param UpdateJobSkillRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobSkillRequest $request)
    {
        $jobSkill = $this->jobSkillRepository->findWithoutFail($id);

        if (empty($jobSkill)) {
            Flash::error('Job Skill not found');

            return redirect(route('jobSkills.index'));
        }

        $jobSkill = $this->jobSkillRepository->update($request->all(), $id);

        Flash::success('Job Skill updated successfully.');

        return redirect(route('jobSkills.index'));
    }

    /**
     * Remove the specified JobSkill from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobSkill = $this->jobSkillRepository->findWithoutFail($id);

        if (empty($jobSkill)) {
            Flash::error('Job Skill not found');

            return redirect(route('jobSkills.index'));
        }

        $this->jobSkillRepository->delete($id);

        Flash::success('Job Skill deleted successfully.');

        return redirect(route('jobSkills.index'));
    }
}
