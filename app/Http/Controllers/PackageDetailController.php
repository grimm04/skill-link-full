<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePackageDetailRequest;
use App\Http\Requests\UpdatePackageDetailRequest;
use App\Repositories\PackageDetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PackageDetailController extends AppBaseController
{
    /** @var  PackageDetailRepository */
    private $packageDetailRepository;

    public function __construct(PackageDetailRepository $packageDetailRepo)
    {
        $this->packageDetailRepository = $packageDetailRepo;
    }

    /**
     * Display a listing of the PackageDetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->packageDetailRepository->pushCriteria(new RequestCriteria($request));
        $packageDetails = $this->packageDetailRepository->all();

        return view('package_details.index')
            ->with('packageDetails', $packageDetails);
    }

    /**
     * Show the form for creating a new PackageDetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('package_details.create');
    }

    /**
     * Store a newly created PackageDetail in storage.
     *
     * @param CreatePackageDetailRequest $request
     *
     * @return Response
     */
    public function store(CreatePackageDetailRequest $request)
    {
        $input = $request->all();

        $packageDetail = $this->packageDetailRepository->create($input);

        Flash::success('Package Detail saved successfully.');

        return redirect(route('packageDetails.index'));
    }

    /**
     * Display the specified PackageDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $packageDetail = $this->packageDetailRepository->findWithoutFail($id);

        if (empty($packageDetail)) {
            Flash::error('Package Detail not found');

            return redirect(route('packageDetails.index'));
        }

        return view('package_details.show')->with('packageDetail', $packageDetail);
    }

    /**
     * Show the form for editing the specified PackageDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $packageDetail = $this->packageDetailRepository->findWithoutFail($id);

        if (empty($packageDetail)) {
            Flash::error('Package Detail not found');

            return redirect(route('packageDetails.index'));
        }

        return view('package_details.edit')->with('packageDetail', $packageDetail);
    }

    /**
     * Update the specified PackageDetail in storage.
     *
     * @param  int              $id
     * @param UpdatePackageDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePackageDetailRequest $request)
    {
        $packageDetail = $this->packageDetailRepository->findWithoutFail($id);

        if (empty($packageDetail)) {
            Flash::error('Package Detail not found');

            return redirect(route('packageDetails.index'));
        }

        $packageDetail = $this->packageDetailRepository->update($request->all(), $id);

        Flash::success('Package Detail updated successfully.');

        return redirect(route('packageDetails.index'));
    }

    /**
     * Remove the specified PackageDetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $packageDetail = $this->packageDetailRepository->findWithoutFail($id);

        if (empty($packageDetail)) {
            Flash::error('Package Detail not found');

            return redirect(route('packageDetails.index'));
        }

        $this->packageDetailRepository->delete($id);

        Flash::success('Package Detail deleted successfully.');

        return redirect(route('packageDetails.index'));
    }
}
