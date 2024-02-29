<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMcAnswerRequest;
use App\Http\Requests\UpdateMcAnswerRequest;
use App\Repositories\McAnswerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Survey; 
use App\Models\Question;
use App\Models\McSurvey; 
use App\Models\McAnswer;
use App\Models\ImageSurvey;
use App\Models\UserSurvey;
use Illuminate\Support\Facades\DB;

class McAnswerController extends AppBaseController
{
    /** @var  McAnswerRepository */
    private $mcAnswerRepository;

    public function __construct(McAnswerRepository $mcAnswerRepo)
    {
        $this->mcAnswerRepository = $mcAnswerRepo;
    }

    /**
     * Display a listing of the McAnswer.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mcAnswerRepository->pushCriteria(new RequestCriteria($request));
        $mcAnswers = $this->mcAnswerRepository->all();

        $question = Question::with('getModelMcSurvey')->withCount('getModelMcSurvey')->get();

        $users = DB::table('mc_surveys')
                ->join('mc_answers', 'mc_surveys.id', '=', 'mc_answers.id_mc')
                ->join('user_surveys', 'mc_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'mc_surveys.question as title',
                    'mc_surveys.id as id',
                    'mc_surveys.id_question as id_question',
                    DB::raw('count(mc_answers.id_mc) as user_count'))
                ->groupBy('mc_answers.id_mc')
                ->get();

        $answer = DB::table('package_answers')
                ->join('user_surveys', 'package_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'package_answers.answer as title',
                    DB::raw('count(package_answers.answer) as answer_count'))
                ->groupBy('package_answers.answer')
                ->get();

        return view('mc_answers.index')
            ->with('mcAnswers', $mcAnswers)
            ->with('question', $question)
            ->with('users', $users)
            ->with('answer', $answer);
    }
    
    public function category_large(Request $request)
    {
        $this->mcAnswerRepository->pushCriteria(new RequestCriteria($request));
        $mcAnswers = $this->mcAnswerRepository->all();

        $question = Question::with('getModelMcSurvey')->withCount('getModelMcSurvey')->get();

        $users = DB::table('mc_surveys')
                ->join('mc_answers', 'mc_surveys.id', '=', 'mc_answers.id_mc')
                ->join('user_surveys', 'mc_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'mc_surveys.question as title',
                    'mc_surveys.id as id',
                    'mc_surveys.id_question as id_question',
                    DB::raw('count(mc_answers.id_mc) as user_count'))
                ->groupBy('mc_answers.id_mc')
                ->where('user_surveys.company_size', 'Large')
                ->get();

        $answer = DB::table('package_answers')
                ->join('user_surveys', 'package_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'package_answers.answer as title',
                    DB::raw('count(package_answers.answer) as answer_count'))
                ->groupBy('package_answers.answer')
                ->where('user_surveys.company_size', 'Large')
                ->get();

        return view('mc_answers.index')
            ->with('mcAnswers', $mcAnswers)
            ->with('question', $question)
            ->with('users', $users)
            ->with('answer', $answer);
    }
    
    public function category_medium(Request $request)
    {
        $this->mcAnswerRepository->pushCriteria(new RequestCriteria($request));
        $mcAnswers = $this->mcAnswerRepository->all();

        $question = Question::with('getModelMcSurvey')->withCount('getModelMcSurvey')->get();

        $users = DB::table('mc_surveys')
                ->join('mc_answers', 'mc_surveys.id', '=', 'mc_answers.id_mc')
                ->join('user_surveys', 'mc_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'mc_surveys.question as title',
                    'mc_surveys.id as id',
                    'mc_surveys.id_question as id_question',
                    DB::raw('count(mc_answers.id_mc) as user_count'))
                ->groupBy('mc_answers.id_mc')
                ->where('user_surveys.company_size', 'Medium')
                ->get();

        $answer = DB::table('package_answers')
                ->join('user_surveys', 'package_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'package_answers.answer as title',
                    DB::raw('count(package_answers.answer) as answer_count'))
                ->groupBy('package_answers.answer')
                ->where('user_surveys.company_size', 'Medium')
                ->get();

        return view('mc_answers.index')
            ->with('mcAnswers', $mcAnswers)
            ->with('question', $question)
            ->with('users', $users)
            ->with('answer', $answer);
    }
    
    public function category_small(Request $request)
    {
        $this->mcAnswerRepository->pushCriteria(new RequestCriteria($request));
        $mcAnswers = $this->mcAnswerRepository->all();

        $question = Question::with('getModelMcSurvey')->withCount('getModelMcSurvey')->get();

        $users = DB::table('mc_surveys')
                ->join('mc_answers', 'mc_surveys.id', '=', 'mc_answers.id_mc')
                ->join('user_surveys', 'mc_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'mc_surveys.question as title',
                    'mc_surveys.id as id',
                    'mc_surveys.id_question as id_question',
                    DB::raw('count(mc_answers.id_mc) as user_count'))
                ->groupBy('mc_answers.id_mc')
                ->where('user_surveys.company_size', 'Small')
                ->get();

        $answer = DB::table('package_answers')
                ->join('user_surveys', 'package_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'package_answers.answer as title',
                    DB::raw('count(package_answers.answer) as answer_count'))
                ->groupBy('package_answers.answer')
                ->where('user_surveys.company_size', 'Small')
                ->get();

        return view('mc_answers.index')
            ->with('mcAnswers', $mcAnswers)
            ->with('question', $question)
            ->with('users', $users)
            ->with('answer', $answer);
    }

    /**
     * Show the form for creating a new McAnswer.
     *
     * @return Response
     */
    public function create()
    {
        return view('mc_answers.create');
    }

    /**
     * Store a newly created McAnswer in storage.
     *
     * @param CreateMcAnswerRequest $request
     *
     * @return Response
     */
    public function store(CreateMcAnswerRequest $request)
    {
        $input = $request->all();

        $mcAnswer = $this->mcAnswerRepository->create($input);

        Flash::success('Mc Answer saved successfully.');

        return redirect(route('mcAnswers.index'));
    }

    /**
     * Display the specified McAnswer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mcAnswer = $this->mcAnswerRepository->findWithoutFail($id);

        if (empty($mcAnswer)) {
            Flash::error('Mc Answer not found');

            return redirect(route('mcAnswers.index'));
        }

        return view('mc_answers.show')->with('mcAnswer', $mcAnswer);
    }

    /**
     * Show the form for editing the specified McAnswer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mcAnswer = $this->mcAnswerRepository->findWithoutFail($id);

        if (empty($mcAnswer)) {
            Flash::error('Mc Answer not found');

            return redirect(route('mcAnswers.index'));
        }

        return view('mc_answers.edit')->with('mcAnswer', $mcAnswer);
    }

    /**
     * Update the specified McAnswer in storage.
     *
     * @param  int              $id
     * @param UpdateMcAnswerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMcAnswerRequest $request)
    {
        $mcAnswer = $this->mcAnswerRepository->findWithoutFail($id);

        if (empty($mcAnswer)) {
            Flash::error('Mc Answer not found');

            return redirect(route('mcAnswers.index'));
        }

        $mcAnswer = $this->mcAnswerRepository->update($request->all(), $id);

        Flash::success('Mc Answer updated successfully.');

        return redirect(route('mcAnswers.index'));
    }

    /**
     * Remove the specified McAnswer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mcAnswer = $this->mcAnswerRepository->findWithoutFail($id);

        if (empty($mcAnswer)) {
            Flash::error('Mc Answer not found');

            return redirect(route('mcAnswers.index'));
        }

        $this->mcAnswerRepository->delete($id);

        Flash::success('Mc Answer deleted successfully.');

        return redirect(route('mcAnswers.index'));
    }
}
