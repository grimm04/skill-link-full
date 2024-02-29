<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGroupTypeRequest;
use App\Http\Requests\UpdateGroupTypeRequest;
use App\Repositories\GroupTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GroupTypeController extends AppBaseController
{
    /** @var  GroupTypeRepository */
    private $groupTypeRepository;

    public function __construct(GroupTypeRepository $groupTypeRepo)
    {
        $this->groupTypeRepository = $groupTypeRepo;
    }

    /**
     * Display a listing of the GroupType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->groupTypeRepository->pushCriteria(new RequestCriteria($request));
        $groupTypes = $this->groupTypeRepository->all();

        return view('group_types.index')
            ->with('groupTypes', $groupTypes);
    }

    /**
     * Show the form for creating a new GroupType.
     *
     * @return Response
     */
    public function create()
    {
        return view('group_types.create');
    }

    /**
     * Store a newly created GroupType in storage.
     *
     * @param CreateGroupTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateGroupTypeRequest $request)
    {
        $input = $request->all();

        $groupType = $this->groupTypeRepository->create($input);

        Flash::success('Group Type saved successfully.');

        return redirect(route('groupTypes.index'));
    }

    /**
     * Display the specified GroupType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $groupType = $this->groupTypeRepository->findWithoutFail($id);

        if (empty($groupType)) {
            Flash::error('Group Type not found');

            return redirect(route('groupTypes.index'));
        }

        return view('group_types.show')->with('groupType', $groupType);
    }

    /**
     * Show the form for editing the specified GroupType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $groupType = $this->groupTypeRepository->findWithoutFail($id);

        if (empty($groupType)) {
            Flash::error('Group Type not found');

            return redirect(route('groupTypes.index'));
        }

        return view('group_types.edit')->with('groupType', $groupType);
    }

    /**
     * Update the specified GroupType in storage.
     *
     * @param  int              $id
     * @param UpdateGroupTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGroupTypeRequest $request)
    {
        $groupType = $this->groupTypeRepository->findWithoutFail($id);

        if (empty($groupType)) {
            Flash::error('Group Type not found');

            return redirect(route('groupTypes.index'));
        }

        $groupType = $this->groupTypeRepository->update($request->all(), $id);

        Flash::success('Group Type updated successfully.');

        return redirect(route('groupTypes.index'));
    }

    /**
     * Remove the specified GroupType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $groupType = $this->groupTypeRepository->findWithoutFail($id);

        if (empty($groupType)) {
            Flash::error('Group Type not found');

            return redirect(route('groupTypes.index'));
        }

        $this->groupTypeRepository->delete($id);

        Flash::success('Group Type deleted successfully.');

        return redirect(route('groupTypes.index'));
    }
}
