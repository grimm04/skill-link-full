<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyIndustryRequest;
use App\Http\Requests\UpdateCompanyIndustryRequest;
use App\Repositories\CompanyIndustryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use  App\Models\Industry;
use  App\Models\Company;
class CompanyIndustryController extends AppBaseController
{
    /** @var  CompanyIndustryRepository */
    private $companyIndustryRepository;

    public function __construct(CompanyIndustryRepository $companyIndustryRepo)
    {
        $this->companyIndustryRepository = $companyIndustryRepo;
    }

    /**
     * Display a listing of the CompanyIndustry.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->companyIndustryRepository->pushCriteria(new RequestCriteria($request));
        $companyIndustries = $this->companyIndustryRepository->all();

        return view('company_industries.index')
            ->with('companyIndustries', $companyIndustries);
    }

    /**
     * Show the form for creating a new CompanyIndustry.
     *
     * @return Response
     */
    public function create()
    {   
        $industry = Industry::all();
        $company    =  Company::all();
        $industryid  = '';
        $companyid  = '';
        return view('company_industries.create',compact('industry','company','industryid','companyid'));
    }

    /**
     * Store a newly created CompanyIndustry in storage.
     *
     * @param CreateCompanyIndustryRequest $request
     *
     * @return Response
     */
    public function store(CreateCompanyIndustryRequest $request)
    {
        $input = $request->all();

        $companyIndustry = $this->companyIndustryRepository->create($input);

        Flash::success('Company Industry saved successfully.');

        return redirect(route('companyIndustries.index'));
    }

    /**
     * Display the specified CompanyIndustry.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $companyIndustry = $this->companyIndustryRepository->findWithoutFail($id);

        if (empty($companyIndustry)) {
            Flash::error('Company Industry not found');

            return redirect(route('companyIndustries.index'));
        }

        return view('company_industries.show')->with('companyIndustry', $companyIndustry);
    }

    /**
     * Show the form for editing the specified CompanyIndustry.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $companyIndustry = $this->companyIndustryRepository->findWithoutFail($id);

        if (empty($companyIndustry)) {
            Flash::error('Company Industry not found');

            return redirect(route('companyIndustries.index'));
        }

        return view('company_industries.edit')->with('companyIndustry', $companyIndustry);
    }

    /**
     * Update the specified CompanyIndustry in storage.
     *
     * @param  int              $id
     * @param UpdateCompanyIndustryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompanyIndustryRequest $request)
    {
        $companyIndustry = $this->companyIndustryRepository->findWithoutFail($id);

        if (empty($companyIndustry)) {
            Flash::error('Company Industry not found');

            return redirect(route('companyIndustries.index'));
        }

        $companyIndustry = $this->companyIndustryRepository->update($request->all(), $id);

        Flash::success('Company Industry updated successfully.');

        return redirect(route('companyIndustries.index'));
    }

    /**
     * Remove the specified CompanyIndustry from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $companyIndustry = $this->companyIndustryRepository->findWithoutFail($id);

        if (empty($companyIndustry)) {
            Flash::error('Company Industry not found');

            return redirect(route('companyIndustries.index'));
        }

        $this->companyIndustryRepository->delete($id);

        Flash::success('Company Industry deleted successfully.');

        return redirect(route('companyIndustries.index'));
    }
}
