<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEssayQuestionRequest;
use App\Http\Requests\UpdateEssayQuestionRequest;
use App\Repositories\EssayQuestionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\DB;
use Response;
use App\Models\EssayQuestion;
use App\Models\Survey;

class EssayQuestionController extends AppBaseController
{
    /** @var  EssayQuestionRepository */
    private $essayQuestionRepository;

    public function __construct(EssayQuestionRepository $essayQuestionRepo)
    {
        $this->essayQuestionRepository = $essayQuestionRepo;
    }

    /**
     * Display a listing of the EssayQuestion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->essayQuestionRepository->pushCriteria(new RequestCriteria($request));
        $essayQuestions = $this->essayQuestionRepository->all();

        $survey = EssayQuestion::with('getModelSurvey')->paginate(10);

        return view('essay_questions.index')
            ->with('essayQuestions', $essayQuestions)
            ->with('survey', $survey);
    }

    /**
     * Show the form for creating a new EssayQuestion.
     *
     * @return Response
     */
    public function create()
    {
        $essaysurveys = DB::table('surveys')
            ->select('name','id')
            ->get();
        return view('essay_questions.create')
            ->with('essaysurveys', $essaysurveys);
    }

    /**
     * Store a newly created EssayQuestion in storage.
     *
     * @param CreateEssayQuestionRequest $request
     *
     * @return Response
     */
    public function store(CreateEssayQuestionRequest $request)
    {
        $input = $request->all();

        $essayQuestion = $this->essayQuestionRepository->create($input);

        Flash::success('Essay Question saved successfully.');

        return redirect(route('essayQuestions.index'));
    }

    /**
     * Display the specified EssayQuestion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $essayQuestion = $this->essayQuestionRepository->findWithoutFail($id);

        if (empty($essayQuestion)) {
            Flash::error('Essay Question not found');

            return redirect(route('essayQuestions.index'));
        }

        return view('essay_questions.show')->with('essayQuestion', $essayQuestion);
    }

    /**
     * Show the form for editing the specified EssayQuestion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $essayQuestion = $this->essayQuestionRepository->findWithoutFail($id);
        $essaysurveys = DB::table('surveys')
            ->select('name','id')
            ->get();

        if (empty($essayQuestion)) {
            Flash::error('Essay Question not found');

            return redirect(route('essayQuestions.index'));
        }

        return view('essay_questions.edit')
            ->with('essayQuestion', $essayQuestion)
            ->with('essaysurveys', $essaysurveys);
    }

    /**
     * Update the specified EssayQuestion in storage.
     *
     * @param  int              $id
     * @param UpdateEssayQuestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEssayQuestionRequest $request)
    {
        $essayQuestion = $this->essayQuestionRepository->findWithoutFail($id);

        if (empty($essayQuestion)) {
            Flash::error('Essay Question not found');

            return redirect(route('essayQuestions.index'));
        }

        $essayQuestion = $this->essayQuestionRepository->update($request->all(), $id);

        Flash::success('Essay Question updated successfully.');

        return redirect(route('essayQuestions.index'));
    }

    /**
     * Remove the specified EssayQuestion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $essayQuestion = $this->essayQuestionRepository->findWithoutFail($id);

        if (empty($essayQuestion)) {
            Flash::error('Essay Question not found');

            return redirect(route('essayQuestions.index'));
        }

        $this->essayQuestionRepository->delete($id);

        Flash::success('Essay Question deleted successfully.');

        return redirect(route('essayQuestions.index'));
    }
}
