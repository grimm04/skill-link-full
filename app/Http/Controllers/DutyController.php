<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDutyRequest;
use App\Http\Requests\UpdateDutyRequest;
use App\Repositories\DutyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DutyController extends AppBaseController
{
    /** @var  DutyRepository */
    private $dutyRepository;

    public function __construct(DutyRepository $dutyRepo)
    {
        $this->dutyRepository = $dutyRepo;
    }

    /**
     * Display a listing of the Duty.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dutyRepository->pushCriteria(new RequestCriteria($request));
        $duties = $this->dutyRepository->all();

        return view('duties.index')
            ->with('duties', $duties);
    }

    /**
     * Show the form for creating a new Duty.
     *
     * @return Response
     */
    public function create()
    {
        return view('duties.create');
    }

    /**
     * Store a newly created Duty in storage.
     *
     * @param CreateDutyRequest $request
     *
     * @return Response
     */
    public function store(CreateDutyRequest $request)
    {
        $input = $request->all();

        $duty = $this->dutyRepository->create($input);

        Flash::success('Duty saved successfully.');

        return redirect(route('duties.index'));
    }

    /**
     * Display the specified Duty.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $duty = $this->dutyRepository->findWithoutFail($id);

        if (empty($duty)) {
            Flash::error('Duty not found');

            return redirect(route('duties.index'));
        }

        return view('duties.show')->with('duty', $duty);
    }

    /**
     * Show the form for editing the specified Duty.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $duty = $this->dutyRepository->findWithoutFail($id);

        if (empty($duty)) {
            Flash::error('Duty not found');

            return redirect(route('duties.index'));
        }

        return view('duties.edit')->with('duty', $duty);
    }

    /**
     * Update the specified Duty in storage.
     *
     * @param  int              $id
     * @param UpdateDutyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDutyRequest $request)
    {
        $duty = $this->dutyRepository->findWithoutFail($id);

        if (empty($duty)) {
            Flash::error('Duty not found');

            return redirect(route('duties.index'));
        }

        $duty = $this->dutyRepository->update($request->all(), $id);

        Flash::success('Duty updated successfully.');

        return redirect(route('duties.index'));
    }

    /**
     * Remove the specified Duty from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $duty = $this->dutyRepository->findWithoutFail($id);

        if (empty($duty)) {
            Flash::error('Duty not found');

            return redirect(route('duties.index'));
        }

        $this->dutyRepository->delete($id);

        Flash::success('Duty deleted successfully.');

        return redirect(route('duties.index'));
    }
}
