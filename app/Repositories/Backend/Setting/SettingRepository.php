<?php

namespace App\Repositories\Backend\Setting;

use App\Models\Setting\AppSetting;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;

class SettingRepository extends BaseRepository
{
	public function __construct()
	{
		parent::__construct();
	}

	public function model()
	{
		return AppSetting::class;
	}

	public function save(array $data)
	{
		$newSetting = [];
		foreach ($data as $key => $value) {
			$value = (is_array($value) && !empty($value)) ? json_encode($value) : $value;
			$oldSetting = $this->getSettingKey($key);
			if ($oldSetting) {
				// update
				$oldSetting->setting_value = $value;
				$oldSetting->save();
			} else {
				// create
				$newSetting[] = [
					'setting_key' 		=> $key,
					'setting_value'		=> $value,
				];

			}
		}
		
		if ($newSetting) {
			$this->model->insert($newSetting);
		}

		return true;

	}

	public function getSettingKey($key)
	{
		return AppSetting::where('setting_key', $key)->first();
	}

}