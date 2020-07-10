<div class="row">
	<div class="col-3">
        <div class="form-group">
        @isset(json_decode($setting['team'])[0]->image)
            <div class="dropzone do-upload dz-square hidden" data-url="/admin/setting/upload" data-name="team[0][image]" is-large="0" data-recm-size="medium"></div>
            <div class="img-dz"><img class="img-dz img-fluid" src="{{ url(config('storage.images.general.image.url_path').json_decode($setting['team'])[0]->image) }}" />
                <button type="button" class="btn btn-primary btn-img-dz del-img-dz">Hapus Gambar</button>
                <input type="hidden" name="team[0][image]" value="{{ json_decode($setting['team'])[0]->image }}" />
            </div>
        @else
            <div class="dropzone do-upload dz-square" data-url="/admin/setting/upload" data-name="team[0][image]" is-large="0"></div>
        @endif
    	</div>
	</div>
	<div class="col">
		<div class="card">
		    <div class="card-body">

		        <div class="row">
		            <div class="col-sm-5">
		                <h4 class="card-title mb-0">
		                    Team 
		                </h4>
		            </div><!--col-->
		        </div><!--row-->
		        
		        <div class="row mt-4">
		            <div class="col">
		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.fullname'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[0][fullname]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[0][fullname]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.fullname'))
		                            ->value(json_decode($setting['team'])[0]->fullname)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->
		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.role'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[0][role]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[0][role]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.role'))
		                            ->value(json_decode($setting['team'])[0]->role)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.facebook'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[0][facebook]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[0][facebook]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_facebook'))
		                            ->value(json_decode($setting['team'])[0]->facebook)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.twitter'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[0][twitter]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[0][twitter]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_twitter'))
		                            ->value(json_decode($setting['team'])[0]->twitter)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.instagram'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[0][instagram]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[0][instagram]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_instagram'))
		                            ->value(json_decode($setting['team'])[0]->instagram)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.linkedin'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[0][linkedin]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[0][linkedin]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_linkedin'))
		                            ->value(json_decode($setting['team'])[0]->linkedin)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->


		            </div>
		        </div>

		    </div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-3">
        <div class="form-group">
        @isset(json_decode($setting['team'])[1]->image)
            <div class="dropzone do-upload dz-square hidden" data-url="/admin/setting/upload" data-name="team[1][image]" is-large="0" data-recm-size="medium"></div>
            <div class="img-dz"><img class="img-dz img-fluid" src="{{ url(config('storage.images.general.image.url_path').json_decode($setting['team'])[1]->image) }}" />
                <button type="button" class="btn btn-primary btn-img-dz del-img-dz">Hapus Gambar</button>
                <input type="hidden" name="team[1][image]" value="{{ json_decode($setting['team'])[1]->image }}" />
            </div>
        @else
            <div class="dropzone do-upload dz-square" data-url="/admin/setting/upload" data-name="team[1][image]" is-large="0"></div>
        @endif
    	</div>
	</div>
	<div class="col">
		<div class="card">
		    <div class="card-body">

		        <div class="row">
		            <div class="col-sm-5">
		                <h4 class="card-title mb-0">
		                    Team 
		                </h4>
		            </div><!--col-->
		        </div><!--row-->
		        
		        <div class="row mt-4">
		            <div class="col">
		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.fullname'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[1][fullname]') }}

		                    <div class="col-md-10">
		                        {{ @@html()->text('team[1][fullname]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.fullname'))
		                            ->value(json_decode($setting['team'])[1]->fullname)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->
		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.role'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[1][role]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[1][role]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.role'))
		                            ->value(json_decode($setting['team'])[1]->role)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.facebook'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[1][facebook]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[1][facebook]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_facebook'))
		                            ->value(json_decode($setting['team'])[1]->facebook)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.twitter'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[1][twitter]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[1][twitter]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_twitter'))
		                            ->value(json_decode($setting['team'])[1]->twitter)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.instagram'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[1][instagram]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[1][instagram]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_instagram'))
		                            ->value(json_decode($setting['team'])[1]->instagram)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.linkedin'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[1][linkedin]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[1][linkedin]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_linkedin'))
		                            ->value(json_decode($setting['team'])[1]->linkedin)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->


		            </div>
		        </div>

		    </div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-3">
        <div class="form-group">
        @isset(json_decode($setting['team'])[2]->image)
            <div class="dropzone do-upload dz-square hidden" data-url="/admin/setting/upload" data-name="team[2][image]" is-large="0" data-recm-size="medium"></div>
            <div class="img-dz"><img class="img-dz img-fluid" src="{{ url(config('storage.images.general.image.url_path').json_decode($setting['team'])[2]->image) }}" />
                <button type="button" class="btn btn-primary btn-img-dz del-img-dz">Hapus Gambar</button>
                <input type="hidden" name="team[2][image]" value="{{ json_decode($setting['team'])[2]->image }}" />
            </div>
        @else
            <div class="dropzone do-upload dz-square" data-url="/admin/setting/upload" data-name="team[2][image]" is-large="0"></div>
        @endif
    	</div>
	</div>
	<div class="col">
		<div class="card">
		    <div class="card-body">

		        <div class="row">
		            <div class="col-sm-5">
		                <h4 class="card-title mb-0">
		                    Team 
		                </h4>
		            </div><!--col-->
		        </div><!--row-->
		        
		        <div class="row mt-4">
		            <div class="col">
		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.fullname'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[2][fullname]') }}

		                    <div class="col-md-10">
		                        {{ @@html()->text('team[2][fullname]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.fullname'))
		                            ->value(json_decode($setting['team'])[2]->fullname)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->
		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.role'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[2][role]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[2][role]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.role'))
		                            ->value(json_decode($setting['team'])[2]->role)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.facebook'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[2][facebook]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[2][facebook]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_facebook'))
		                            ->value(json_decode($setting['team'])[2]->facebook)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.twitter'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[2][twitter]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[2][twitter]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_twitter'))
		                            ->value(json_decode($setting['team'])[2]->twitter)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.instagram'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[2][instagram]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[2][instagram]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_instagram'))
		                            ->value(json_decode($setting['team'])[2]->instagram)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.linkedin'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[2][linkedin]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[2][linkedin]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_linkedin'))
		                            ->value(json_decode($setting['team'])[2]->linkedin)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->


		            </div>
		        </div>

		    </div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-3">
        <div class="form-group">
        @isset(json_decode($setting['team'])[3]->image)
            <div class="dropzone do-upload dz-square hidden" data-url="/admin/setting/upload" data-name="team[3][image]" is-large="0" data-recm-size="medium"></div>
            <div class="img-dz"><img class="img-dz img-fluid" src="{{ url(config('storage.images.general.image.url_path').json_decode($setting['team'])[3]->image) }}" />
                <button type="button" class="btn btn-primary btn-img-dz del-img-dz">Hapus Gambar</button>
                <input type="hidden" name="team[3][image]" value="{{ json_decode($setting['team'])[3]->image }}" />
            </div>
        @else
            <div class="dropzone do-upload dz-square" data-url="/admin/setting/upload" data-name="team[3][image]" is-large="0"></div>
        @endif
    	</div>
	</div>
	<div class="col">
		<div class="card">
		    <div class="card-body">

		        <div class="row">
		            <div class="col-sm-5">
		                <h4 class="card-title mb-0">
		                    Team 
		                </h4>
		            </div><!--col-->
		        </div><!--row-->
		        
		        <div class="row mt-4">
		            <div class="col">
		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.fullname'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[3][fullname]') }}

		                    <div class="col-md-10">
		                        {{ @@html()->text('team[3][fullname]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.fullname'))
		                            ->value(json_decode($setting['team'])[3]->fullname)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->
		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.role'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[3][role]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[3][role]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.role'))
		                            ->value(json_decode($setting['team'])[3]->role)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.facebook'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[3][facebook]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[3][facebook]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_facebook'))
		                            ->value(json_decode($setting['team'])[3]->facebook)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.twitter'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[3][twitter]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[3][twitter]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_twitter'))
		                            ->value(json_decode($setting['team'])[3]->twitter)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.instagram'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[3][instagram]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[3][instagram]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_instagram'))
		                            ->value(json_decode($setting['team'])[3]->instagram)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->

		                <div class="form-group row">
		                    {{ html()->label(__('validation.attributes.backend.setting.team.linkedin'))
		                        ->class('col-md-2 form-control-label')
		                        ->for('team[3][linkedin]') }}

		                    <div class="col-md-10">
		                        {{ @html()->text('team[3][linkedin]')
		                            ->class('form-control')
		                            ->placeholder(__('validation.attributes.backend.setting.team.placeholder_linkedin'))
		                            ->value(json_decode($setting['team'])[3]->linkedin)
		                        }}
		                    </div><!--col-->
		                </div><!--form-group-->


		            </div>
		        </div>

		    </div>
		</div>
	</div>
</div>

