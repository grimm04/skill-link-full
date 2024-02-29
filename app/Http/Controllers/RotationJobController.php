<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRotationJobRequest;
use App\Http\Requests\UpdateRotationJobRequest;
use App\Repositories\RotationJobRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RotationJobController extends AppBaseController
{
    /** @var  RotationJobRepository */
    private $rotationJobRepository;

    public function __construct(RotationJobRepository $rotationJobRepo)
    {
        $this->rotationJobRepository = $rotationJobRepo;
    }

    /**
     * Display a listing of the RotationJob.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rotationJobRepository->pushCriteria(new RequestCriteria($request));
        $rotationJobs = $this->rotationJobRepository->all();

        return view('rotation_jobs.index')
            ->with('rotationJobs', $rotationJobs);
    }

    /**
     * Show the form for creating a new RotationJob.
     *
     * @return Response
     */
    public function create()
    {
        return view('rotation_jobs.create');
    }

    /**
     * Store a newly created RotationJob in storage.
     *
     * @param CreateRotationJobRequest $request
     *
     * @return Response
     */
    public function store(CreateRotationJobRequest $request)
    {
        $input = $request->all();

        $rotationJob = $this->rotationJobRepository->create($input);

        Flash::success('Rotation Job saved successfully.');

        return redirect(route('rotationJobs.index'));
    }

    /**
     * Display the specified RotationJob.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rotationJob = $this->rotationJobRepository->findWithoutFail($id);

        if (empty($rotationJob)) {
            Flash::error('Rotation Job not found');

            return redirect(route('rotationJobs.index'));
        }

        return view('rotation_jobs.show')->with('rotationJob', $rotationJob);
    }

    /**
     * Show the form for editing the specified RotationJob.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rotationJob = $this->rotationJobRepository->findWithoutFail($id);

        if (empty($rotationJob)) {
            Flash::error('Rotation Job not found');

            return redirect(route('rotationJobs.index'));
        }

        return view('rotation_jobs.edit')->with('rotationJob', $rotationJob);
    }

    /**
     * Update the specified RotationJob in storage.
     *
     * @param  int              $id
     * @param UpdateRotationJobRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRotationJobRequest $request)
    {
        $rotationJob = $this->rotationJobRepository->findWithoutFail($id);

        if (empty($rotationJob)) {
            Flash::error('Rotation Job not found');

            return redirect(route('rotationJobs.index'));
        }

        $rotationJob = $this->rotationJobRepository->update($request->all(), $id);

        Flash::success('Rotation Job updated successfully.');

        return redirect(route('rotationJobs.index'));
    }

    /**
     * Remove the specified RotationJob from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rotationJob = $this->rotationJobRepository->findWithoutFail($id);

        if (empty($rotationJob)) {
            Flash::error('Rotation Job not found');

            return redirect(route('rotationJobs.index'));
        }

        $this->rotationJobRepository->delete($id);

        Flash::success('Rotation Job deleted successfully.');

        return redirect(route('rotationJobs.index'));
    }
}
