<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGraderRequest;
use App\Http\Requests\UpdateGraderRequest;
use App\Repositories\GraderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GraderController extends AppBaseController
{
    /** @var  GraderRepository */
    private $graderRepository;

    public function __construct(GraderRepository $graderRepo)
    {
        $this->graderRepository = $graderRepo;
    }

    /**
     * Display a listing of the Grader.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->graderRepository->pushCriteria(new RequestCriteria($request));
        $graders = $this->graderRepository->all();

        return view('graders.index')
            ->with('graders', $graders);
    }

    /**
     * Show the form for creating a new Grader.
     *
     * @return Response
     */
    public function create()
    {
        return view('graders.create');
    }

    /**
     * Store a newly created Grader in storage.
     *
     * @param CreateGraderRequest $request
     *
     * @return Response
     */
    public function store(CreateGraderRequest $request)
    {
        $input = $request->all();

        $grader = $this->graderRepository->create($input);

        Flash::success('Grader saved successfully.');

        return redirect(route('graders.index'));
    }

    /**
     * Display the specified Grader.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grader = $this->graderRepository->findWithoutFail($id);

        if (empty($grader)) {
            Flash::error('Grader not found');

            return redirect(route('graders.index'));
        }

        return view('graders.show')->with('grader', $grader);
    }

    /**
     * Show the form for editing the specified Grader.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grader = $this->graderRepository->findWithoutFail($id);

        if (empty($grader)) {
            Flash::error('Grader not found');

            return redirect(route('graders.index'));
        }

        return view('graders.edit')->with('grader', $grader);
    }

    /**
     * Update the specified Grader in storage.
     *
     * @param  int              $id
     * @param UpdateGraderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGraderRequest $request)
    {
        $grader = $this->graderRepository->findWithoutFail($id);

        if (empty($grader)) {
            Flash::error('Grader not found');

            return redirect(route('graders.index'));
        }

        $grader = $this->graderRepository->update($request->all(), $id);

        Flash::success('Grader updated successfully.');

        return redirect(route('graders.index'));
    }

    /**
     * Remove the specified Grader from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grader = $this->graderRepository->findWithoutFail($id);

        if (empty($grader)) {
            Flash::error('Grader not found');

            return redirect(route('graders.index'));
        }

        $this->graderRepository->delete($id);

        Flash::success('Grader deleted successfully.');

        return redirect(route('graders.index'));
    }
}
