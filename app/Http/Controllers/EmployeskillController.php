<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeskillRequest;
use App\Http\Requests\UpdateEmployeskillRequest;
use App\Repositories\EmployeskillRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EmployeskillController extends AppBaseController
{
    /** @var  EmployeskillRepository */
    private $employeskillRepository;

    public function __construct(EmployeskillRepository $employeskillRepo)
    {
        $this->employeskillRepository = $employeskillRepo;
    }

    /**
     * Display a listing of the Employeskill.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->employeskillRepository->pushCriteria(new RequestCriteria($request));
        $employeskills = $this->employeskillRepository->all();

        return view('employeskills.index')
            ->with('employeskills', $employeskills);
    }

    /**
     * Show the form for creating a new Employeskill.
     *
     * @return Response
     */
    public function create()
    {
        return view('employeskills.create');
    }

    /**
     * Store a newly created Employeskill in storage.
     *
     * @param CreateEmployeskillRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeskillRequest $request)
    {
        $input = $request->all();

        $employeskill = $this->employeskillRepository->create($input);

        Flash::success('Employeskill saved successfully.');

        return redirect(route('employeskills.index'));
    }

    /**
     * Display the specified Employeskill.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employeskill = $this->employeskillRepository->findWithoutFail($id);

        if (empty($employeskill)) {
            Flash::error('Employeskill not found');

            return redirect(route('employeskills.index'));
        }

        return view('employeskills.show')->with('employeskill', $employeskill);
    }

    /**
     * Show the form for editing the specified Employeskill.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employeskill = $this->employeskillRepository->findWithoutFail($id);

        if (empty($employeskill)) {
            Flash::error('Employeskill not found');

            return redirect(route('employeskills.index'));
        }

        return view('employeskills.edit')->with('employeskill', $employeskill);
    }

    /**
     * Update the specified Employeskill in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeskillRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeskillRequest $request)
    {
        $employeskill = $this->employeskillRepository->findWithoutFail($id);

        if (empty($employeskill)) {
            Flash::error('Employeskill not found');

            return redirect(route('employeskills.index'));
        }

        $employeskill = $this->employeskillRepository->update($request->all(), $id);

        Flash::success('Employeskill updated successfully.');

        return redirect(route('employeskills.index'));
    }

    /**
     * Remove the specified Employeskill from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employeskill = $this->employeskillRepository->findWithoutFail($id);

        if (empty($employeskill)) {
            Flash::error('Employeskill not found');

            return redirect(route('employeskills.index'));
        }

        $this->employeskillRepository->delete($id);

        Flash::success('Employeskill deleted successfully.');

        return redirect(route('employeskills.index'));
    }
}
