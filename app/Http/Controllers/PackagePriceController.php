<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePackagePriceRequest;
use App\Http\Requests\UpdatePackagePriceRequest;
use App\Repositories\PackagePriceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PackagePriceController extends AppBaseController
{
    /** @var  PackagePriceRepository */
    private $packagePriceRepository;

    public function __construct(PackagePriceRepository $packagePriceRepo)
    {
        $this->packagePriceRepository = $packagePriceRepo;
    }

    /**
     * Display a listing of the PackagePrice.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->packagePriceRepository->pushCriteria(new RequestCriteria($request));
        $packagePrices = $this->packagePriceRepository->all();

        return view('package_prices.index')
            ->with('packagePrices', $packagePrices);
    }

    /**
     * Show the form for creating a new PackagePrice.
     *
     * @return Response
     */
    public function create()
    {
        return view('package_prices.create');
    }

    /**
     * Store a newly created PackagePrice in storage.
     *
     * @param CreatePackagePriceRequest $request
     *
     * @return Response
     */
    public function store(CreatePackagePriceRequest $request)
    {
        $input = $request->all();

        $packagePrice = $this->packagePriceRepository->create($input);

        Flash::success('Package Price saved successfully.');

        return redirect(route('packagePrices.index'));
    }

    /**
     * Display the specified PackagePrice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $packagePrice = $this->packagePriceRepository->findWithoutFail($id);

        if (empty($packagePrice)) {
            Flash::error('Package Price not found');

            return redirect(route('packagePrices.index'));
        }

        return view('package_prices.show')->with('packagePrice', $packagePrice);
    }

    /**
     * Show the form for editing the specified PackagePrice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $packagePrice = $this->packagePriceRepository->findWithoutFail($id);

        if (empty($packagePrice)) {
            Flash::error('Package Price not found');

            return redirect(route('packagePrices.index'));
        }

        return view('package_prices.edit')->with('packagePrice', $packagePrice);
    }

    /**
     * Update the specified PackagePrice in storage.
     *
     * @param  int              $id
     * @param UpdatePackagePriceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePackagePriceRequest $request)
    {
        $packagePrice = $this->packagePriceRepository->findWithoutFail($id);

        if (empty($packagePrice)) {
            Flash::error('Package Price not found');

            return redirect(route('packagePrices.index'));
        }

        $packagePrice = $this->packagePriceRepository->update($request->all(), $id);

        Flash::success('Package Price updated successfully.');

        return redirect(route('packagePrices.index'));
    }

    /**
     * Remove the specified PackagePrice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $packagePrice = $this->packagePriceRepository->findWithoutFail($id);

        if (empty($packagePrice)) {
            Flash::error('Package Price not found');

            return redirect(route('packagePrices.index'));
        }

        $this->packagePriceRepository->delete($id);

        Flash::success('Package Price deleted successfully.');

        return redirect(route('packagePrices.index'));
    }
}
