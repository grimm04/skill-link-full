<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDurationJobRequest;
use App\Http\Requests\UpdateDurationJobRequest;
use App\Repositories\DurationJobRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DurationJobController extends AppBaseController
{
    /** @var  DurationJobRepository */
    private $durationJobRepository;

    public function __construct(DurationJobRepository $durationJobRepo)
    {
        $this->durationJobRepository = $durationJobRepo;
    }

    /**
     * Display a listing of the DurationJob.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->durationJobRepository->pushCriteria(new RequestCriteria($request));
        $durationJobs = $this->durationJobRepository->all();

        return view('duration_jobs.index')
            ->with('durationJobs', $durationJobs);
    }

    /**
     * Show the form for creating a new DurationJob.
     *
     * @return Response
     */
    public function create()
    {
        return view('duration_jobs.create');
    }

    /**
     * Store a newly created DurationJob in storage.
     *
     * @param CreateDurationJobRequest $request
     *
     * @return Response
     */
    public function store(CreateDurationJobRequest $request)
    {
        $input = $request->all();

        $durationJob = $this->durationJobRepository->create($input);

        Flash::success('Duration Job saved successfully.');

        return redirect(route('durationJobs.index'));
    }

    /**
     * Display the specified DurationJob.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $durationJob = $this->durationJobRepository->findWithoutFail($id);

        if (empty($durationJob)) {
            Flash::error('Duration Job not found');

            return redirect(route('durationJobs.index'));
        }

        return view('duration_jobs.show')->with('durationJob', $durationJob);
    }

    /**
     * Show the form for editing the specified DurationJob.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $durationJob = $this->durationJobRepository->findWithoutFail($id);

        if (empty($durationJob)) {
            Flash::error('Duration Job not found');

            return redirect(route('durationJobs.index'));
        }

        return view('duration_jobs.edit')->with('durationJob', $durationJob);
    }

    /**
     * Update the specified DurationJob in storage.
     *
     * @param  int              $id
     * @param UpdateDurationJobRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDurationJobRequest $request)
    {
        $durationJob = $this->durationJobRepository->findWithoutFail($id);

        if (empty($durationJob)) {
            Flash::error('Duration Job not found');

            return redirect(route('durationJobs.index'));
        }

        $durationJob = $this->durationJobRepository->update($request->all(), $id);

        Flash::success('Duration Job updated successfully.');

        return redirect(route('durationJobs.index'));
    }

    /**
     * Remove the specified DurationJob from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $durationJob = $this->durationJobRepository->findWithoutFail($id);

        if (empty($durationJob)) {
            Flash::error('Duration Job not found');

            return redirect(route('durationJobs.index'));
        }

        $this->durationJobRepository->delete($id);

        Flash::success('Duration Job deleted successfully.');

        return redirect(route('durationJobs.index'));
    }
}
