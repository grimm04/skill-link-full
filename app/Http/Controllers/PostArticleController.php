<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostArticleRequest;
use App\Http\Requests\UpdatePostArticleRequest;
use App\Repositories\PostArticleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PostArticleController extends AppBaseController
{
    /** @var  PostArticleRepository */
    private $postArticleRepository;

    public function __construct(PostArticleRepository $postArticleRepo)
    {
        $this->postArticleRepository = $postArticleRepo;
    }

    /**
     * Display a listing of the PostArticle.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->postArticleRepository->pushCriteria(new RequestCriteria($request));
        $postArticles = $this->postArticleRepository->all();

        return view('post_articles.index')
            ->with('postArticles', $postArticles);
    }

    /**
     * Show the form for creating a new PostArticle.
     *
     * @return Response
     */
    public function create()
    {
        return view('post_articles.create');
    }

    /**
     * Store a newly created PostArticle in storage.
     *
     * @param CreatePostArticleRequest $request
     *
     * @return Response
     */
    public function store(CreatePostArticleRequest $request)
    {
        $input = $request->all();

        $postArticle = $this->postArticleRepository->create($input);

        Flash::success('Post Article saved successfully.');

        return redirect(route('postArticles.index'));
    }

    /**
     * Display the specified PostArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $postArticle = $this->postArticleRepository->findWithoutFail($id);

        if (empty($postArticle)) {
            Flash::error('Post Article not found');

            return redirect(route('postArticles.index'));
        }

        return view('post_articles.show')->with('postArticle', $postArticle);
    }

    /**
     * Show the form for editing the specified PostArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $postArticle = $this->postArticleRepository->findWithoutFail($id);

        if (empty($postArticle)) {
            Flash::error('Post Article not found');

            return redirect(route('postArticles.index'));
        }

        return view('post_articles.edit')->with('postArticle', $postArticle);
    }

    /**
     * Update the specified PostArticle in storage.
     *
     * @param  int              $id
     * @param UpdatePostArticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostArticleRequest $request)
    {
        $postArticle = $this->postArticleRepository->findWithoutFail($id);

        if (empty($postArticle)) {
            Flash::error('Post Article not found');

            return redirect(route('postArticles.index'));
        }

        $postArticle = $this->postArticleRepository->update($request->all(), $id);

        Flash::success('Post Article updated successfully.');

        return redirect(route('postArticles.index'));
    }

    /**
     * Remove the specified PostArticle from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $postArticle = $this->postArticleRepository->findWithoutFail($id);

        if (empty($postArticle)) {
            Flash::error('Post Article not found');

            return redirect(route('postArticles.index'));
        }

        $this->postArticleRepository->delete($id);

        Flash::success('Post Article deleted successfully.');

        return redirect(route('postArticles.index'));
    }
}
