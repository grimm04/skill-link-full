<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEssayAnswerRequest;
use App\Http\Requests\UpdateEssayAnswerRequest;
use App\Repositories\EssayAnswerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\EssayQuestion;
use App\Models\Survey;
use App\Models\UserSurvey;
use App\Models\EssayAnswer;

class EssayAnswerController extends AppBaseController
{
    /** @var  EssayAnswerRepository */
    private $essayAnswerRepository;

    public function __construct(EssayAnswerRepository $essayAnswerRepo)
    {
        $this->essayAnswerRepository = $essayAnswerRepo;
    }

    /**
     * Display a listing of the EssayAnswer.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->essayAnswerRepository->pushCriteria(new RequestCriteria($request));
        $essayAnswers = $this->essayAnswerRepository->all();

        $question = EssayAnswer::with('getModelEssayQuestion')->paginate(10);

        return view('essay_answers.index')
            ->with('essayAnswers', $essayAnswers)
            ->with('question', $question);
    }

    /**
     * Show the form for creating a new EssayAnswer.
     *
     * @return Response
     */
    public function create()
    {
        return view('essay_answers.create');
    }

    /**
     * Store a newly created EssayAnswer in storage.
     *
     * @param CreateEssayAnswerRequest $request
     *
     * @return Response
     */
    public function store(CreateEssayAnswerRequest $request)
    {
        $input = $request->all();

        $essayAnswer = $this->essayAnswerRepository->create($input);

        Flash::success('Essay Answer saved successfully.');

        return redirect(route('essayAnswers.index'));
    }

    /**
     * Display the specified EssayAnswer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $essayAnswer = $this->essayAnswerRepository->findWithoutFail($id);

        if (empty($essayAnswer)) {
            Flash::error('Essay Answer not found');

            return redirect(route('essayAnswers.index'));
        }

        return view('essay_answers.show')->with('essayAnswer', $essayAnswer);
    }

    /**
     * Show the form for editing the specified EssayAnswer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $essayAnswer = $this->essayAnswerRepository->findWithoutFail($id);

        if (empty($essayAnswer)) {
            Flash::error('Essay Answer not found');

            return redirect(route('essayAnswers.index'));
        }

        return view('essay_answers.edit')->with('essayAnswer', $essayAnswer);
    }

    /**
     * Update the specified EssayAnswer in storage.
     *
     * @param  int              $id
     * @param UpdateEssayAnswerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEssayAnswerRequest $request)
    {
        $essayAnswer = $this->essayAnswerRepository->findWithoutFail($id);

        if (empty($essayAnswer)) {
            Flash::error('Essay Answer not found');

            return redirect(route('essayAnswers.index'));
        }

        $essayAnswer = $this->essayAnswerRepository->update($request->all(), $id);

        Flash::success('Essay Answer updated successfully.');

        return redirect(route('essayAnswers.index'));
    }

    /**
     * Remove the specified EssayAnswer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $essayAnswer = $this->essayAnswerRepository->findWithoutFail($id);

        if (empty($essayAnswer)) {
            Flash::error('Essay Answer not found');

            return redirect(route('essayAnswers.index'));
        }

        $this->essayAnswerRepository->delete($id);

        Flash::success('Essay Answer deleted successfully.');

        return redirect(route('essayAnswers.index'));
    }
}
