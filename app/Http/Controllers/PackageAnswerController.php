<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePackageAnswerRequest;
use App\Http\Requests\UpdatePackageAnswerRequest;
use App\Repositories\PackageAnswerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class PackageAnswerController extends AppBaseController
{
    /** @var  PackageAnswerRepository */
    private $packageAnswerRepository;

    public function __construct(PackageAnswerRepository $packageAnswerRepo)
    {
        $this->packageAnswerRepository = $packageAnswerRepo;
    }

    /**
     * Display a listing of the PackageAnswer.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->packageAnswerRepository->pushCriteria(new RequestCriteria($request));
        $packageAnswers = $this->packageAnswerRepository->all();

        $answer = DB::table('package_answers')
                ->join('user_surveys', 'package_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'package_answers.answer as title',
                    DB::raw('count(package_answers.answer) as answer_count'))
                ->groupBy('package_answers.answer')
                ->get();

        return view('package_answers.index')
            ->with('packageAnswers', $packageAnswers)
            ->with('answer', $answer);
    }
    
    public function category_large(Request $request)
    {
        $this->packageAnswerRepository->pushCriteria(new RequestCriteria($request));
        $packageAnswers = $this->packageAnswerRepository->all();

        $answer = DB::table('package_answers')
                ->join('user_surveys', 'package_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'package_answers.answer as title',
                    DB::raw('count(package_answers.answer) as answer_count'))
                ->groupBy('package_answers.answer')
                ->where('user_surveys.company_size', 'Large')
                ->get();

        return view('package_answers.index')
            ->with('packageAnswers', $packageAnswers)
            ->with('answer', $answer);
    }
    
    public function category_medium(Request $request)
    {
        $this->packageAnswerRepository->pushCriteria(new RequestCriteria($request));
        $packageAnswers = $this->packageAnswerRepository->all();

        $answer = DB::table('package_answers')
                ->join('user_surveys', 'package_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'package_answers.answer as title',
                    DB::raw('count(package_answers.answer) as answer_count'))
                ->groupBy('package_answers.answer')
                ->where('user_surveys.company_size', 'Medium')
                ->get();

        return view('package_answers.index')
            ->with('packageAnswers', $packageAnswers)
            ->with('answer', $answer);
    }
    
    public function category_small(Request $request)
    {
        $this->packageAnswerRepository->pushCriteria(new RequestCriteria($request));
        $packageAnswers = $this->packageAnswerRepository->all();

        $answer = DB::table('package_answers')
                ->join('user_surveys', 'package_answers.id_user_survey', '=', 'user_surveys.id')
                ->select(
                    'package_answers.answer as title',
                    DB::raw('count(package_answers.answer) as answer_count'))
                ->groupBy('package_answers.answer')
                ->where('user_surveys.company_size', 'Small')
                ->get();

        return view('package_answers.index')
            ->with('packageAnswers', $packageAnswers)
            ->with('answer', $answer);
    }

    /**
     * Show the form for creating a new PackageAnswer.
     *
     * @return Response
     */
    public function create()
    {
        return view('package_answers.create');
    }

    /**
     * Store a newly created PackageAnswer in storage.
     *
     * @param CreatePackageAnswerRequest $request
     *
     * @return Response
     */
    public function store(CreatePackageAnswerRequest $request)
    {
        $input = $request->all();

        $packageAnswer = $this->packageAnswerRepository->create($input);

        Flash::success('Package Answer saved successfully.');

        return redirect(route('packageAnswers.index'));
    }

    /**
     * Display the specified PackageAnswer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $packageAnswer = $this->packageAnswerRepository->findWithoutFail($id);

        if (empty($packageAnswer)) {
            Flash::error('Package Answer not found');

            return redirect(route('packageAnswers.index'));
        }

        return view('package_answers.show')->with('packageAnswer', $packageAnswer);
    }

    /**
     * Show the form for editing the specified PackageAnswer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $packageAnswer = $this->packageAnswerRepository->findWithoutFail($id);

        if (empty($packageAnswer)) {
            Flash::error('Package Answer not found');

            return redirect(route('packageAnswers.index'));
        }

        return view('package_answers.edit')->with('packageAnswer', $packageAnswer);
    }

    /**
     * Update the specified PackageAnswer in storage.
     *
     * @param  int              $id
     * @param UpdatePackageAnswerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePackageAnswerRequest $request)
    {
        $packageAnswer = $this->packageAnswerRepository->findWithoutFail($id);

        if (empty($packageAnswer)) {
            Flash::error('Package Answer not found');

            return redirect(route('packageAnswers.index'));
        }

        $packageAnswer = $this->packageAnswerRepository->update($request->all(), $id);

        Flash::success('Package Answer updated successfully.');

        return redirect(route('packageAnswers.index'));
    }

    /**
     * Remove the specified PackageAnswer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $packageAnswer = $this->packageAnswerRepository->findWithoutFail($id);

        if (empty($packageAnswer)) {
            Flash::error('Package Answer not found');

            return redirect(route('packageAnswers.index'));
        }

        $this->packageAnswerRepository->delete($id);

        Flash::success('Package Answer deleted successfully.');

        return redirect(route('packageAnswers.index'));
    }
}
