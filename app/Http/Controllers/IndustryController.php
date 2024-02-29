<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIndustryRequest;
use App\Http\Requests\UpdateIndustryRequest;
use App\Repositories\IndustryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class IndustryController extends AppBaseController
{
    /** @var  IndustryRepository */
    private $industryRepository;

    public function __construct(IndustryRepository $industryRepo)
    {
        $this->industryRepository = $industryRepo;
    }

    /**
     * Display a listing of the Industry.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->industryRepository->pushCriteria(new RequestCriteria($request));
        $industries = $this->industryRepository->all();

        return view('industries.index')
            ->with('industries', $industries);
    }

    /**
     * Show the form for creating a new Industry.
     *
     * @return Response
     */
    public function create()
    {
        return view('industries.create');
    }

    /**
     * Store a newly created Industry in storage.
     *
     * @param CreateIndustryRequest $request
     *
     * @return Response
     */
    public function store(CreateIndustryRequest $request)
    {
        $input = $request->all();

        $industry = $this->industryRepository->create($input);

        Flash::success('Industry saved successfully.');

        return redirect(route('industries.index'));
    }

    /**
     * Display the specified Industry.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $industry = $this->industryRepository->findWithoutFail($id);

        if (empty($industry)) {
            Flash::error('Industry not found');

            return redirect(route('industries.index'));
        }

        return view('industries.show')->with('industry', $industry);
    }

    /**
     * Show the form for editing the specified Industry.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $industry = $this->industryRepository->findWithoutFail($id);

        if (empty($industry)) {
            Flash::error('Industry not found');

            return redirect(route('industries.index'));
        }

        return view('industries.edit')->with('industry', $industry);
    }

    /**
     * Update the specified Industry in storage.
     *
     * @param  int              $id
     * @param UpdateIndustryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIndustryRequest $request)
    {
        $industry = $this->industryRepository->findWithoutFail($id);

        if (empty($industry)) {
            Flash::error('Industry not found');

            return redirect(route('industries.index'));
        }

        $industry = $this->industryRepository->update($request->all(), $id);

        Flash::success('Industry updated successfully.');

        return redirect(route('industries.index'));
    }

    /**
     * Remove the specified Industry from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $industry = $this->industryRepository->findWithoutFail($id);

        if (empty($industry)) {
            Flash::error('Industry not found');

            return redirect(route('industries.index'));
        }

        $this->industryRepository->delete($id);

        Flash::success('Industry deleted successfully.');

        return redirect(route('industries.index'));
    }
}
