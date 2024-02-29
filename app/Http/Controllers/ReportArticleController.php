<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReportArticleRequest;
use App\Http\Requests\UpdateReportArticleRequest;
use App\Repositories\ReportArticleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ReportArticleController extends AppBaseController
{
    /** @var  ReportArticleRepository */
    private $reportArticleRepository;

    public function __construct(ReportArticleRepository $reportArticleRepo)
    {
        $this->reportArticleRepository = $reportArticleRepo;
    }

    /**
     * Display a listing of the ReportArticle.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->reportArticleRepository->pushCriteria(new RequestCriteria($request));
        $reportArticles = $this->reportArticleRepository->all();

        return view('report_articles.index')
            ->with('reportArticles', $reportArticles);
    }

    /**
     * Show the form for creating a new ReportArticle.
     *
     * @return Response
     */
    public function create()
    {
        return view('report_articles.create');
    }

    /**
     * Store a newly created ReportArticle in storage.
     *
     * @param CreateReportArticleRequest $request
     *
     * @return Response
     */
    public function store(CreateReportArticleRequest $request)
    {
        $input = $request->all();

        $reportArticle = $this->reportArticleRepository->create($input);

        Flash::success('Report Article saved successfully.');

        return redirect(route('reportArticles.index'));
    }

    /**
     * Display the specified ReportArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reportArticle = $this->reportArticleRepository->findWithoutFail($id);

        if (empty($reportArticle)) {
            Flash::error('Report Article not found');

            return redirect(route('reportArticles.index'));
        }

        return view('report_articles.show')->with('reportArticle', $reportArticle);
    }

    /**
     * Show the form for editing the specified ReportArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reportArticle = $this->reportArticleRepository->findWithoutFail($id);

        if (empty($reportArticle)) {
            Flash::error('Report Article not found');

            return redirect(route('reportArticles.index'));
        }

        return view('report_articles.edit')->with('reportArticle', $reportArticle);
    }

    /**
     * Update the specified ReportArticle in storage.
     *
     * @param  int              $id
     * @param UpdateReportArticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReportArticleRequest $request)
    {
        $reportArticle = $this->reportArticleRepository->findWithoutFail($id);

        if (empty($reportArticle)) {
            Flash::error('Report Article not found');

            return redirect(route('reportArticles.index'));
        }

        $reportArticle = $this->reportArticleRepository->update($request->all(), $id);

        Flash::success('Report Article updated successfully.');

        return redirect(route('reportArticles.index'));
    }

    /**
     * Remove the specified ReportArticle from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reportArticle = $this->reportArticleRepository->findWithoutFail($id);

        if (empty($reportArticle)) {
            Flash::error('Report Article not found');

            return redirect(route('reportArticles.index'));
        }

        $this->reportArticleRepository->delete($id);

        Flash::success('Report Article deleted successfully.');

        return redirect(route('reportArticles.index'));
    }
}
