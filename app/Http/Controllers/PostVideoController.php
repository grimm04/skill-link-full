<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostVideoRequest;
use App\Http\Requests\UpdatePostVideoRequest;
use App\Repositories\PostVideoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PostVideoController extends AppBaseController
{
    /** @var  PostVideoRepository */
    private $postVideoRepository;

    public function __construct(PostVideoRepository $postVideoRepo)
    {
        $this->postVideoRepository = $postVideoRepo;
    }

    /**
     * Display a listing of the PostVideo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->postVideoRepository->pushCriteria(new RequestCriteria($request));
        $postVideos = $this->postVideoRepository->all();

        return view('post_videos.index')
            ->with('postVideos', $postVideos);
    }

    /**
     * Show the form for creating a new PostVideo.
     *
     * @return Response
     */
    public function create()
    {
        return view('post_videos.create');
    }

    /**
     * Store a newly created PostVideo in storage.
     *
     * @param CreatePostVideoRequest $request
     *
     * @return Response
     */
    public function store(CreatePostVideoRequest $request)
    {
        $input = $request->all();

        $postVideo = $this->postVideoRepository->create($input);

        Flash::success('Post Video saved successfully.');

        return redirect(route('postVideos.index'));
    }

    /**
     * Display the specified PostVideo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $postVideo = $this->postVideoRepository->findWithoutFail($id);

        if (empty($postVideo)) {
            Flash::error('Post Video not found');

            return redirect(route('postVideos.index'));
        }

        return view('post_videos.show')->with('postVideo', $postVideo);
    }

    /**
     * Show the form for editing the specified PostVideo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $postVideo = $this->postVideoRepository->findWithoutFail($id);

        if (empty($postVideo)) {
            Flash::error('Post Video not found');

            return redirect(route('postVideos.index'));
        }

        return view('post_videos.edit')->with('postVideo', $postVideo);
    }

    /**
     * Update the specified PostVideo in storage.
     *
     * @param  int              $id
     * @param UpdatePostVideoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostVideoRequest $request)
    {
        $postVideo = $this->postVideoRepository->findWithoutFail($id);

        if (empty($postVideo)) {
            Flash::error('Post Video not found');

            return redirect(route('postVideos.index'));
        }

        $postVideo = $this->postVideoRepository->update($request->all(), $id);

        Flash::success('Post Video updated successfully.');

        return redirect(route('postVideos.index'));
    }

    /**
     * Remove the specified PostVideo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $postVideo = $this->postVideoRepository->findWithoutFail($id);

        if (empty($postVideo)) {
            Flash::error('Post Video not found');

            return redirect(route('postVideos.index'));
        }

        $this->postVideoRepository->delete($id);

        Flash::success('Post Video deleted successfully.');

        return redirect(route('postVideos.index'));
    }
}
