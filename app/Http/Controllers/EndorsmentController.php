<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEndorsmentRequest;
use App\Http\Requests\UpdateEndorsmentRequest;
use App\Repositories\EndorsmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EndorsmentController extends AppBaseController
{
    /** @var  EndorsmentRepository */
    private $endorsmentRepository;

    public function __construct(EndorsmentRepository $endorsmentRepo)
    {
        $this->endorsmentRepository = $endorsmentRepo;
    }

    /**
     * Display a listing of the Endorsment.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->endorsmentRepository->pushCriteria(new RequestCriteria($request));
        $endorsments = $this->endorsmentRepository->all();

        return view('endorsments.index')
            ->with('endorsments', $endorsments);
    }

    /**
     * Show the form for creating a new Endorsment.
     *
     * @return Response
     */
    public function create()
    {
        return view('endorsments.create');
    }

    /**
     * Store a newly created Endorsment in storage.
     *
     * @param CreateEndorsmentRequest $request
     *
     * @return Response
     */
    public function store(CreateEndorsmentRequest $request)
    {
        $input = $request->all();

        $endorsment = $this->endorsmentRepository->create($input);

        Flash::success('Endorsment saved successfully.');

        return redirect(route('endorsments.index'));
    }

    /**
     * Display the specified Endorsment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $endorsment = $this->endorsmentRepository->findWithoutFail($id);

        if (empty($endorsment)) {
            Flash::error('Endorsment not found');

            return redirect(route('endorsments.index'));
        }

        return view('endorsments.show')->with('endorsment', $endorsment);
    }

    /**
     * Show the form for editing the specified Endorsment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $endorsment = $this->endorsmentRepository->findWithoutFail($id);

        if (empty($endorsment)) {
            Flash::error('Endorsment not found');

            return redirect(route('endorsments.index'));
        }

        return view('endorsments.edit')->with('endorsment', $endorsment);
    }

    /**
     * Update the specified Endorsment in storage.
     *
     * @param  int              $id
     * @param UpdateEndorsmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEndorsmentRequest $request)
    {
        $endorsment = $this->endorsmentRepository->findWithoutFail($id);

        if (empty($endorsment)) {
            Flash::error('Endorsment not found');

            return redirect(route('endorsments.index'));
        }

        $endorsment = $this->endorsmentRepository->update($request->all(), $id);

        Flash::success('Endorsment updated successfully.');

        return redirect(route('endorsments.index'));
    }

    /**
     * Remove the specified Endorsment from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $endorsment = $this->endorsmentRepository->findWithoutFail($id);

        if (empty($endorsment)) {
            Flash::error('Endorsment not found');

            return redirect(route('endorsments.index'));
        }

        $this->endorsmentRepository->delete($id);

        Flash::success('Endorsment deleted successfully.');

        return redirect(route('endorsments.index'));
    }
}
