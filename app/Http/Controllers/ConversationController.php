<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConversationRequest;
use App\Http\Requests\UpdateConversationRequest;
use App\Repositories\ConversationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ConversationController extends AppBaseController
{
    /** @var  ConversationRepository */
    private $conversationRepository;

    public function __construct(ConversationRepository $conversationRepo)
    {
        $this->conversationRepository = $conversationRepo;
    }

    /**
     * Display a listing of the Conversation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->conversationRepository->pushCriteria(new RequestCriteria($request));
        $conversations = $this->conversationRepository->all();

        return view('conversations.index')
            ->with('conversations', $conversations);
    }

    /**
     * Show the form for creating a new Conversation.
     *
     * @return Response
     */
    public function create()
    {
        return view('conversations.create');
    }

    /**
     * Store a newly created Conversation in storage.
     *
     * @param CreateConversationRequest $request
     *
     * @return Response
     */
    public function store(CreateConversationRequest $request)
    {
        $input = $request->all();

        $conversation = $this->conversationRepository->create($input);

        Flash::success('Conversation saved successfully.');

        return redirect(route('conversations.index'));
    }

    /**
     * Display the specified Conversation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $conversation = $this->conversationRepository->findWithoutFail($id);

        if (empty($conversation)) {
            Flash::error('Conversation not found');

            return redirect(route('conversations.index'));
        }

        return view('conversations.show')->with('conversation', $conversation);
    }

    /**
     * Show the form for editing the specified Conversation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $conversation = $this->conversationRepository->findWithoutFail($id);

        if (empty($conversation)) {
            Flash::error('Conversation not found');

            return redirect(route('conversations.index'));
        }

        return view('conversations.edit')->with('conversation', $conversation);
    }

    /**
     * Update the specified Conversation in storage.
     *
     * @param  int              $id
     * @param UpdateConversationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConversationRequest $request)
    {
        $conversation = $this->conversationRepository->findWithoutFail($id);

        if (empty($conversation)) {
            Flash::error('Conversation not found');

            return redirect(route('conversations.index'));
        }

        $conversation = $this->conversationRepository->update($request->all(), $id);

        Flash::success('Conversation updated successfully.');

        return redirect(route('conversations.index'));
    }

    /**
     * Remove the specified Conversation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $conversation = $this->conversationRepository->findWithoutFail($id);

        if (empty($conversation)) {
            Flash::error('Conversation not found');

            return redirect(route('conversations.index'));
        }

        $this->conversationRepository->delete($id);

        Flash::success('Conversation deleted successfully.');

        return redirect(route('conversations.index'));
    }
}
