<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeGraderRequest;
use App\Http\Requests\UpdateTypeGraderRequest;
use App\Repositories\TypeGraderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TypeGraderController extends AppBaseController
{
    /** @var  TypeGraderRepository */
    private $typeGraderRepository;

    public function __construct(TypeGraderRepository $typeGraderRepo)
    {
        $this->typeGraderRepository = $typeGraderRepo;
    }

    /**
     * Display a listing of the TypeGrader.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->typeGraderRepository->pushCriteria(new RequestCriteria($request));
        $typeGraders = $this->typeGraderRepository->all();

        return view('type_graders.index')
            ->with('typeGraders', $typeGraders);
    }

    /**
     * Show the form for creating a new TypeGrader.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_graders.create');
    }

    /**
     * Store a newly created TypeGrader in storage.
     *
     * @param CreateTypeGraderRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeGraderRequest $request)
    {
        $input = $request->all();

        $typeGrader = $this->typeGraderRepository->create($input);

        Flash::success('Type Grader saved successfully.');

        return redirect(route('typeGraders.index'));
    }

    /**
     * Display the specified TypeGrader.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeGrader = $this->typeGraderRepository->findWithoutFail($id);

        if (empty($typeGrader)) {
            Flash::error('Type Grader not found');

            return redirect(route('typeGraders.index'));
        }

        return view('type_graders.show')->with('typeGrader', $typeGrader);
    }

    /**
     * Show the form for editing the specified TypeGrader.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeGrader = $this->typeGraderRepository->findWithoutFail($id);

        if (empty($typeGrader)) {
            Flash::error('Type Grader not found');

            return redirect(route('typeGraders.index'));
        }

        return view('type_graders.edit')->with('typeGrader', $typeGrader);
    }

    /**
     * Update the specified TypeGrader in storage.
     *
     * @param  int              $id
     * @param UpdateTypeGraderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeGraderRequest $request)
    {
        $typeGrader = $this->typeGraderRepository->findWithoutFail($id);

        if (empty($typeGrader)) {
            Flash::error('Type Grader not found');

            return redirect(route('typeGraders.index'));
        }

        $typeGrader = $this->typeGraderRepository->update($request->all(), $id);

        Flash::success('Type Grader updated successfully.');

        return redirect(route('typeGraders.index'));
    }

    /**
     * Remove the specified TypeGrader from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeGrader = $this->typeGraderRepository->findWithoutFail($id);

        if (empty($typeGrader)) {
            Flash::error('Type Grader not found');

            return redirect(route('typeGraders.index'));
        }

        $this->typeGraderRepository->delete($id);

        Flash::success('Type Grader deleted successfully.');

        return redirect(route('typeGraders.index'));
    }
}
