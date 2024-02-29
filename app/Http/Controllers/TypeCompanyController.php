<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeCompanyRequest;
use App\Http\Requests\UpdateTypeCompanyRequest;
use App\Repositories\TypeCompanyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TypeCompanyController extends AppBaseController
{
    /** @var  TypeCompanyRepository */
    private $typeCompanyRepository;

    public function __construct(TypeCompanyRepository $typeCompanyRepo)
    {
        $this->typeCompanyRepository = $typeCompanyRepo;
    }

    /**
     * Display a listing of the TypeCompany.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->typeCompanyRepository->pushCriteria(new RequestCriteria($request));
        $typeCompanies = $this->typeCompanyRepository->all();

        return view('type_companies.index')
            ->with('typeCompanies', $typeCompanies);
    }

    /**
     * Show the form for creating a new TypeCompany.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_companies.create');
    }

    /**
     * Store a newly created TypeCompany in storage.
     *
     * @param CreateTypeCompanyRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeCompanyRequest $request)
    {
        $input = $request->all();

        $typeCompany = $this->typeCompanyRepository->create($input);

        Flash::success('Type Company saved successfully.');

        return redirect(route('typeCompanies.index'));
    }

    /**
     * Display the specified TypeCompany.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeCompany = $this->typeCompanyRepository->findWithoutFail($id);

        if (empty($typeCompany)) {
            Flash::error('Type Company not found');

            return redirect(route('typeCompanies.index'));
        }

        return view('type_companies.show')->with('typeCompany', $typeCompany);
    }

    /**
     * Show the form for editing the specified TypeCompany.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeCompany = $this->typeCompanyRepository->findWithoutFail($id);

        if (empty($typeCompany)) {
            Flash::error('Type Company not found');

            return redirect(route('typeCompanies.index'));
        }

        return view('type_companies.edit')->with('typeCompany', $typeCompany);
    }

    /**
     * Update the specified TypeCompany in storage.
     *
     * @param  int              $id
     * @param UpdateTypeCompanyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeCompanyRequest $request)
    {
        $typeCompany = $this->typeCompanyRepository->findWithoutFail($id);

        if (empty($typeCompany)) {
            Flash::error('Type Company not found');

            return redirect(route('typeCompanies.index'));
        }

        $typeCompany = $this->typeCompanyRepository->update($request->all(), $id);

        Flash::success('Type Company updated successfully.');

        return redirect(route('typeCompanies.index'));
    }

    /**
     * Remove the specified TypeCompany from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeCompany = $this->typeCompanyRepository->findWithoutFail($id);

        if (empty($typeCompany)) {
            Flash::error('Type Company not found');

            return redirect(route('typeCompanies.index'));
        }

        $this->typeCompanyRepository->delete($id);

        Flash::success('Type Company deleted successfully.');

        return redirect(route('typeCompanies.index'));
    }
}
