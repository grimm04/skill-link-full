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
use App\Models\ImageSurvey;
use App\Models\Question;
use Illuminate\Support\Facades\File;

class ImageSurveyController extends AppBaseController
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
    public function index(Request $request)
    {
        $this->imageSurveyRepository->pushCriteria(new RequestCriteria($request));
        $imageSurveys = $this->imageSurveyRepository->all();

        $question = ImageSurvey::with('getModelQuestion')->paginate(5);

        return view('image_surveys.index')
            ->with('imageSurveys', $imageSurveys)
            ->with('question', $question);
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
