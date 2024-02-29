<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageGroupRequest;
use App\Http\Requests\UpdateMessageGroupRequest;
use App\Repositories\MessageGroupRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MessageGroupController extends AppBaseController
{
    /** @var  MessageGroupRepository */
    private $messageGroupRepository;

    public function __construct(MessageGroupRepository $messageGroupRepo)
    {
        $this->messageGroupRepository = $messageGroupRepo;
    }

    /**
     * Display a listing of the MessageGroup.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->messageGroupRepository->pushCriteria(new RequestCriteria($request));
        $messageGroups = $this->messageGroupRepository->all();

        return view('message_groups.index')
            ->with('messageGroups', $messageGroups);
    }

    /**
     * Show the form for creating a new MessageGroup.
     *
     * @return Response
     */
    public function create()
    {
        return view('message_groups.create');
    }

    /**
     * Store a newly created MessageGroup in storage.
     *
     * @param CreateMessageGroupRequest $request
     *
     * @return Response
     */
    public function store(CreateMessageGroupRequest $request)
    {
        $input = $request->all();

        $messageGroup = $this->messageGroupRepository->create($input);

        Flash::success('Message Group saved successfully.');

        return redirect(route('messageGroups.index'));
    }

    /**
     * Display the specified MessageGroup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $messageGroup = $this->messageGroupRepository->findWithoutFail($id);

        if (empty($messageGroup)) {
            Flash::error('Message Group not found');

            return redirect(route('messageGroups.index'));
        }

        return view('message_groups.show')->with('messageGroup', $messageGroup);
    }

    /**
     * Show the form for editing the specified MessageGroup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $messageGroup = $this->messageGroupRepository->findWithoutFail($id);

        if (empty($messageGroup)) {
            Flash::error('Message Group not found');

            return redirect(route('messageGroups.index'));
        }

        return view('message_groups.edit')->with('messageGroup', $messageGroup);
    }

    /**
     * Update the specified MessageGroup in storage.
     *
     * @param  int              $id
     * @param UpdateMessageGroupRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMessageGroupRequest $request)
    {
        $messageGroup = $this->messageGroupRepository->findWithoutFail($id);

        if (empty($messageGroup)) {
            Flash::error('Message Group not found');

            return redirect(route('messageGroups.index'));
        }

        $messageGroup = $this->messageGroupRepository->update($request->all(), $id);

        Flash::success('Message Group updated successfully.');

        return redirect(route('messageGroups.index'));
    }

    /**
     * Remove the specified MessageGroup from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $messageGroup = $this->messageGroupRepository->findWithoutFail($id);

        if (empty($messageGroup)) {
            Flash::error('Message Group not found');

            return redirect(route('messageGroups.index'));
        }

        $this->messageGroupRepository->delete($id);

        Flash::success('Message Group deleted successfully.');

        return redirect(route('messageGroups.index'));
    }
}
