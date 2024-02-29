<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLikeArticleRequest;
use App\Http\Requests\UpdateLikeArticleRequest;
use App\Repositories\LikeArticleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LikeArticleController extends AppBaseController
{
    /** @var  LikeArticleRepository */
    private $likeArticleRepository;

    public function __construct(LikeArticleRepository $likeArticleRepo)
    {
        $this->likeArticleRepository = $likeArticleRepo;
    }

    /**
     * Display a listing of the LikeArticle.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->likeArticleRepository->pushCriteria(new RequestCriteria($request));
        $likeArticles = $this->likeArticleRepository->all();

        return view('like_articles.index')
            ->with('likeArticles', $likeArticles);
    }

    /**
     * Show the form for creating a new LikeArticle.
     *
     * @return Response
     */
    public function create()
    {
        return view('like_articles.create');
    }

    /**
     * Store a newly created LikeArticle in storage.
     *
     * @param CreateLikeArticleRequest $request
     *
     * @return Response
     */
    public function store(CreateLikeArticleRequest $request)
    {
        $input = $request->all();

        $likeArticle = $this->likeArticleRepository->create($input);

        Flash::success('Like Article saved successfully.');

        return redirect(route('likeArticles.index'));
    }

    /**
     * Display the specified LikeArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $likeArticle = $this->likeArticleRepository->findWithoutFail($id);

        if (empty($likeArticle)) {
            Flash::error('Like Article not found');

            return redirect(route('likeArticles.index'));
        }

        return view('like_articles.show')->with('likeArticle', $likeArticle);
    }

    /**
     * Show the form for editing the specified LikeArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $likeArticle = $this->likeArticleRepository->findWithoutFail($id);

        if (empty($likeArticle)) {
            Flash::error('Like Article not found');

            return redirect(route('likeArticles.index'));
        }

        return view('like_articles.edit')->with('likeArticle', $likeArticle);
    }

    /**
     * Update the specified LikeArticle in storage.
     *
     * @param  int              $id
     * @param UpdateLikeArticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLikeArticleRequest $request)
    {
        $likeArticle = $this->likeArticleRepository->findWithoutFail($id);

        if (empty($likeArticle)) {
            Flash::error('Like Article not found');

            return redirect(route('likeArticles.index'));
        }

        $likeArticle = $this->likeArticleRepository->update($request->all(), $id);

        Flash::success('Like Article updated successfully.');

        return redirect(route('likeArticles.index'));
    }

    /**
     * Remove the specified LikeArticle from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $likeArticle = $this->likeArticleRepository->findWithoutFail($id);

        if (empty($likeArticle)) {
            Flash::error('Like Article not found');

            return redirect(route('likeArticles.index'));
        }

        $this->likeArticleRepository->delete($id);

        Flash::success('Like Article deleted successfully.');

        return redirect(route('likeArticles.index'));
    }
}
