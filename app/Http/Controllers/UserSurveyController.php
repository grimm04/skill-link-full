<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserSurveyRequest;
use App\Http\Requests\UpdateUserSurveyRequest;
use App\Repositories\UserSurveyRepository;
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
use App\Models\EssayAnswer;
use App\Models\EssayQuestion;
use Illuminate\Support\Facades\DB;

class UserSurveyController extends AppBaseController
{
    /** @var  UserSurveyRepository */
    private $userSurveyRepository;

    public function __construct(UserSurveyRepository $userSurveyRepo)
    {
        $this->userSurveyRepository = $userSurveyRepo;
    }

    /**
     * Display a listing of the UserSurvey.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userSurveyRepository->pushCriteria(new RequestCriteria($request));
        $userSurveys = $this->userSurveyRepository->all();

        return view('user_surveys.index')
            ->with('userSurveys', $userSurveys);
    }

    public function category_large(Request $request)
    {
        $this->userSurveyRepository->pushCriteria(new RequestCriteria($request));
        //$userSurveys = $this->userSurveyRepository->where('category_size', 'large')->all();
        //$userSurveys = DB::table('user_surveys')->all();
        $userSurveys = UserSurvey::where('company_size', 'Large')->get();

        return view('user_surveys.index')
            ->with('userSurveys', $userSurveys);
    }

    public function category_medium(Request $request)
    {
        $this->userSurveyRepository->pushCriteria(new RequestCriteria($request));
        //$userSurveys = $this->userSurveyRepository->all();
        $userSurveys = UserSurvey::where('company_size', 'Medium')->get();

        return view('user_surveys.index')
            ->with('userSurveys', $userSurveys);
    }

    public function category_small(Request $request)
    {
        $this->userSurveyRepository->pushCriteria(new RequestCriteria($request));
        $userSurveys = $this->userSurveyRepository->all();
        $userSurveys = UserSurvey::where('company_size', 'Small')->get();

        return view('user_surveys.index')
            ->with('userSurveys', $userSurveys);
    }

    /**
     * Show the form for creating a new UserSurvey.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_surveys.create');
    }

    /**
     * Store a newly created UserSurvey in storage.
     *
     * @param CreateUserSurveyRequest $request
     *
     * @return Response
     */
    public function store(CreateUserSurveyRequest $request)
    {
        $input = $request->all();

        $userSurvey = $this->userSurveyRepository->create($input);

        Flash::success('User Survey saved successfully.');

        return redirect(route('userSurveys.index'));
    }

    /**
     * Display the specified UserSurvey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userSurvey = $this->userSurveyRepository->findWithoutFail($id);

        $question = Question::with('getModelMcSurvey')->get();
        $question_essay = EssayAnswer::with('getModelEssayQuestion')->get();

        if (empty($userSurvey)) {
            Flash::error('User Survey not found');

            return redirect(route('userSurveys.index'));
        }

        return view('user_surveys.show')
            ->with('userSurvey', $userSurvey)
            ->with('question', $question)
            ->with('question_essay', $question_essay);
    }

    /**
     * Show the form for editing the specified UserSurvey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userSurvey = $this->userSurveyRepository->findWithoutFail($id);

        if (empty($userSurvey)) {
            Flash::error('User Survey not found');

            return redirect(route('userSurveys.index'));
        }

        return view('user_surveys.edit')->with('userSurvey', $userSurvey);
    }

    /**
     * Update the specified UserSurvey in storage.
     *
     * @param  int              $id
     * @param UpdateUserSurveyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserSurveyRequest $request)
    {
        $userSurvey = $this->userSurveyRepository->findWithoutFail($id);

        if (empty($userSurvey)) {
            Flash::error('User Survey not found');

            return redirect(route('userSurveys.index'));
        }

        $userSurvey = $this->userSurveyRepository->update($request->all(), $id);

        Flash::success('User Survey updated successfully.');

        return redirect(route('userSurveys.index'));
    }

    /**
     * Remove the specified UserSurvey from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userSurvey = $this->userSurveyRepository->findWithoutFail($id);

        if (empty($userSurvey)) {
            Flash::error('User Survey not found');

            return redirect(route('userSurveys.index'));
        }

        $this->userSurveyRepository->delete($id);

        Flash::success('User Survey deleted successfully.');

        return redirect(route('userSurveys.index'));
    }
}
