<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConversationAdminRequest;
use App\Http\Requests\UpdateConversationAdminRequest;
use App\Repositories\ConversationAdminRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ConversationAdminController extends AppBaseController
{
    /** @var  ConversationAdminRepository */
    private $conversationAdminRepository;

    public function __construct(ConversationAdminRepository $conversationAdminRepo)
    {
        $this->conversationAdminRepository = $conversationAdminRepo;
    }

    /**
     * Display a listing of the ConversationAdmin.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->conversationAdminRepository->pushCriteria(new RequestCriteria($request));
        $conversationAdmins = $this->conversationAdminRepository->all();

        return view('conversation_admins.index')
            ->with('conversationAdmins', $conversationAdmins);
    }

    /**
     * Show the form for creating a new ConversationAdmin.
     *
     * @return Response
     */
    public function create()
    {
        return view('conversation_admins.create');
    }

    /**
     * Store a newly created ConversationAdmin in storage.
     *
     * @param CreateConversationAdminRequest $request
     *
     * @return Response
     */
    public function store(CreateConversationAdminRequest $request)
    {
        $input = $request->all();

        $conversationAdmin = $this->conversationAdminRepository->create($input);

        Flash::success('Conversation Admin saved successfully.');

        return redirect(route('conversationAdmins.index'));
    }

    /**
     * Display the specified ConversationAdmin.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $conversationAdmin = $this->conversationAdminRepository->findWithoutFail($id);

        if (empty($conversationAdmin)) {
            Flash::error('Conversation Admin not found');

            return redirect(route('conversationAdmins.index'));
        }

        return view('conversation_admins.show')->with('conversationAdmin', $conversationAdmin);
    }

    /**
     * Show the form for editing the specified ConversationAdmin.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $conversationAdmin = $this->conversationAdminRepository->findWithoutFail($id);

        if (empty($conversationAdmin)) {
            Flash::error('Conversation Admin not found');

            return redirect(route('conversationAdmins.index'));
        }

        return view('conversation_admins.edit')->with('conversationAdmin', $conversationAdmin);
    }

    /**
     * Update the specified ConversationAdmin in storage.
     *
     * @param  int              $id
     * @param UpdateConversationAdminRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConversationAdminRequest $request)
    {
        $conversationAdmin = $this->conversationAdminRepository->findWithoutFail($id);

        if (empty($conversationAdmin)) {
            Flash::error('Conversation Admin not found');

            return redirect(route('conversationAdmins.index'));
        }

        $conversationAdmin = $this->conversationAdminRepository->update($request->all(), $id);

        Flash::success('Conversation Admin updated successfully.');

        return redirect(route('conversationAdmins.index'));
    }

    /**
     * Remove the specified ConversationAdmin from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $conversationAdmin = $this->conversationAdminRepository->findWithoutFail($id);

        if (empty($conversationAdmin)) {
            Flash::error('Conversation Admin not found');

            return redirect(route('conversationAdmins.index'));
        }

        $this->conversationAdminRepository->delete($id);

        Flash::success('Conversation Admin deleted successfully.');

        return redirect(route('conversationAdmins.index'));
    }
}
