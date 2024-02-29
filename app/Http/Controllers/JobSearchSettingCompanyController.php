<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobSearchSettingCompanyRequest;
use App\Http\Requests\UpdateJobSearchSettingCompanyRequest;
use App\Repositories\JobSearchSettingCompanyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JobSearchSettingCompanyController extends AppBaseController
{
    /** @var  JobSearchSettingCompanyRepository */
    private $jobSearchSettingCompanyRepository;

    public function __construct(JobSearchSettingCompanyRepository $jobSearchSettingCompanyRepo)
    {
        $this->jobSearchSettingCompanyRepository = $jobSearchSettingCompanyRepo;
    }

    /**
     * Display a listing of the JobSearchSettingCompany.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobSearchSettingCompanyRepository->pushCriteria(new RequestCriteria($request));
        $jobSearchSettingCompanies = $this->jobSearchSettingCompanyRepository->all();

        return view('job_search_setting_companies.index')
            ->with('jobSearchSettingCompanies', $jobSearchSettingCompanies);
    }

    /**
     * Show the form for creating a new JobSearchSettingCompany.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_search_setting_companies.create');
    }

    /**
     * Store a newly created JobSearchSettingCompany in storage.
     *
     * @param CreateJobSearchSettingCompanyRequest $request
     *
     * @return Response
     */
    public function store(CreateJobSearchSettingCompanyRequest $request)
    {
        $input = $request->all();

        $jobSearchSettingCompany = $this->jobSearchSettingCompanyRepository->create($input);

        Flash::success('Job Search Setting Company saved successfully.');

        return redirect(route('jobSearchSettingCompanies.index'));
    }

    /**
     * Display the specified JobSearchSettingCompany.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobSearchSettingCompany = $this->jobSearchSettingCompanyRepository->findWithoutFail($id);

        if (empty($jobSearchSettingCompany)) {
            Flash::error('Job Search Setting Company not found');

            return redirect(route('jobSearchSettingCompanies.index'));
        }

        return view('job_search_setting_companies.show')->with('jobSearchSettingCompany', $jobSearchSettingCompany);
    }

    /**
     * Show the form for editing the specified JobSearchSettingCompany.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobSearchSettingCompany = $this->jobSearchSettingCompanyRepository->findWithoutFail($id);

        if (empty($jobSearchSettingCompany)) {
            Flash::error('Job Search Setting Company not found');

            return redirect(route('jobSearchSettingCompanies.index'));
        }

        return view('job_search_setting_companies.edit')->with('jobSearchSettingCompany', $jobSearchSettingCompany);
    }

    /**
     * Update the specified JobSearchSettingCompany in storage.
     *
     * @param  int              $id
     * @param UpdateJobSearchSettingCompanyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobSearchSettingCompanyRequest $request)
    {
        $jobSearchSettingCompany = $this->jobSearchSettingCompanyRepository->findWithoutFail($id);

        if (empty($jobSearchSettingCompany)) {
            Flash::error('Job Search Setting Company not found');

            return redirect(route('jobSearchSettingCompanies.index'));
        }

        $jobSearchSettingCompany = $this->jobSearchSettingCompanyRepository->update($request->all(), $id);

        Flash::success('Job Search Setting Company updated successfully.');

        return redirect(route('jobSearchSettingCompanies.index'));
    }

    /**
     * Remove the specified JobSearchSettingCompany from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobSearchSettingCompany = $this->jobSearchSettingCompanyRepository->findWithoutFail($id);

        if (empty($jobSearchSettingCompany)) {
            Flash::error('Job Search Setting Company not found');

            return redirect(route('jobSearchSettingCompanies.index'));
        }

        $this->jobSearchSettingCompanyRepository->delete($id);

        Flash::success('Job Search Setting Company deleted successfully.');

        return redirect(route('jobSearchSettingCompanies.index'));
    }
}
