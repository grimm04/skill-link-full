<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubcribeRequest;
use App\Http\Requests\UpdateSubcribeRequest;
use App\Repositories\SubcribeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SubcribeController extends AppBaseController
{
    /** @var  SubcribeRepository */
    private $subcribeRepository;

    public function __construct(SubcribeRepository $subcribeRepo)
    {
        $this->subcribeRepository = $subcribeRepo;
    }

    /**
     * Display a listing of the Subcribe.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->subcribeRepository->pushCriteria(new RequestCriteria($request));
        $subcribes = $this->subcribeRepository->all();

        return view('subcribes.index')
            ->with('subcribes', $subcribes);
    }

    /**
     * Show the form for creating a new Subcribe.
     *
     * @return Response
     */
    public function create()
    {
        return view('subcribes.create');
    }

    /**
     * Store a newly created Subcribe in storage.
     *
     * @param CreateSubcribeRequest $request
     *
     * @return Response
     */
    public function store(CreateSubcribeRequest $request)
    {
        $input = $request->all();

        $subcribe = $this->subcribeRepository->create($input);

        Flash::success('Subcribe saved successfully.');

        return redirect(route('subcribes.index'));
    }

    /**
     * Display the specified Subcribe.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subcribe = $this->subcribeRepository->findWithoutFail($id);

        if (empty($subcribe)) {
            Flash::error('Subcribe not found');

            return redirect(route('subcribes.index'));
        }

        return view('subcribes.show')->with('subcribe', $subcribe);
    }

    /**
     * Show the form for editing the specified Subcribe.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subcribe = $this->subcribeRepository->findWithoutFail($id);

        if (empty($subcribe)) {
            Flash::error('Subcribe not found');

            return redirect(route('subcribes.index'));
        }

        return view('subcribes.edit')->with('subcribe', $subcribe);
    }

    /**
     * Update the specified Subcribe in storage.
     *
     * @param  int              $id
     * @param UpdateSubcribeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubcribeRequest $request)
    {
        $subcribe = $this->subcribeRepository->findWithoutFail($id);

        if (empty($subcribe)) {
            Flash::error('Subcribe not found');

            return redirect(route('subcribes.index'));
        }

        $subcribe = $this->subcribeRepository->update($request->all(), $id);

        Flash::success('Subcribe updated successfully.');

        return redirect(route('subcribes.index'));
    }

    /**
     * Remove the specified Subcribe from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subcribe = $this->subcribeRepository->findWithoutFail($id);

        if (empty($subcribe)) {
            Flash::error('Subcribe not found');

            return redirect(route('subcribes.index'));
        }

        $this->subcribeRepository->delete($id);

        Flash::success('Subcribe deleted successfully.');

        return redirect(route('subcribes.index'));
    }
}
