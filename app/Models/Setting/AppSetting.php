<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    protected $table = 'app_settings';

    protected $fillable = ['setting_key', 'setting_value'];

    public $timestamps = false;
}
