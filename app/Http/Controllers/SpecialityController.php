<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSpecialityRequest;
use App\Http\Requests\UpdateSpecialityRequest;
use App\Repositories\SpecialityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SpecialityController extends AppBaseController
{
    /** @var  SpecialityRepository */
    private $specialityRepository;

    public function __construct(SpecialityRepository $specialityRepo)
    {
        $this->specialityRepository = $specialityRepo;
    }

    /**
     * Display a listing of the Speciality.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->specialityRepository->pushCriteria(new RequestCriteria($request));
        $specialities = $this->specialityRepository->all();

        return view('specialities.index')
            ->with('specialities', $specialities);
    }

    /**
     * Show the form for creating a new Speciality.
     *
     * @return Response
     */
    public function create()
    {
        return view('specialities.create');
    }

    /**
     * Store a newly created Speciality in storage.
     *
     * @param CreateSpecialityRequest $request
     *
     * @return Response
     */
    public function store(CreateSpecialityRequest $request)
    {
        $input = $request->all();

        $speciality = $this->specialityRepository->create($input);

        Flash::success('Speciality saved successfully.');

        return redirect(route('specialities.index'));
    }

    /**
     * Display the specified Speciality.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $speciality = $this->specialityRepository->findWithoutFail($id);

        if (empty($speciality)) {
            Flash::error('Speciality not found');

            return redirect(route('specialities.index'));
        }

        return view('specialities.show')->with('speciality', $speciality);
    }

    /**
     * Show the form for editing the specified Speciality.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $speciality = $this->specialityRepository->findWithoutFail($id);

        if (empty($speciality)) {
            Flash::error('Speciality not found');

            return redirect(route('specialities.index'));
        }

        return view('specialities.edit')->with('speciality', $speciality);
    }

    /**
     * Update the specified Speciality in storage.
     *
     * @param  int              $id
     * @param UpdateSpecialityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSpecialityRequest $request)
    {
        $speciality = $this->specialityRepository->findWithoutFail($id);

        if (empty($speciality)) {
            Flash::error('Speciality not found');

            return redirect(route('specialities.index'));
        }

        $speciality = $this->specialityRepository->update($request->all(), $id);

        Flash::success('Speciality updated successfully.');

        return redirect(route('specialities.index'));
    }

    /**
     * Remove the specified Speciality from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $speciality = $this->specialityRepository->findWithoutFail($id);

        if (empty($speciality)) {
            Flash::error('Speciality not found');

            return redirect(route('specialities.index'));
        }

        $this->specialityRepository->delete($id);

        Flash::success('Speciality deleted successfully.');

        return redirect(route('specialities.index'));
    }
}
