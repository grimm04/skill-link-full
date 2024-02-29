<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanySpecialityRequest;
use App\Http\Requests\UpdateCompanySpecialityRequest;
use App\Repositories\CompanySpecialityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use  App\Models\Speciality;
use  App\Models\Company;
class CompanySpecialityController extends AppBaseController
{
    /** @var  CompanySpecialityRepository */
    private $companySpecialityRepository;

    public function __construct(CompanySpecialityRepository $companySpecialityRepo)
    {
        $this->companySpecialityRepository = $companySpecialityRepo;
    }

    /** 
     * Display a listing of the CompanySpeciality.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->companySpecialityRepository->pushCriteria(new RequestCriteria($request));
        $companySpecialities = $this->companySpecialityRepository->all();
        
        return view('company_specialities.index')
            ->with('companySpecialities', $companySpecialities);
    }

    /**
     * Show the form for creating a new CompanySpeciality.
     *
     * @return Response
     */
    public function create()
    {   $speciality = Speciality::all();
        $company = Company::all();
        $specialityid  = '';
        $companyid  = '';
        return view('company_specialities.create',compact('speciality','company','specialityid','companyid'));
    }

    /**
     * Store a newly created CompanySpeciality in storage.
     *
     * @param CreateCompanySpecialityRequest $request
     *
     * @return Response
     */
    public function store(CreateCompanySpecialityRequest $request)
    {
        $input = $request->all();

        $companySpeciality = $this->companySpecialityRepository->create($input);

        Flash::success('Company Speciality saved successfully.');

        return redirect(route('companySpecialities.index'));
    }

    /**
     * Display the specified CompanySpeciality.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $companySpeciality = $this->companySpecialityRepository->findWithoutFail($id);

        if (empty($companySpeciality)) {
            Flash::error('Company Speciality not found');

            return redirect(route('companySpecialities.index'));
        }

        return view('company_specialities.show')->with('companySpeciality', $companySpeciality);
    }

    /**
     * Show the form for editing the specified CompanySpeciality.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $companySpeciality = $this->companySpecialityRepository->findWithoutFail($id);

        if (empty($companySpeciality)) {
            Flash::error('Company Speciality not found');

            return redirect(route('companySpecialities.index'));
        }

        return view('company_specialities.edit')->with('companySpeciality', $companySpeciality);
    }

    /**
     * Update the specified CompanySpeciality in storage.
     *
     * @param  int              $id
     * @param UpdateCompanySpecialityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompanySpecialityRequest $request)
    {
        $companySpeciality = $this->companySpecialityRepository->findWithoutFail($id);

        if (empty($companySpeciality)) {
            Flash::error('Company Speciality not found');

            return redirect(route('companySpecialities.index'));
        }

        $companySpeciality = $this->companySpecialityRepository->update($request->all(), $id);

        Flash::success('Company Speciality updated successfully.');

        return redirect(route('companySpecialities.index'));
    }

    /**
     * Remove the specified CompanySpeciality from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $companySpeciality = $this->companySpecialityRepository->findWithoutFail($id);

        if (empty($companySpeciality)) {
            Flash::error('Company Speciality not found');

            return redirect(route('companySpecialities.index'));
        }

        $this->companySpecialityRepository->delete($id);

        Flash::success('Company Speciality deleted successfully.');

        return redirect(route('companySpecialities.index'));
    }
}
