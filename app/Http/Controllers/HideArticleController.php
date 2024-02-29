<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHideArticleRequest;
use App\Http\Requests\UpdateHideArticleRequest;
use App\Repositories\HideArticleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HideArticleController extends AppBaseController
{
    /** @var  HideArticleRepository */
    private $hideArticleRepository;

    public function __construct(HideArticleRepository $hideArticleRepo)
    {
        $this->hideArticleRepository = $hideArticleRepo;
    }

    /**
     * Display a listing of the HideArticle.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->hideArticleRepository->pushCriteria(new RequestCriteria($request));
        $hideArticles = $this->hideArticleRepository->all();

        return view('hide_articles.index')
            ->with('hideArticles', $hideArticles);
    }

    /**
     * Show the form for creating a new HideArticle.
     *
     * @return Response
     */
    public function create()
    {
        return view('hide_articles.create');
    }

    /**
     * Store a newly created HideArticle in storage.
     *
     * @param CreateHideArticleRequest $request
     *
     * @return Response
     */
    public function store(CreateHideArticleRequest $request)
    {
        $input = $request->all();

        $hideArticle = $this->hideArticleRepository->create($input);

        Flash::success('Hide Article saved successfully.');

        return redirect(route('hideArticles.index'));
    }

    /**
     * Display the specified HideArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hideArticle = $this->hideArticleRepository->findWithoutFail($id);

        if (empty($hideArticle)) {
            Flash::error('Hide Article not found');

            return redirect(route('hideArticles.index'));
        }

        return view('hide_articles.show')->with('hideArticle', $hideArticle);
    }

    /**
     * Show the form for editing the specified HideArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hideArticle = $this->hideArticleRepository->findWithoutFail($id);

        if (empty($hideArticle)) {
            Flash::error('Hide Article not found');

            return redirect(route('hideArticles.index'));
        }

        return view('hide_articles.edit')->with('hideArticle', $hideArticle);
    }

    /**
     * Update the specified HideArticle in storage.
     *
     * @param  int              $id
     * @param UpdateHideArticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHideArticleRequest $request)
    {
        $hideArticle = $this->hideArticleRepository->findWithoutFail($id);

        if (empty($hideArticle)) {
            Flash::error('Hide Article not found');

            return redirect(route('hideArticles.index'));
        }

        $hideArticle = $this->hideArticleRepository->update($request->all(), $id);

        Flash::success('Hide Article updated successfully.');

        return redirect(route('hideArticles.index'));
    }

    /**
     * Remove the specified HideArticle from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hideArticle = $this->hideArticleRepository->findWithoutFail($id);

        if (empty($hideArticle)) {
            Flash::error('Hide Article not found');

            return redirect(route('hideArticles.index'));
        }

        $this->hideArticleRepository->delete($id);

        Flash::success('Hide Article deleted successfully.');

        return redirect(route('hideArticles.index'));
    }
}
