<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGroupMemberRequest;
use App\Http\Requests\UpdateGroupMemberRequest;
use App\Repositories\GroupMemberRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GroupMemberController extends AppBaseController
{
    /** @var  GroupMemberRepository */
    private $groupMemberRepository;

    public function __construct(GroupMemberRepository $groupMemberRepo)
    {
        $this->groupMemberRepository = $groupMemberRepo;
    }

    /**
     * Display a listing of the GroupMember.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->groupMemberRepository->pushCriteria(new RequestCriteria($request));
        $groupMembers = $this->groupMemberRepository->all();

        return view('group_members.index')
            ->with('groupMembers', $groupMembers);
    }

    /**
     * Show the form for creating a new GroupMember.
     *
     * @return Response
     */
    public function create()
    {
        return view('group_members.create');
    }

    /**
     * Store a newly created GroupMember in storage.
     *
     * @param CreateGroupMemberRequest $request
     *
     * @return Response
     */
    public function store(CreateGroupMemberRequest $request)
    {
        $input = $request->all();

        $groupMember = $this->groupMemberRepository->create($input);

        Flash::success('Group Member saved successfully.');

        return redirect(route('groupMembers.index'));
    }

    /**
     * Display the specified GroupMember.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $groupMember = $this->groupMemberRepository->findWithoutFail($id);

        if (empty($groupMember)) {
            Flash::error('Group Member not found');

            return redirect(route('groupMembers.index'));
        }

        return view('group_members.show')->with('groupMember', $groupMember);
    }

    /**
     * Show the form for editing the specified GroupMember.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $groupMember = $this->groupMemberRepository->findWithoutFail($id);

        if (empty($groupMember)) {
            Flash::error('Group Member not found');

            return redirect(route('groupMembers.index'));
        }

        return view('group_members.edit')->with('groupMember', $groupMember);
    }

    /**
     * Update the specified GroupMember in storage.
     *
     * @param  int              $id
     * @param UpdateGroupMemberRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGroupMemberRequest $request)
    {
        $groupMember = $this->groupMemberRepository->findWithoutFail($id);

        if (empty($groupMember)) {
            Flash::error('Group Member not found');

            return redirect(route('groupMembers.index'));
        }

        $groupMember = $this->groupMemberRepository->update($request->all(), $id);

        Flash::success('Group Member updated successfully.');

        return redirect(route('groupMembers.index'));
    }

    /**
     * Remove the specified GroupMember from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $groupMember = $this->groupMemberRepository->findWithoutFail($id);

        if (empty($groupMember)) {
            Flash::error('Group Member not found');

            return redirect(route('groupMembers.index'));
        }

        $this->groupMemberRepository->delete($id);

        Flash::success('Group Member deleted successfully.');

        return redirect(route('groupMembers.index'));
    }
}
