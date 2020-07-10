
<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.general.site_title'))
        ->class('col-md-2 form-control-label')
        ->for('site_title') 
    }}

    <div class="col-md-10">
        {{ @html()->text('site_title')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.general.site_title'))
            ->value($setting['site_title'])
        }}
    </div><!--col-->
</div><!--form-group-->


<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.general.tagline'))
        ->class('col-md-2 form-control-label')
        ->for('tagline') }}

    <div class="col-md-10">
        {{ @html()->text('tagline')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.general.tagline'))
            ->value($setting['tagline'])
        }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.general.phone'))
        ->class('col-md-2 form-control-label')
        ->for('phone') }}

    <div class="col-md-10">
        {{ @html()->text('phone')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.general.phone'))
            ->value($setting['phone'])
        }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.general.address'))
        ->class('col-md-2 form-control-label')
        ->for('address') }}

    <div class="col-md-10">
        {{ @html()->text('address')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.general.address'))
            ->value($setting['address'])
        }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.general.email'))
        ->class('col-md-2 form-control-label')
        ->for('email') }}

    <div class="col-md-10">
        {{ @html()->text('email')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.general.email'))
            ->value($setting['email'])
        }}
    </div><!--col-->
</div><!--form-group-->


<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.general.brand_logo'))
        ->class('col-md-2 form-control-label')
        ->for('brand_logo') }}

    <div class="col-md-10">
        <div class="form-group">
            @if($setting['brand_logo'])
                <div class="dropzone do-upload dz-square hidden" data-url="/admin/setting/upload" data-name="brand_logo" is-large="0" data-recm-size="medium"></div>
                <div class="img-dz"><img class="img-dz img-fluid" src="{{ url(config('storage.images.general.image.url_path').$setting['brand_logo']) }}" />
                    <button type="button" class="btn btn-primary btn-img-dz del-img-dz">Hapus Gambar</button>
                    <input type="hidden" name="brand_logo" value="{{ $setting['brand_logo'] }}" />
                </div>
            @else
                <div class="dropzone do-upload dz-square" data-url="/admin/setting/upload" data-name="brand_logo" is-large="0"></div>
            @endif
        </div>
    </div><!--col-->
</div><!--form-group-->



