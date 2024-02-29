<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFitDutyRequest;
use App\Http\Requests\UpdateFitDutyRequest;
use App\Repositories\FitDutyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FitDutyController extends AppBaseController
{
    /** @var  FitDutyRepository */
    private $fitDutyRepository;

    public function __construct(FitDutyRepository $fitDutyRepo)
    {
        $this->fitDutyRepository = $fitDutyRepo;
    }

    /**
     * Display a listing of the FitDuty.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->fitDutyRepository->pushCriteria(new RequestCriteria($request));
        $fitDuties = $this->fitDutyRepository->all();

        return view('fit_duties.index')
            ->with('fitDuties', $fitDuties);
    }

    /**
     * Show the form for creating a new FitDuty.
     *
     * @return Response
     */
    public function create()
    {
        return view('fit_duties.create');
    }

    /**
     * Store a newly created FitDuty in storage.
     *
     * @param CreateFitDutyRequest $request
     *
     * @return Response
     */
    public function store(CreateFitDutyRequest $request)
    {
        $input = $request->all();

        $fitDuty = $this->fitDutyRepository->create($input);

        Flash::success('Fit Duty saved successfully.');

        return redirect(route('fitDuties.index'));
    }

    /**
     * Display the specified FitDuty.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fitDuty = $this->fitDutyRepository->findWithoutFail($id);

        if (empty($fitDuty)) {
            Flash::error('Fit Duty not found');

            return redirect(route('fitDuties.index'));
        }

        return view('fit_duties.show')->with('fitDuty', $fitDuty);
    }

    /**
     * Show the form for editing the specified FitDuty.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fitDuty = $this->fitDutyRepository->findWithoutFail($id);

        if (empty($fitDuty)) {
            Flash::error('Fit Duty not found');

            return redirect(route('fitDuties.index'));
        }

        return view('fit_duties.edit')->with('fitDuty', $fitDuty);
    }

    /**
     * Update the specified FitDuty in storage.
     *
     * @param  int              $id
     * @param UpdateFitDutyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFitDutyRequest $request)
    {
        $fitDuty = $this->fitDutyRepository->findWithoutFail($id);

        if (empty($fitDuty)) {
            Flash::error('Fit Duty not found');

            return redirect(route('fitDuties.index'));
        }

        $fitDuty = $this->fitDutyRepository->update($request->all(), $id);

        Flash::success('Fit Duty updated successfully.');

        return redirect(route('fitDuties.index'));
    }

    /**
     * Remove the specified FitDuty from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fitDuty = $this->fitDutyRepository->findWithoutFail($id);

        if (empty($fitDuty)) {
            Flash::error('Fit Duty not found');

            return redirect(route('fitDuties.index'));
        }

        $this->fitDutyRepository->delete($id);

        Flash::success('Fit Duty deleted successfully.');

        return redirect(route('fitDuties.index'));
    }
}
