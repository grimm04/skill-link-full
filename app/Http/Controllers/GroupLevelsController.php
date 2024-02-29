<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGroupLevelsRequest;
use App\Http\Requests\UpdateGroupLevelsRequest;
use App\Repositories\GroupLevelsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GroupLevelsController extends AppBaseController
{
    /** @var  GroupLevelsRepository */
    private $groupLevelsRepository;

    public function __construct(GroupLevelsRepository $groupLevelsRepo)
    {
        $this->groupLevelsRepository = $groupLevelsRepo;
    }

    /**
     * Display a listing of the GroupLevels.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->groupLevelsRepository->pushCriteria(new RequestCriteria($request));
        $groupLevels = $this->groupLevelsRepository->all();

        return view('group_levels.index')
            ->with('groupLevels', $groupLevels);
    }

    /**
     * Show the form for creating a new GroupLevels.
     *
     * @return Response
     */
    public function create()
    {
        return view('group_levels.create');
    }

    /**
     * Store a newly created GroupLevels in storage.
     *
     * @param CreateGroupLevelsRequest $request
     *
     * @return Response
     */
    public function store(CreateGroupLevelsRequest $request)
    {
        $input = $request->all();

        $groupLevels = $this->groupLevelsRepository->create($input);

        Flash::success('Group Levels saved successfully.');

        return redirect(route('groupLevels.index'));
    }

    /**
     * Display the specified GroupLevels.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $groupLevels = $this->groupLevelsRepository->findWithoutFail($id);

        if (empty($groupLevels)) {
            Flash::error('Group Levels not found');

            return redirect(route('groupLevels.index'));
        }

        return view('group_levels.show')->with('groupLevels', $groupLevels);
    }

    /**
     * Show the form for editing the specified GroupLevels.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $groupLevels = $this->groupLevelsRepository->findWithoutFail($id);

        if (empty($groupLevels)) {
            Flash::error('Group Levels not found');

            return redirect(route('groupLevels.index'));
        }

        return view('group_levels.edit')->with('groupLevels', $groupLevels);
    }

    /**
     * Update the specified GroupLevels in storage.
     *
     * @param  int              $id
     * @param UpdateGroupLevelsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGroupLevelsRequest $request)
    {
        $groupLevels = $this->groupLevelsRepository->findWithoutFail($id);

        if (empty($groupLevels)) {
            Flash::error('Group Levels not found');

            return redirect(route('groupLevels.index'));
        }

        $groupLevels = $this->groupLevelsRepository->update($request->all(), $id);

        Flash::success('Group Levels updated successfully.');

        return redirect(route('groupLevels.index'));
    }

    /**
     * Remove the specified GroupLevels from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $groupLevels = $this->groupLevelsRepository->findWithoutFail($id);

        if (empty($groupLevels)) {
            Flash::error('Group Levels not found');

            return redirect(route('groupLevels.index'));
        }

        $this->groupLevelsRepository->delete($id);

        Flash::success('Group Levels deleted successfully.');

        return redirect(route('groupLevels.index'));
    }
}
