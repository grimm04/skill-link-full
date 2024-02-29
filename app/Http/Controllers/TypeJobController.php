<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeJobRequest;
use App\Http\Requests\UpdateTypeJobRequest;
use App\Repositories\TypeJobRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TypeJobController extends AppBaseController
{
    /** @var  TypeJobRepository */
    private $typeJobRepository;

    public function __construct(TypeJobRepository $typeJobRepo)
    {
        $this->typeJobRepository = $typeJobRepo;
    }

    /**
     * Display a listing of the TypeJob.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->typeJobRepository->pushCriteria(new RequestCriteria($request));
        $typeJobs = $this->typeJobRepository->all();

        return view('type_jobs.index')
            ->with('typeJobs', $typeJobs);
    }

    /**
     * Show the form for creating a new TypeJob.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_jobs.create');
    }

    /**
     * Store a newly created TypeJob in storage.
     *
     * @param CreateTypeJobRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeJobRequest $request)
    {
        $input = $request->all();

        $typeJob = $this->typeJobRepository->create($input);

        Flash::success('Type Job saved successfully.');

        return redirect(route('typeJobs.index'));
    }

    /**
     * Display the specified TypeJob.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeJob = $this->typeJobRepository->findWithoutFail($id);

        if (empty($typeJob)) {
            Flash::error('Type Job not found');

            return redirect(route('typeJobs.index'));
        }

        return view('type_jobs.show')->with('typeJob', $typeJob);
    }

    /**
     * Show the form for editing the specified TypeJob.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeJob = $this->typeJobRepository->findWithoutFail($id);

        if (empty($typeJob)) {
            Flash::error('Type Job not found');

            return redirect(route('typeJobs.index'));
        }

        return view('type_jobs.edit')->with('typeJob', $typeJob);
    }

    /**
     * Update the specified TypeJob in storage.
     *
     * @param  int              $id
     * @param UpdateTypeJobRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeJobRequest $request)
    {
        $typeJob = $this->typeJobRepository->findWithoutFail($id);

        if (empty($typeJob)) {
            Flash::error('Type Job not found');

            return redirect(route('typeJobs.index'));
        }

        $typeJob = $this->typeJobRepository->update($request->all(), $id);

        Flash::success('Type Job updated successfully.');

        return redirect(route('typeJobs.index'));
    }

    /**
     * Remove the specified TypeJob from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeJob = $this->typeJobRepository->findWithoutFail($id);

        if (empty($typeJob)) {
            Flash::error('Type Job not found');

            return redirect(route('typeJobs.index'));
        }

        $this->typeJobRepository->delete($id);

        Flash::success('Type Job deleted successfully.');

        return redirect(route('typeJobs.index'));
    }
}
