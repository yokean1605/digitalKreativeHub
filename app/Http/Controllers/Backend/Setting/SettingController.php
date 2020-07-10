<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Models\Setting\AppSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\Backend\Setting\SettingRepository;

class SettingController extends Controller
{
	protected $settingRepository;

	public function __construct(SettingRepository $settingRepository)
	{
		$this->settingRepository = $settingRepository;
	}

	public function index()
	{
        $setting = $this->settingRepository->all();
        $setting = $setting->pluck('setting_value','setting_key');
		return view('backend.setting.index', compact('setting'));
	}

    public function store(Request $request)
    {
        $this->settingRepository->save($request->only(config('setting.setting_key')));

        return redirect()->route('admin.setting.index')->withFlashSuccess(__('alerts.backend.general.saved'));
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            if ($request->file('file')->isValid()) {
                $image = $request->file->store(config('storage.images.general.image.store_path'));
                $path = config('storage.images.general.image.url_path') . $request->file->hashName();
                $filename = $request->file->hashName();
            }

            return response()->json(['status' => true, 'path' => $path, 'filename' => $filename]);
        }
    }
}