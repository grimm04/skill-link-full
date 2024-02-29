<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentArticleRequest;
use App\Http\Requests\UpdateCommentArticleRequest;
use App\Repositories\CommentArticleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CommentArticleController extends AppBaseController
{
    /** @var  CommentArticleRepository */
    private $commentArticleRepository;

    public function __construct(CommentArticleRepository $commentArticleRepo)
    {
        $this->commentArticleRepository = $commentArticleRepo;
    }

    /**
     * Display a listing of the CommentArticle.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->commentArticleRepository->pushCriteria(new RequestCriteria($request));
        $commentArticles = $this->commentArticleRepository->all();

        return view('comment_articles.index')
            ->with('commentArticles', $commentArticles);
    }

    /**
     * Show the form for creating a new CommentArticle.
     *
     * @return Response
     */
    public function create()
    {
        return view('comment_articles.create');
    }

    /**
     * Store a newly created CommentArticle in storage.
     *
     * @param CreateCommentArticleRequest $request
     *
     * @return Response
     */
    public function store(CreateCommentArticleRequest $request)
    {
        $input = $request->all();

        $commentArticle = $this->commentArticleRepository->create($input);

        Flash::success('Comment Article saved successfully.');

        return redirect(route('commentArticles.index'));
    }

    /**
     * Display the specified CommentArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $commentArticle = $this->commentArticleRepository->findWithoutFail($id);

        if (empty($commentArticle)) {
            Flash::error('Comment Article not found');

            return redirect(route('commentArticles.index'));
        }

        return view('comment_articles.show')->with('commentArticle', $commentArticle);
    }

    /**
     * Show the form for editing the specified CommentArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $commentArticle = $this->commentArticleRepository->findWithoutFail($id);

        if (empty($commentArticle)) {
            Flash::error('Comment Article not found');

            return redirect(route('commentArticles.index'));
        }

        return view('comment_articles.edit')->with('commentArticle', $commentArticle);
    }

    /**
     * Update the specified CommentArticle in storage.
     *
     * @param  int              $id
     * @param UpdateCommentArticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommentArticleRequest $request)
    {
        $commentArticle = $this->commentArticleRepository->findWithoutFail($id);

        if (empty($commentArticle)) {
            Flash::error('Comment Article not found');

            return redirect(route('commentArticles.index'));
        }

        $commentArticle = $this->commentArticleRepository->update($request->all(), $id);

        Flash::success('Comment Article updated successfully.');

        return redirect(route('commentArticles.index'));
    }

    /**
     * Remove the specified CommentArticle from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $commentArticle = $this->commentArticleRepository->findWithoutFail($id);

        if (empty($commentArticle)) {
            Flash::error('Comment Article not found');

            return redirect(route('commentArticles.index'));
        }

        $this->commentArticleRepository->delete($id);

        Flash::success('Comment Article deleted successfully.');

        return redirect(route('commentArticles.index'));
    }
}
