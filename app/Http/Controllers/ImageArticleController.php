<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImageArticleRequest;
use App\Http\Requests\UpdateImageArticleRequest;
use App\Repositories\ImageArticleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ImageArticleController extends AppBaseController
{
    /** @var  ImageArticleRepository */
    private $imageArticleRepository;

    public function __construct(ImageArticleRepository $imageArticleRepo)
    {
        $this->imageArticleRepository = $imageArticleRepo;
    }

    /**
     * Display a listing of the ImageArticle.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->imageArticleRepository->pushCriteria(new RequestCriteria($request));
        $imageArticles = $this->imageArticleRepository->all();

        return view('image_articles.index')
            ->with('imageArticles', $imageArticles);
    }

    /**
     * Show the form for creating a new ImageArticle.
     *
     * @return Response
     */
    public function create()
    {
        return view('image_articles.create');
    }

    /**
     * Store a newly created ImageArticle in storage.
     *
     * @param CreateImageArticleRequest $request
     *
     * @return Response
     */
    public function store(CreateImageArticleRequest $request)
    {
        $input = $request->all();

        $imageArticle = $this->imageArticleRepository->create($input);

        Flash::success('Image Article saved successfully.');

        return redirect(route('imageArticles.index'));
    }

    /**
     * Display the specified ImageArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $imageArticle = $this->imageArticleRepository->findWithoutFail($id);

        if (empty($imageArticle)) {
            Flash::error('Image Article not found');

            return redirect(route('imageArticles.index'));
        }

        return view('image_articles.show')->with('imageArticle', $imageArticle);
    }

    /**
     * Show the form for editing the specified ImageArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $imageArticle = $this->imageArticleRepository->findWithoutFail($id);

        if (empty($imageArticle)) {
            Flash::error('Image Article not found');

            return redirect(route('imageArticles.index'));
        }

        return view('image_articles.edit')->with('imageArticle', $imageArticle);
    }

    /**
     * Update the specified ImageArticle in storage.
     *
     * @param  int              $id
     * @param UpdateImageArticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateImageArticleRequest $request)
    {
        $imageArticle = $this->imageArticleRepository->findWithoutFail($id);

        if (empty($imageArticle)) {
            Flash::error('Image Article not found');

            return redirect(route('imageArticles.index'));
        }

        $imageArticle = $this->imageArticleRepository->update($request->all(), $id);

        Flash::success('Image Article updated successfully.');

        return redirect(route('imageArticles.index'));
    }

    /**
     * Remove the specified ImageArticle from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $imageArticle = $this->imageArticleRepository->findWithoutFail($id);

        if (empty($imageArticle)) {
            Flash::error('Image Article not found');

            return redirect(route('imageArticles.index'));
        }

        $this->imageArticleRepository->delete($id);

        Flash::success('Image Article deleted successfully.');

        return redirect(route('imageArticles.index'));
    }
}
