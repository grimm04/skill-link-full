<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTimelineRequest;
use App\Http\Requests\UpdateTimelineRequest;
use App\Repositories\TimelineRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TimelineController extends AppBaseController
{
    /** @var  TimelineRepository */
    private $timelineRepository;

    public function __construct(TimelineRepository $timelineRepo)
    {
        $this->timelineRepository = $timelineRepo;
    }

    /**
     * Display a listing of the Timeline.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->timelineRepository->pushCriteria(new RequestCriteria($request));
        $timelines = $this->timelineRepository->all();

        return view('timelines.index')
            ->with('timelines', $timelines);
    }

    /**
     * Show the form for creating a new Timeline.
     *
     * @return Response
     */
    public function create()
    {
        return view('timelines.create');
    }

    /**
     * Store a newly created Timeline in storage.
     *
     * @param CreateTimelineRequest $request
     *
     * @return Response
     */
    public function store(CreateTimelineRequest $request)
    {
        $input = $request->all();

        $timeline = $this->timelineRepository->create($input);

        Flash::success('Timeline saved successfully.');

        return redirect(route('timelines.index'));
    }

    /**
     * Display the specified Timeline.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $timeline = $this->timelineRepository->findWithoutFail($id);

        if (empty($timeline)) {
            Flash::error('Timeline not found');

            return redirect(route('timelines.index'));
        }

        return view('timelines.show')->with('timeline', $timeline);
    }

    /**
     * Show the form for editing the specified Timeline.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $timeline = $this->timelineRepository->findWithoutFail($id);

        if (empty($timeline)) {
            Flash::error('Timeline not found');

            return redirect(route('timelines.index'));
        }

        return view('timelines.edit')->with('timeline', $timeline);
    }

    /**
     * Update the specified Timeline in storage.
     *
     * @param  int              $id
     * @param UpdateTimelineRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTimelineRequest $request)
    {
        $timeline = $this->timelineRepository->findWithoutFail($id);

        if (empty($timeline)) {
            Flash::error('Timeline not found');

            return redirect(route('timelines.index'));
        }

        $timeline = $this->timelineRepository->update($request->all(), $id);

        Flash::success('Timeline updated successfully.');

        return redirect(route('timelines.index'));
    }

    /**
     * Remove the specified Timeline from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $timeline = $this->timelineRepository->findWithoutFail($id);

        if (empty($timeline)) {
            Flash::error('Timeline not found');

            return redirect(route('timelines.index'));
        }

        $this->timelineRepository->delete($id);

        Flash::success('Timeline deleted successfully.');

        return redirect(route('timelines.index'));
    }
}
