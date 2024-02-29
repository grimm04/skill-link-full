<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImageSurveyRequest;
use App\Http\Requests\UpdateImageSurveyRequest;
use App\Repositories\ImageSurveyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\DB;
use Response;
use App\Models\Question;
use App\Models\Survey;
use App\Models\EssayAnswer;
use App\Models\EssayQuestion;
use App\Models\McAnswer;
use App\Models\McSurvey;
use App\Models\UserSurvey;
use App\Models\PackageAnswer;
use Redirect;

class AnswerController extends AppBaseController
{
    /** @var  ImageSurveyRepository */
    private $imageSurveyRepository;

    public function __construct(ImageSurveyRepository $imageSurveyRepo)
    {
        $this->imageSurveyRepository = $imageSurveyRepo;
    }

    /**
     * Display a listing of the ImageSurvey.
     *
     * @param Request $request
     * @return Response
     */
    public function add(Request $request, Survey $survey, Question $question, EssayAnswer $essayAnswer,  EssayQuestion $essayQuestion, McAnswer $mcAnswer , McSurvey $mcSurvey , UserSurvey $userSurvey, PackageAnswer $packageAnswer)
    {

        $essay_question = Survey::with('getModelEssayQuestion')->get();
        $question = Survey::with('getModelQuestion')->get();
        $essay_question = Survey::with('getModelEssayQuestion')->get();

        /*foreach ($request->question as $a) {
            $questions[] = $a;
            // /$opinion[] = $a->opinion;
        }
            dd($questions);

        foreach ($request->opinion as $b) {
            $answer[] = $b;
        }

            $essayAnswer = new EssayAnswer;
            $essayAnswer->id_essay = $b->id;
            $essayAnswer->answer = $request->opinion.$b->id;

            $essayAnswer->save();

        foreach ($question as $questions => $a) {

            foreach ($a->getModelQuestion as $b => $key) {

                foreach ($variable as $key => $value) {
                    $opinion = $request->opinion.$b->id;
                    dd($opinion);

                    $essayAnswer = new EssayAnswer;
                        $essayAnswer->id_essay = $b->id;
                        $essayAnswer->answer = $request->opinion2;

                        $essayAnswer->save();
                }


            }
        }



        foreach ($essay_question as $a) {

            foreach ($a->getModelEssayQuestion as $b) {

                $opinion = $request->opinion.$b->id;
                dd($opinion);

                $essayAnswer = new EssayAnswer;
                    $essayAnswer->id_essay = $b->id;
                    $essayAnswer->answer = $request->opinion2;

                    $essayAnswer->save();

            }
        }*/


        $userSurveys = $userSurvey->where('email', $request->email)->first();
        if (!empty($userSurveys)){

            return redirect(route('landing'));
        }
        
        $save = new UserSurvey;

        $save->email = $request->email;
        $save->name = $request->name;
        $save->company = $request->company;
        $save->company_size = $request->optradio;
        $save->job_title = $request->job_title;

        $save->save();

        
        $packageAnswer = new PackageAnswer;

        $packageAnswer->id_user_survey = $save->id;
        $packageAnswer->answer = $request->product;

        $packageAnswer->save();
        

        $McAnswer1 = new McAnswer;

        $McAnswer1->id_user_survey = $save->id;
        $McAnswer1->id_mc = $request->optradio11;

        $McAnswer1->save();

        $McAnswer2 = new McAnswer;

        $McAnswer2->id_user_survey = $save->id;
        $McAnswer2->id_mc = $request->optradio12;

        $McAnswer2->save();

        foreach ($request->optradio13 as $key) {

            $McAnswer3 = new McAnswer;

            $McAnswer3->id_user_survey = $save->id;
            $McAnswer3->id_mc = $key;

            $McAnswer3->save();

        }

        $McAnswer5 = new McAnswer;

        $McAnswer5->id_user_survey = $save->id;
        $McAnswer5->id_mc = $request->optradio41;

        $McAnswer5->save();

        $McAnswer6 = new McAnswer;

        $McAnswer6->id_user_survey = $save->id;
        $McAnswer6->id_mc = $request->optradio42;

        $McAnswer6->save();

        $McAnswer7 = new McAnswer;

        $McAnswer7->id_user_survey = $save->id;
        $McAnswer7->id_mc = $request->optradio43;

        $McAnswer7->save();

        $McAnswer8 = new McAnswer;

        $McAnswer8->id_user_survey = $save->id;
        $McAnswer8->id_mc = $request->optradio44;

        $McAnswer8->save();

        $McAnswer9 = new McAnswer;

        $McAnswer9->id_user_survey = $save->id;
        $McAnswer9->id_mc = $request->optradio51;

        $McAnswer9->save();

        $McAnswer10 = new McAnswer;

        $McAnswer10->id_user_survey = $save->id;
        $McAnswer10->id_mc = $request->optradio52;

        $McAnswer10->save();

        $McAnswer11 = new McAnswer;

        $McAnswer11->id_user_survey = $save->id;
        $McAnswer11->id_mc = $request->optradio53;

        $McAnswer11->save();

        $McAnswer12 = new McAnswer;

        $McAnswer12->id_user_survey = $save->id;
        $McAnswer12->id_mc = $request->optradio54;

        $McAnswer12->save();

        $McAnswer13 = new McAnswer;

        $McAnswer13->id_user_survey = $save->id;
        $McAnswer13->id_mc = $request->optradio55;

        $McAnswer13->save();

        $McAnswer14 = new McAnswer;

        $McAnswer14->id_user_survey = $save->id;
        $McAnswer14->id_mc = $request->optradio56;

        $McAnswer14->save();

        $McAnswer15 = new McAnswer;

        $McAnswer15->id_user_survey = $save->id;
        $McAnswer15->id_mc = $request->optradio61;

        $McAnswer15->save();

        $McAnswer16 = new McAnswer;

        $McAnswer16->id_user_survey = $save->id;
        $McAnswer16->id_mc = $request->optradio31;

        $McAnswer16->save();

        $McAnswer17 = new McAnswer;

        $McAnswer17->id_user_survey = $save->id;
        $McAnswer17->id_mc = $request->optradio81;

        $McAnswer17->save();

        $essayAnswer2 = new EssayAnswer;

        $essayAnswer2->id_user_survey = $save->id;
        $essayAnswer2->id_essay = "2";
        $essayAnswer2->answer = $request->opinion2;

        $essayAnswer2->save();

        $essayAnswer3 = new EssayAnswer;

        $essayAnswer3->id_user_survey = $save->id;
        $essayAnswer3->id_essay = "3";
        $essayAnswer3->answer = $request->opinion3;

        $essayAnswer3->save();

        $essayAnswer4 = new EssayAnswer;

        $essayAnswer4->id_user_survey = $save->id;
        $essayAnswer4->id_essay = "4";
        $essayAnswer4->answer = $request->opinion4;

        $essayAnswer4->save();

        $essayAnswer5 = new EssayAnswer;

        $essayAnswer5->id_user_survey = $save->id;
        $essayAnswer5->id_essay = "5";
        $essayAnswer5->answer = $request->opinion5;

        $essayAnswer5->save();

        $essayAnswer6 = new EssayAnswer;

        $essayAnswer6->id_user_survey = $save->id;
        $essayAnswer6->id_essay = "6";
        $essayAnswer6->answer = $request->opinion6;

        $essayAnswer6->save();

        $essayAnswer7 = new EssayAnswer;

        $essayAnswer7->id_user_survey = $save->id;
        $essayAnswer7->id_essay = "7";
        $essayAnswer7->answer = $request->opinion7;

        $essayAnswer7->save();

        $essayAnswer8 = new EssayAnswer;

        $essayAnswer8->id_user_survey = $save->id;
        $essayAnswer8->id_essay = "8";
        $essayAnswer8->answer = $request->opinion8;

        $essayAnswer8->save();

        $essayAnswer9 = new EssayAnswer;

        $essayAnswer9->id_user_survey = $save->id;
        $essayAnswer9->id_essay = "9";
        $essayAnswer9->answer = $request->opinion9;

        $essayAnswer9->save();

        $essayAnswer10 = new EssayAnswer;

        $essayAnswer10->id_user_survey = $save->id;
        $essayAnswer10->id_essay = "10";
        $essayAnswer10->answer = $request->opinion10;

        $essayAnswer10->save();

        $essayAnswer11 = new EssayAnswer;

        $essayAnswer11->id_user_survey = $save->id;
        $essayAnswer11->id_essay = "11";
        $essayAnswer11->answer = $request->opinion11;

        $essayAnswer11->save();

        $essayAnswer12 = new EssayAnswer;

        $essayAnswer12->id_user_survey = $save->id;
        $essayAnswer12->id_essay = "12";
        $essayAnswer12->answer = $request->opinion12;

        $essayAnswer12->save();

        $essayAnswer13 = new EssayAnswer;

        $essayAnswer13->id_user_survey = $save->id;
        $essayAnswer13->id_essay = "13";
        $essayAnswer13->answer = $request->opinion13;

        $essayAnswer13->save();

        $essayAnswer14 = new EssayAnswer;

        $essayAnswer14->id_user_survey = $save->id;
        $essayAnswer14->id_essay = "14";
        $essayAnswer14->answer = $request->opinion14;

        $essayAnswer14->save();

        $email = $save->email;

        return Redirect::route('survey_subscription')
            ->with(['email' => $email]);
    }

    /**
     * Show the form for creating a new ImageSurvey.
     *
     * @return Response
     */
    public function create()
    {
        $imagesurveys = DB::table('questions')
            ->select('title','id')
            ->get();
        return view('image_surveys.create')
            ->with('imagesurveys', $imagesurveys);
    }

    /**
     * Store a newly created ImageSurvey in storage.
     *
     * @param CreateImageSurveyRequest $request
     *
     * @return Response
     */
    public function store(CreateImageSurveyRequest $request,ImageSurvey $ImageSurvey)
    {
        if ($request->hasFile('imageSurveys')) {

            $request->file('imageSurveys'); 
            $filenameimageSurveys = time().''.$request->imageSurveys->getClientOriginalName(); 
            $request->imageSurveys->move(public_path('survey_image'),$filenameimageSurveys); 

            $file = new ImageSurvey; 
            $file->id_question = $request->id_question;
            $file->image = $filenameimageSurveys;

            $file->save(); 

            Flash::success('Image saved successfully.');
        
            return redirect(route('imageSurveys.index'));
        }
        else{
            Flash::success('Image saved failed.');
        
            return redirect(route('imageSurveys.index'));
        }
        /*$input = $request->all();

        $imageSurvey = $this->imageSurveyRepository->create($input);

        Flash::success('Image Survey saved successfully.');

        return redirect(route('imageSurveys.index'));*/
    }

    /**
     * Display the specified ImageSurvey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $imageSurvey = $this->imageSurveyRepository->findWithoutFail($id);

        if (empty($imageSurvey)) {
            Flash::error('Image Survey not found');

            return redirect(route('imageSurveys.index'));
        }

        return view('image_surveys.show')->with('imageSurvey', $imageSurvey);
    }

    /**
     * Show the form for editing the specified ImageSurvey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $imageSurvey = $this->imageSurveyRepository->findWithoutFail($id);
        $imagesurveys = DB::table('questions')
            ->select('title','id')
            ->get();

        if (empty($imageSurvey)) {
            Flash::error('Image Survey not found');

            return redirect(route('imageSurveys.index'));
        }

        return view('image_surveys.edit')
            ->with('imageSurvey', $imageSurvey)
            ->with('imagesurveys', $imagesurveys);
    }

    /**
     * Update the specified ImageSurvey in storage.
     *
     * @param  int              $id
     * @param UpdateImageSurveyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateImageSurveyRequest $request)
    {
        $imageSurvey = $this->imageSurveyRepository->findWithoutFail($id);

        if (empty($imageSurvey)) {
            Flash::error('Image Survey not found');

            return redirect(route('imageSurveys.index'));
        }

        $imageSurvey = $this->imageSurveyRepository->update($request->all(), $id);

        Flash::success('Image Survey updated successfully.');

        return redirect(route('imageSurveys.index'));
    }

    /**
     * Remove the specified ImageSurvey from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $imageSurvey = $this->imageSurveyRepository->findWithoutFail($id);

        if (empty($imageSurvey)) {
            Flash::error('Image Survey not found');

            return redirect(route('imageSurveys.index'));
        }

        $this->imageSurveyRepository->delete($id);

        Flash::success('Image Survey deleted successfully.');

        return redirect(route('imageSurveys.index'));
    }
}
