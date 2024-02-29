<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConversationRecruitRequest;
use App\Http\Requests\UpdateConversationRecruitRequest;
use App\Repositories\ConversationRecruitRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ConversationRecruitController extends AppBaseController
{
    /** @var  ConversationRecruitRepository */
    private $conversationRecruitRepository;

    public function __construct(ConversationRecruitRepository $conversationRecruitRepo)
    {
        $this->conversationRecruitRepository = $conversationRecruitRepo;
    }

    /**
     * Display a listing of the ConversationRecruit.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->conversationRecruitRepository->pushCriteria(new RequestCriteria($request));
        $conversationRecruits = $this->conversationRecruitRepository->all();

        return view('conversation_recruits.index')
            ->with('conversationRecruits', $conversationRecruits);
    }

    /**
     * Show the form for creating a new ConversationRecruit.
     *
     * @return Response
     */
    public function create()
    {
        return view('conversation_recruits.create');
    }

    /**
     * Store a newly created ConversationRecruit in storage.
     *
     * @param CreateConversationRecruitRequest $request
     *
     * @return Response
     */
    public function store(CreateConversationRecruitRequest $request)
    {
        $input = $request->all();

        $conversationRecruit = $this->conversationRecruitRepository->create($input);

        Flash::success('Conversation Recruit saved successfully.');

        return redirect(route('conversationRecruits.index'));
    }

    /**
     * Display the specified ConversationRecruit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $conversationRecruit = $this->conversationRecruitRepository->findWithoutFail($id);

        if (empty($conversationRecruit)) {
            Flash::error('Conversation Recruit not found');

            return redirect(route('conversationRecruits.index'));
        }

        return view('conversation_recruits.show')->with('conversationRecruit', $conversationRecruit);
    }

    /**
     * Show the form for editing the specified ConversationRecruit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $conversationRecruit = $this->conversationRecruitRepository->findWithoutFail($id);

        if (empty($conversationRecruit)) {
            Flash::error('Conversation Recruit not found');

            return redirect(route('conversationRecruits.index'));
        }

        return view('conversation_recruits.edit')->with('conversationRecruit', $conversationRecruit);
    }

    /**
     * Update the specified ConversationRecruit in storage.
     *
     * @param  int              $id
     * @param UpdateConversationRecruitRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConversationRecruitRequest $request)
    {
        $conversationRecruit = $this->conversationRecruitRepository->findWithoutFail($id);

        if (empty($conversationRecruit)) {
            Flash::error('Conversation Recruit not found');

            return redirect(route('conversationRecruits.index'));
        }

        $conversationRecruit = $this->conversationRecruitRepository->update($request->all(), $id);

        Flash::success('Conversation Recruit updated successfully.');

        return redirect(route('conversationRecruits.index'));
    }

    /**
     * Remove the specified ConversationRecruit from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $conversationRecruit = $this->conversationRecruitRepository->findWithoutFail($id);

        if (empty($conversationRecruit)) {
            Flash::error('Conversation Recruit not found');

            return redirect(route('conversationRecruits.index'));
        }

        $this->conversationRecruitRepository->delete($id);

        Flash::success('Conversation Recruit deleted successfully.');

        return redirect(route('conversationRecruits.index'));
    }
}
