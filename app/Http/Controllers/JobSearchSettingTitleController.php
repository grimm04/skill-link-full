<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobSearchSettingTitleRequest;
use App\Http\Requests\UpdateJobSearchSettingTitleRequest;
use App\Repositories\JobSearchSettingTitleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobSearchSettingTitleController extends AppBaseController
{
    /** @var  JobSearchSettingTitleRepository */
    private $jobSearchSettingTitleRepository;

    public function __construct(JobSearchSettingTitleRepository $jobSearchSettingTitleRepo)
    {
        $this->jobSearchSettingTitleRepository = $jobSearchSettingTitleRepo;
    }

    /**
     * Display a listing of the JobSearchSettingTitle.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobSearchSettingTitleRepository->pushCriteria(new RequestCriteria($request));
        $jobSearchSettingTitles = $this->jobSearchSettingTitleRepository->all();

        return view('job_search_setting_titles.index')
            ->with('jobSearchSettingTitles', $jobSearchSettingTitles);
    }

    /**
     * Show the form for creating a new JobSearchSettingTitle.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_search_setting_titles.create');
    }

    /**
     * Store a newly created JobSearchSettingTitle in storage.
     *
     * @param CreateJobSearchSettingTitleRequest $request
     *
     * @return Response
     */
    public function store(CreateJobSearchSettingTitleRequest $request)
    {
        $input = $request->all();

        $jobSearchSettingTitle = $this->jobSearchSettingTitleRepository->create($input);

        Flash::success('Job Search Setting Title saved successfully.');

        return redirect(route('jobSearchSettingTitles.index'));
    }

    /**
     * Display the specified JobSearchSettingTitle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobSearchSettingTitle = $this->jobSearchSettingTitleRepository->findWithoutFail($id);

        if (empty($jobSearchSettingTitle)) {
            Flash::error('Job Search Setting Title not found');

            return redirect(route('jobSearchSettingTitles.index'));
        }

        return view('job_search_setting_titles.show')->with('jobSearchSettingTitle', $jobSearchSettingTitle);
    }

    /**
     * Show the form for editing the specified JobSearchSettingTitle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobSearchSettingTitle = $this->jobSearchSettingTitleRepository->findWithoutFail($id);

        if (empty($jobSearchSettingTitle)) {
            Flash::error('Job Search Setting Title not found');

            return redirect(route('jobSearchSettingTitles.index'));
        }

        return view('job_search_setting_titles.edit')->with('jobSearchSettingTitle', $jobSearchSettingTitle);
    }

    /**
     * Update the specified JobSearchSettingTitle in storage.
     *
     * @param  int              $id
     * @param UpdateJobSearchSettingTitleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobSearchSettingTitleRequest $request)
    {
        $jobSearchSettingTitle = $this->jobSearchSettingTitleRepository->findWithoutFail($id);

        if (empty($jobSearchSettingTitle)) {
            Flash::error('Job Search Setting Title not found');

            return redirect(route('jobSearchSettingTitles.index'));
        }

        $jobSearchSettingTitle = $this->jobSearchSettingTitleRepository->update($request->all(), $id);

        Flash::success('Job Search Setting Title updated successfully.');

        return redirect(route('jobSearchSettingTitles.index'));
    }

    /**
     * Remove the specified JobSearchSettingTitle from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobSearchSettingTitle = $this->jobSearchSettingTitleRepository->findWithoutFail($id);

        if (empty($jobSearchSettingTitle)) {
            Flash::error('Job Search Setting Title not found');

            return redirect(route('jobSearchSettingTitles.index'));
        }

        $this->jobSearchSettingTitleRepository->delete($id);

        Flash::success('Job Search Setting Title deleted successfully.');

        return redirect(route('jobSearchSettingTitles.index'));
    }
}
