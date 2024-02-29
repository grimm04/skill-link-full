<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageAdminRequest;
use App\Http\Requests\UpdateMessageAdminRequest;
use App\Repositories\MessageAdminRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MessageAdminController extends AppBaseController
{
    /** @var  MessageAdminRepository */
    private $messageAdminRepository;

    public function __construct(MessageAdminRepository $messageAdminRepo)
    {
        $this->messageAdminRepository = $messageAdminRepo;
    }

    /**
     * Display a listing of the MessageAdmin.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->messageAdminRepository->pushCriteria(new RequestCriteria($request));
        $messageAdmins = $this->messageAdminRepository->all();

        return view('message_admins.index')
            ->with('messageAdmins', $messageAdmins);
    }

    /**
     * Show the form for creating a new MessageAdmin.
     *
     * @return Response
     */
    public function create()
    {
        return view('message_admins.create');
    }

    /**
     * Store a newly created MessageAdmin in storage.
     *
     * @param CreateMessageAdminRequest $request
     *
     * @return Response
     */
    public function store(CreateMessageAdminRequest $request)
    {
        $input = $request->all();

        $messageAdmin = $this->messageAdminRepository->create($input);

        Flash::success('Message Admin saved successfully.');

        return redirect(route('messageAdmins.index'));
    }

    /**
     * Display the specified MessageAdmin.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $messageAdmin = $this->messageAdminRepository->findWithoutFail($id);

        if (empty($messageAdmin)) {
            Flash::error('Message Admin not found');

            return redirect(route('messageAdmins.index'));
        }

        return view('message_admins.show')->with('messageAdmin', $messageAdmin);
    }

    /**
     * Show the form for editing the specified MessageAdmin.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $messageAdmin = $this->messageAdminRepository->findWithoutFail($id);

        if (empty($messageAdmin)) {
            Flash::error('Message Admin not found');

            return redirect(route('messageAdmins.index'));
        }

        return view('message_admins.edit')->with('messageAdmin', $messageAdmin);
    }

    /**
     * Update the specified MessageAdmin in storage.
     *
     * @param  int              $id
     * @param UpdateMessageAdminRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMessageAdminRequest $request)
    {
        $messageAdmin = $this->messageAdminRepository->findWithoutFail($id);

        if (empty($messageAdmin)) {
            Flash::error('Message Admin not found');

            return redirect(route('messageAdmins.index'));
        }

        $messageAdmin = $this->messageAdminRepository->update($request->all(), $id);

        Flash::success('Message Admin updated successfully.');

        return redirect(route('messageAdmins.index'));
    }

    /**
     * Remove the specified MessageAdmin from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $messageAdmin = $this->messageAdminRepository->findWithoutFail($id);

        if (empty($messageAdmin)) {
            Flash::error('Message Admin not found');

            return redirect(route('messageAdmins.index'));
        }

        $this->messageAdminRepository->delete($id);

        Flash::success('Message Admin deleted successfully.');

        return redirect(route('messageAdmins.index'));
    }
}
