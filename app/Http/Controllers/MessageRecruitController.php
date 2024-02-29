<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRecruitRequest;
use App\Http\Requests\UpdateMessageRecruitRequest;
use App\Repositories\MessageRecruitRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MessageRecruitController extends AppBaseController
{
    /** @var  MessageRecruitRepository */
    private $messageRecruitRepository;

    public function __construct(MessageRecruitRepository $messageRecruitRepo)
    {
        $this->messageRecruitRepository = $messageRecruitRepo;
    }

    /**
     * Display a listing of the MessageRecruit.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->messageRecruitRepository->pushCriteria(new RequestCriteria($request));
        $messageRecruits = $this->messageRecruitRepository->all();

        return view('message_recruits.index')
            ->with('messageRecruits', $messageRecruits);
    }

    /**
     * Show the form for creating a new MessageRecruit.
     *
     * @return Response
     */
    public function create()
    {
        return view('message_recruits.create');
    }

    /**
     * Store a newly created MessageRecruit in storage.
     *
     * @param CreateMessageRecruitRequest $request
     *
     * @return Response
     */
    public function store(CreateMessageRecruitRequest $request)
    {
        $input = $request->all();

        $messageRecruit = $this->messageRecruitRepository->create($input);

        Flash::success('Message Recruit saved successfully.');

        return redirect(route('messageRecruits.index'));
    }

    /**
     * Display the specified MessageRecruit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $messageRecruit = $this->messageRecruitRepository->findWithoutFail($id);

        if (empty($messageRecruit)) {
            Flash::error('Message Recruit not found');

            return redirect(route('messageRecruits.index'));
        }

        return view('message_recruits.show')->with('messageRecruit', $messageRecruit);
    }

    /**
     * Show the form for editing the specified MessageRecruit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $messageRecruit = $this->messageRecruitRepository->findWithoutFail($id);

        if (empty($messageRecruit)) {
            Flash::error('Message Recruit not found');

            return redirect(route('messageRecruits.index'));
        }

        return view('message_recruits.edit')->with('messageRecruit', $messageRecruit);
    }

    /**
     * Update the specified MessageRecruit in storage.
     *
     * @param  int              $id
     * @param UpdateMessageRecruitRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMessageRecruitRequest $request)
    {
        $messageRecruit = $this->messageRecruitRepository->findWithoutFail($id);

        if (empty($messageRecruit)) {
            Flash::error('Message Recruit not found');

            return redirect(route('messageRecruits.index'));
        }

        $messageRecruit = $this->messageRecruitRepository->update($request->all(), $id);

        Flash::success('Message Recruit updated successfully.');

        return redirect(route('messageRecruits.index'));
    }

    /**
     * Remove the specified MessageRecruit from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $messageRecruit = $this->messageRecruitRepository->findWithoutFail($id);

        if (empty($messageRecruit)) {
            Flash::error('Message Recruit not found');

            return redirect(route('messageRecruits.index'));
        }

        $this->messageRecruitRepository->delete($id);

        Flash::success('Message Recruit deleted successfully.');

        return redirect(route('messageRecruits.index'));
    }
}
