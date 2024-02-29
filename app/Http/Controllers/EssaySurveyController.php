<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEssaySurveyRequest;
use App\Http\Requests\UpdateEssaySurveyRequest;
use App\Repositories\EssaySurveyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EssaySurveyController extends AppBaseController
{
    /** @var  EssaySurveyRepository */
    private $essaySurveyRepository;

    public function __construct(EssaySurveyRepository $essaySurveyRepo)
    {
        $this->essaySurveyRepository = $essaySurveyRepo;
    }

    /**
     * Display a listing of the EssaySurvey.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->essaySurveyRepository->pushCriteria(new RequestCriteria($request));
        $essaySurveys = $this->essaySurveyRepository->all();

        return view('essay_surveys.index')
            ->with('essaySurveys', $essaySurveys);
    }

    /**
     * Show the form for creating a new EssaySurvey.
     *
     * @return Response
     */
    public function create()
    {
        return view('essay_surveys.create');
    }

    /**
     * Store a newly created EssaySurvey in storage.
     *
     * @param CreateEssaySurveyRequest $request
     *
     * @return Response
     */
    public function store(CreateEssaySurveyRequest $request)
    {
        $input = $request->all();

        $essaySurvey = $this->essaySurveyRepository->create($input);

        Flash::success('Essay Survey saved successfully.');

        return redirect(route('essaySurveys.index'));
    }

    /**
     * Display the specified EssaySurvey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $essaySurvey = $this->essaySurveyRepository->findWithoutFail($id);

        if (empty($essaySurvey)) {
            Flash::error('Essay Survey not found');

            return redirect(route('essaySurveys.index'));
        }

        return view('essay_surveys.show')->with('essaySurvey', $essaySurvey);
    }

    /**
     * Show the form for editing the specified EssaySurvey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $essaySurvey = $this->essaySurveyRepository->findWithoutFail($id);

        if (empty($essaySurvey)) {
            Flash::error('Essay Survey not found');

            return redirect(route('essaySurveys.index'));
        }

        return view('essay_surveys.edit')->with('essaySurvey', $essaySurvey);
    }

    /**
     * Update the specified EssaySurvey in storage.
     *
     * @param  int              $id
     * @param UpdateEssaySurveyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEssaySurveyRequest $request)
    {
        $essaySurvey = $this->essaySurveyRepository->findWithoutFail($id);

        if (empty($essaySurvey)) {
            Flash::error('Essay Survey not found');

            return redirect(route('essaySurveys.index'));
        }

        $essaySurvey = $this->essaySurveyRepository->update($request->all(), $id);

        Flash::success('Essay Survey updated successfully.');

        return redirect(route('essaySurveys.index'));
    }

    /**
     * Remove the specified EssaySurvey from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $essaySurvey = $this->essaySurveyRepository->findWithoutFail($id);

        if (empty($essaySurvey)) {
            Flash::error('Essay Survey not found');

            return redirect(route('essaySurveys.index'));
        }

        $this->essaySurveyRepository->delete($id);

        Flash::success('Essay Survey deleted successfully.');

        return redirect(route('essaySurveys.index'));
    }
}
