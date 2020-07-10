
<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.other.home_background'))
        ->class('col-md-2 form-control-label')
        ->for('home_background') 
    }}

    <div class="col-md-10">
        <div class="form-group">
            @if($setting['home_background'])
                <div class="dropzone do-upload dz-square hidden" data-url="/admin/setting/upload" data-name="home_background" is-large="0" data-recm-size="medium"></div>
                <div class="img-dz"><img class="img-dz img-fluid" src="{{ url(config('storage.images.general.image.url_path').$setting['home_background']) }}" />
                    <button type="button" class="btn btn-primary btn-img-dz del-img-dz">Hapus Gambar</button>
                    <input type="hidden" name="home_background" value="{{ $setting['home_background'] }}" />
                </div>
            @else
                <div class="dropzone do-upload dz-square" data-url="/admin/setting/upload" data-name="home_background" is-large="0"></div>
            @endif
        </div>
    </div><!--col-->
</div><!--form-group-->