<div class="partner-box" url="/admin/setting/upload">
    @forelse(json_decode($setting['partner']) as $key => $partner )
        <div class="card card-setting-partner partner-list" count-partner="{{ $key }}">
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0 partner-card-title">
                            Partner {{ $key+1 }}
                        </h4>
                    </div><!--col-->

                    <div class="col-sm-7 pull-right">
                        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                            <button type="button" class="btn btn-sm btn-danger btn-del-partner">X</button>
                        </div><!--btn-toolbar-->
                    </div><!--col-->
                </div><!--row-->
                
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.setting.partner.image'))
                                ->class('col-md-2 form-control-label') }}

                            <div class="col-md-10">
                                <div class="form-group">
                                @isset($partner->image)
                                    <div class="dropzone do-upload dz-square hidden" data-url="/admin/setting/upload" data-name="partner[{{ $key }}][image]" is-large="0" data-recm-size="medium"></div>
                                    <div class="img-dz"><img class="img-dz img-fluid" src="{{ url(config('storage.images.general.image.url_path').$partner->image) }}" />
                                        <button type="button" class="btn btn-primary btn-img-dz del-img-dz">Hapus Gambar</button>
                                        <input type="hidden" name="partner[{{ $key }}][image]" value="{{ $partner->image }}" />
                                    </div>
                                @else
                                    <div class="dropzone do-upload dz-square" data-url="/admin/setting/upload" data-name="partner[0][image]" is-large="0"></div>
                                @endif
                                </div>
                            </div><!--col-->
                        </div><!--form-group-->

                    </div>
                </div>

            </div>
        </div>
    @empty
        <div class="card card-setting-partner partner-list" count-partner="1">
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0 partner-card-title">
                            Partner 1
                        </h4>
                    </div><!--col-->

                    <div class="col-sm-7 pull-right">
                        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                            <button type="button" class="btn btn-sm btn-danger btn-del-partner">X</button>
                        </div><!--btn-toolbar-->
                    </div><!--col-->
                </div><!--row-->
                
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.setting.partner.image'))
                                ->class('col-md-2 form-control-label')
                                ->for('partner_0_image') }}
                            <div class="col-md-10">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="dropzone do-upload" data-url="/admin/setting/upload" data-name="partner[0][image]" is-large="0"></div>
                                    </div>
                                </div>
                            </div><!--col-->
                        </div><!--form-group-->

                    </div>
                </div>

            </div>
        </div>
    @endforelse
</div>

<button type="button" class="btn btn-sm btn-secunder" id="add_partner">Add Partner</button>
