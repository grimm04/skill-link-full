<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMartialRequest;
use App\Http\Requests\UpdateMartialRequest;
use App\Repositories\MartialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MartialController extends AppBaseController
{
    /** @var  MartialRepository */
    private $martialRepository;

    public function __construct(MartialRepository $martialRepo)
    {   
        $this->middleware('auth:admin');
        $this->martialRepository = $martialRepo;
    }

    /**
     * Display a listing of the Martial.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->martialRepository->pushCriteria(new RequestCriteria($request));
        $martials = $this->martialRepository->all();

        return view('martials.index')
            ->with('martials', $martials);
    }

    /**
     * Show the form for creating a new Martial.
     *
     * @return Response
     */
    public function create()
    {
        return view('martials.create');
    }

    /**
     * Store a newly created Martial in storage.
     *
     * @param CreateMartialRequest $request
     *
     * @return Response
     */
    public function store(CreateMartialRequest $request)
    {
        $input = $request->all();

        $martial = $this->martialRepository->create($input);

        Flash::success('Martial saved successfully.');

        return redirect(route('martials.index'));
    }

    /**
     * Display the specified Martial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $martial = $this->martialRepository->findWithoutFail($id);

        if (empty($martial)) {
            Flash::error('Martial not found');

            return redirect(route('martials.index'));
        }

        return view('martials.show')->with('martial', $martial);
    }

    /**
     * Show the form for editing the specified Martial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $martial = $this->martialRepository->findWithoutFail($id);

        if (empty($martial)) {
            Flash::error('Martial not found');

            return redirect(route('martials.index'));
        }

        return view('martials.edit')->with('martial', $martial);
    }

    /**
     * Update the specified Martial in storage.
     *
     * @param  int              $id
     * @param UpdateMartialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMartialRequest $request)
    {
        $martial = $this->martialRepository->findWithoutFail($id);

        if (empty($martial)) {
            Flash::error('Martial not found');

            return redirect(route('martials.index'));
        }

        $martial = $this->martialRepository->update($request->all(), $id);

        Flash::success('Martial updated successfully.');

        return redirect(route('martials.index'));
    }

    /**
     * Remove the specified Martial from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $martial = $this->martialRepository->findWithoutFail($id);

        if (empty($martial)) {
            Flash::error('Martial not found');

            return redirect(route('martials.index'));
        }

        $this->martialRepository->delete($id);

        Flash::success('Martial deleted successfully.');

        return redirect(route('martials.index'));
    }
}
