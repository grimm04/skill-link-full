<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMcSurveyRequest;
use App\Http\Requests\UpdateMcSurveyRequest;
use App\Repositories\McSurveyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\DB;
use Response;
use App\Models\Question;
use App\Models\McSurvey;

class McSurveyController extends AppBaseController
{
    /** @var  McSurveyRepository */
    private $mcSurveyRepository;

    public function __construct(McSurveyRepository $mcSurveyRepo)
    {
        $this->mcSurveyRepository = $mcSurveyRepo;
    }

    /**
     * Display a listing of the McSurvey.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mcSurveyRepository->pushCriteria(new RequestCriteria($request));
        $mcSurveys = $this->mcSurveyRepository
            ->paginate(10);

        $question = McSurvey::with('getModelQuestion2')->paginate(10);

        return view('mc_surveys.index')
            ->with('mcSurveys', $mcSurveys)
            ->with('question', $question);
    }

    /**
     * Show the form for creating a new McSurvey.
     *
     * @return Response
     */
    public function create()
    {
        $mcsurveys = DB::table('questions')
            ->select('title','id')
            ->get();
        return view('mc_surveys.create')
            ->with('mcsurveys', $mcsurveys);
    }

    /**
     * Store a newly created McSurvey in storage.
     *
     * @param CreateMcSurveyRequest $request
     *
     * @return Response
     */
    public function store(CreateMcSurveyRequest $request)
    {
        $input = $request->all();

        $mcSurvey = $this->mcSurveyRepository->create($input);

        Flash::success('Mc Survey saved successfully.');

        return redirect(route('mcSurveys.index'));
    }

    /**
     * Display the specified McSurvey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mcSurvey = $this->mcSurveyRepository->findWithoutFail($id);

        if (empty($mcSurvey)) {
            Flash::error('Mc Survey not found');

            return redirect(route('mcSurveys.index'));
        }

        return view('mc_surveys.show')->with('mcSurvey', $mcSurvey);
    }

    /**
     * Show the form for editing the specified McSurvey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mcSurvey = $this->mcSurveyRepository->findWithoutFail($id);
        $mcsurveys = DB::table('questions')
            ->select('title','id')
            ->get();

        if (empty($mcSurvey)) {
            Flash::error('Mc Survey not found');

            return redirect(route('mcSurveys.index'));
        }

        return view('mc_surveys.edit')
            ->with('mcSurvey', $mcSurvey)
            ->with('mcsurveys', $mcsurveys);
    }

    /**
     * Update the specified McSurvey in storage.
     *
     * @param  int              $id
     * @param UpdateMcSurveyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMcSurveyRequest $request)
    {
        $mcSurvey = $this->mcSurveyRepository->findWithoutFail($id);

        if (empty($mcSurvey)) {
            Flash::error('Mc Survey not found');

            return redirect(route('mcSurveys.index'));
        }

        $mcSurvey = $this->mcSurveyRepository->update($request->all(), $id);

        Flash::success('Mc Survey updated successfully.');

        return redirect(route('mcSurveys.index'));
    }

    /**
     * Remove the specified McSurvey from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mcSurvey = $this->mcSurveyRepository->findWithoutFail($id);

        if (empty($mcSurvey)) {
            Flash::error('Mc Survey not found');

            return redirect(route('mcSurveys.index'));
        }

        $this->mcSurveyRepository->delete($id);

        Flash::success('Mc Survey deleted successfully.');

        return redirect(route('mcSurveys.index'));
    }
}
