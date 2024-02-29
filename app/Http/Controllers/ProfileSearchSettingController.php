<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfileSearchSettingRequest;
use App\Http\Requests\UpdateProfileSearchSettingRequest;
use App\Repositories\ProfileSearchSettingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProfileSearchSettingController extends AppBaseController
{
    /** @var  ProfileSearchSettingRepository */
    private $profileSearchSettingRepository;

    public function __construct(ProfileSearchSettingRepository $profileSearchSettingRepo)
    {
        $this->profileSearchSettingRepository = $profileSearchSettingRepo;
    }

    /**
     * Display a listing of the ProfileSearchSetting.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->profileSearchSettingRepository->pushCriteria(new RequestCriteria($request));
        $profileSearchSettings = $this->profileSearchSettingRepository->all();

        return view('profile_search_settings.index')
            ->with('profileSearchSettings', $profileSearchSettings);
    }

    /**
     * Show the form for creating a new ProfileSearchSetting.
     *
     * @return Response
     */
    public function create()
    {
        return view('profile_search_settings.create');
    }

    /**
     * Store a newly created ProfileSearchSetting in storage.
     *
     * @param CreateProfileSearchSettingRequest $request
     *
     * @return Response
     */
    public function store(CreateProfileSearchSettingRequest $request)
    {
        $input = $request->all();

        $profileSearchSetting = $this->profileSearchSettingRepository->create($input);

        Flash::success('Profile Search Setting saved successfully.');

        return redirect(route('profileSearchSettings.index'));
    }

    /**
     * Display the specified ProfileSearchSetting.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profileSearchSetting = $this->profileSearchSettingRepository->findWithoutFail($id);

        if (empty($profileSearchSetting)) {
            Flash::error('Profile Search Setting not found');

            return redirect(route('profileSearchSettings.index'));
        }

        return view('profile_search_settings.show')->with('profileSearchSetting', $profileSearchSetting);
    }

    /**
     * Show the form for editing the specified ProfileSearchSetting.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profileSearchSetting = $this->profileSearchSettingRepository->findWithoutFail($id);

        if (empty($profileSearchSetting)) {
            Flash::error('Profile Search Setting not found');

            return redirect(route('profileSearchSettings.index'));
        }

        return view('profile_search_settings.edit')->with('profileSearchSetting', $profileSearchSetting);
    }

    /**
     * Update the specified ProfileSearchSetting in storage.
     *
     * @param  int              $id
     * @param UpdateProfileSearchSettingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProfileSearchSettingRequest $request)
    {
        $profileSearchSetting = $this->profileSearchSettingRepository->findWithoutFail($id);

        if (empty($profileSearchSetting)) {
            Flash::error('Profile Search Setting not found');

            return redirect(route('profileSearchSettings.index'));
        }

        $profileSearchSetting = $this->profileSearchSettingRepository->update($request->all(), $id);

        Flash::success('Profile Search Setting updated successfully.');

        return redirect(route('profileSearchSettings.index'));
    }

    /**
     * Remove the specified ProfileSearchSetting from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profileSearchSetting = $this->profileSearchSettingRepository->findWithoutFail($id);

        if (empty($profileSearchSetting)) {
            Flash::error('Profile Search Setting not found');

            return redirect(route('profileSearchSettings.index'));
        }

        $this->profileSearchSettingRepository->delete($id);

        Flash::success('Profile Search Setting deleted successfully.');

        return redirect(route('profileSearchSettings.index'));
    }
}
