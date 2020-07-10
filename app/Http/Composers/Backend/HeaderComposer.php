<?php

namespace App\Http\Composers\Backend;

use Illuminate\View\View;
use App\Repositories\Backend\Setting\SettingRepository;

/**
 * Class HeaderComposer.
 */
class HeaderComposer
{
    /**
     * @var SettingRepository
     */
    protected $settingRepository;

    /**
     * HeaderComposer constructor.
     *
     * @param SettingRepository $settingRepository
     */
    public function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    /**
     * @param View $view
     *
     * @return bool|mixed
     */
    public function compose(View $view)
    {
    	$setting = $this->settingRepository->all();
    	if ($setting) {
    		$setting = $setting->pluck('setting_value','setting_key');
    	}
    	
    	$view->with('setting', $setting);
    }
}
