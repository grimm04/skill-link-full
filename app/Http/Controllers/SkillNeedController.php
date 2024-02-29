<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSkillNeedRequest;
use App\Http\Requests\UpdateSkillNeedRequest;
use App\Repositories\SkillNeedRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SkillNeedController extends AppBaseController
{
    /** @var  SkillNeedRepository */
    private $skillNeedRepository;

    public function __construct(SkillNeedRepository $skillNeedRepo)
    {
        $this->skillNeedRepository = $skillNeedRepo;
    }

    /**
     * Display a listing of the SkillNeed.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->skillNeedRepository->pushCriteria(new RequestCriteria($request));
        $skillNeeds = $this->skillNeedRepository->all();

        return view('skill_needs.index')
            ->with('skillNeeds', $skillNeeds);
    }

    /**
     * Show the form for creating a new SkillNeed.
     *
     * @return Response
     */
    public function create()
    {
        return view('skill_needs.create');
    }

    /**
     * Store a newly created SkillNeed in storage.
     *
     * @param CreateSkillNeedRequest $request
     *
     * @return Response
     */
    public function store(CreateSkillNeedRequest $request)
    {
        $input = $request->all();

        $skillNeed = $this->skillNeedRepository->create($input);

        Flash::success('Skill Need saved successfully.');

        return redirect(route('skillNeeds.index'));
    }

    /**
     * Display the specified SkillNeed.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $skillNeed = $this->skillNeedRepository->findWithoutFail($id);

        if (empty($skillNeed)) {
            Flash::error('Skill Need not found');

            return redirect(route('skillNeeds.index'));
        }

        return view('skill_needs.show')->with('skillNeed', $skillNeed);
    }

    /**
     * Show the form for editing the specified SkillNeed.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $skillNeed = $this->skillNeedRepository->findWithoutFail($id);

        if (empty($skillNeed)) {
            Flash::error('Skill Need not found');

            return redirect(route('skillNeeds.index'));
        }

        return view('skill_needs.edit')->with('skillNeed', $skillNeed);
    }

    /**
     * Update the specified SkillNeed in storage.
     *
     * @param  int              $id
     * @param UpdateSkillNeedRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSkillNeedRequest $request)
    {
        $skillNeed = $this->skillNeedRepository->findWithoutFail($id);

        if (empty($skillNeed)) {
            Flash::error('Skill Need not found');

            return redirect(route('skillNeeds.index'));
        }

        $skillNeed = $this->skillNeedRepository->update($request->all(), $id);

        Flash::success('Skill Need updated successfully.');

        return redirect(route('skillNeeds.index'));
    }

    /**
     * Remove the specified SkillNeed from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $skillNeed = $this->skillNeedRepository->findWithoutFail($id);

        if (empty($skillNeed)) {
            Flash::error('Skill Need not found');

            return redirect(route('skillNeeds.index'));
        }

        $this->skillNeedRepository->delete($id);

        Flash::success('Skill Need deleted successfully.');

        return redirect(route('skillNeeds.index'));
    }
}
