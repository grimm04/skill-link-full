<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAddtionalRequest;
use App\Http\Requests\UpdateAddtionalRequest;
use App\Repositories\AddtionalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AddtionalController extends AppBaseController
{
    /** @var  AddtionalRepository */
    private $addtionalRepository;

    public function __construct(AddtionalRepository $addtionalRepo)
    {
        $this->addtionalRepository = $addtionalRepo;
    }

    /**
     * Display a listing of the Addtional.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->addtionalRepository->pushCriteria(new RequestCriteria($request));
        $addtionals = $this->addtionalRepository->all();

        return view('addtionals.index')
            ->with('addtionals', $addtionals);
    }

    /**
     * Show the form for creating a new Addtional.
     *
     * @return Response
     */
    public function create()
    {
        return view('addtionals.create');
    }

    /**
     * Store a newly created Addtional in storage.
     *
     * @param CreateAddtionalRequest $request
     *
     * @return Response
     */
    public function store(CreateAddtionalRequest $request)
    {
        $input = $request->all();

        $addtional = $this->addtionalRepository->create($input);

        Flash::success('Addtional saved successfully.');

        return redirect(route('addtionals.index'));
    }

    /**
     * Display the specified Addtional.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $addtional = $this->addtionalRepository->findWithoutFail($id);

        if (empty($addtional)) {
            Flash::error('Addtional not found');

            return redirect(route('addtionals.index'));
        }

        return view('addtionals.show')->with('addtional', $addtional);
    }

    /**
     * Show the form for editing the specified Addtional.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $addtional = $this->addtionalRepository->findWithoutFail($id);

        if (empty($addtional)) {
            Flash::error('Addtional not found');

            return redirect(route('addtionals.index'));
        }

        return view('addtionals.edit')->with('addtional', $addtional);
    }

    /**
     * Update the specified Addtional in storage.
     *
     * @param  int              $id
     * @param UpdateAddtionalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAddtionalRequest $request)
    {
        $addtional = $this->addtionalRepository->findWithoutFail($id);

        if (empty($addtional)) {
            Flash::error('Addtional not found');

            return redirect(route('addtionals.index'));
        }

        $addtional = $this->addtionalRepository->update($request->all(), $id);

        Flash::success('Addtional updated successfully.');

        return redirect(route('addtionals.index'));
    }

    /**
     * Remove the specified Addtional from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $addtional = $this->addtionalRepository->findWithoutFail($id);

        if (empty($addtional)) {
            Flash::error('Addtional not found');

            return redirect(route('addtionals.index'));
        }

        $this->addtionalRepository->delete($id);

        Flash::success('Addtional deleted successfully.');

        return redirect(route('addtionals.index'));
    }
}
