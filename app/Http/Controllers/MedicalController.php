<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicalRequest;
use App\Http\Requests\UpdateMedicalRequest;
use App\Repositories\MedicalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MedicalController extends AppBaseController
{
    /** @var  MedicalRepository */
    private $medicalRepository;

    public function __construct(MedicalRepository $medicalRepo)
    {
        $this->medicalRepository = $medicalRepo;
    }

    /**
     * Display a listing of the Medical.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->medicalRepository->pushCriteria(new RequestCriteria($request));
        $medicals = $this->medicalRepository->all();

        return view('medicals.index')
            ->with('medicals', $medicals);
    }

    /**
     * Show the form for creating a new Medical.
     *
     * @return Response
     */
    public function create()
    {
        return view('medicals.create');
    }

    /**
     * Store a newly created Medical in storage.
     *
     * @param CreateMedicalRequest $request
     *
     * @return Response
     */
    public function store(CreateMedicalRequest $request)
    {
        $input = $request->all();

        $medical = $this->medicalRepository->create($input);

        Flash::success('Medical saved successfully.');

        return redirect(route('medicals.index'));
    }

    /**
     * Display the specified Medical.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medical = $this->medicalRepository->findWithoutFail($id);

        if (empty($medical)) {
            Flash::error('Medical not found');

            return redirect(route('medicals.index'));
        }

        return view('medicals.show')->with('medical', $medical);
    }

    /**
     * Show the form for editing the specified Medical.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medical = $this->medicalRepository->findWithoutFail($id);

        if (empty($medical)) {
            Flash::error('Medical not found');

            return redirect(route('medicals.index'));
        }

        return view('medicals.edit')->with('medical', $medical);
    }

    /**
     * Update the specified Medical in storage.
     *
     * @param  int              $id
     * @param UpdateMedicalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMedicalRequest $request)
    {
        $medical = $this->medicalRepository->findWithoutFail($id);

        if (empty($medical)) {
            Flash::error('Medical not found');

            return redirect(route('medicals.index'));
        }

        $medical = $this->medicalRepository->update($request->all(), $id);

        Flash::success('Medical updated successfully.');

        return redirect(route('medicals.index'));
    }

    /**
     * Remove the specified Medical from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $medical = $this->medicalRepository->findWithoutFail($id);

        if (empty($medical)) {
            Flash::error('Medical not found');

            return redirect(route('medicals.index'));
        }

        $this->medicalRepository->delete($id);

        Flash::success('Medical deleted successfully.');

        return redirect(route('medicals.index'));
    }
}
