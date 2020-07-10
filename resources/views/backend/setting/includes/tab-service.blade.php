@forelse(json_decode($setting['service']) as $key => $service )
    <div class="card card-setting-service">
        <div class="card-body">

            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0 service-card-title">
                        Service {{ $key+1 }}
                    </h4>
                </div><!--col-->

                <div class="col-sm-7 pull-right">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                        <button type="button" class="btn btn-sm btn-danger btn-del-service">X</button>
                    </div><!--btn-toolbar-->
                </div><!--col-->
            </div><!--row-->
            
            <div class="row mt-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.setting.service.title'))
                            ->class('col-md-2 form-control-label')
                            ->for('service_' . $key . '_title') }}

                        <div class="col-md-10">
                            {{ @html()->text('service[' . $key . '][title]')
                                ->class('form-control')
                                ->id('service_' . $key . '_title')
                                ->placeholder(__('validation.attributes.backend.setting.service.title'))
                                ->value($service->title)
                            }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.setting.service.description'))
                            ->class('col-md-2 form-control-label')
                            ->for('service_' . $key . '_description') }}

                        <div class="col-md-10">
                            {{ @html()->textarea('service[' . $key . '][description]')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.setting.service.description'))
                                ->id('service_' . $key . '_description')
                                ->value($service->description)
                            }}
                        </div><!--col-->
                    </div><!--form-group-->

                </div>
            </div>

        </div>
    </div>

@empty
    <div class="card card-setting-service">
        <div class="card-body">

            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0 service-card-title">
                        Service 1
                    </h4>
                </div><!--col-->

                <div class="col-sm-7 pull-right">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                        <button type="button" class="btn btn-sm btn-danger btn-del-service">X</button>
                    </div><!--btn-toolbar-->
                </div><!--col-->
            </div><!--row-->
            
            <div class="row mt-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.setting.service.title'))
                            ->class('col-md-2 form-control-label')
                            ->for('service_0_title]') }}

                        <div class="col-md-10">
                            {{ html()->text('service[0][title]')
                                ->class('form-control')
                                ->id('service_0_title')
                                ->placeholder(__('validation.attributes.backend.setting.service.title'))
                            }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.setting.service.description'))
                            ->class('col-md-2 form-control-label')
                            ->for('service_0_description]') }}

                        <div class="col-md-10">
                            {{ html()->textarea('service[0][description]')
                                ->class('form-control')
                                ->id('service_0_description')
                                ->placeholder(__('validation.attributes.backend.setting.service.description'))
                            }}
                        </div><!--col-->
                    </div><!--form-group-->

                </div>
            </div>

        </div>
    </div>
@endforelse

<button type="button" class="btn btn-sm btn-secunder" id="add_service">Add Service</button>

@push('after-scripts')
    <script type="text/javascript">
        $('#add_service').click(function(){

            var $newdiv = $(".card-setting-service:last").clone(true);

            
            $newdiv.find('.service-card-title').each(function() {
                var $this = $(this);
                var tIndex = $('.service-card-title').length
                $this.text('Service ' + (tIndex+1) )
            });
            $newdiv.find('label').each(function() {
                var $this = $(this);
                $this.attr('for', $this.attr('for').replace(/_(\d+)_/, function($0, $1) {
                    return '_' + (+$1 + 1) + '_';
                }));
            });

            $newdiv.find('input').each(function() {
                var $this = $(this);
                $this.attr('id', $this.attr('id').replace(/_(\d+)_/, function($0, $1) {
                    return '_' + (+$1 + 1) + '_';
                }));
                $this.attr('name', $this.attr('name').replace(/\[(\d+)\]/, function($0, $1) {
                    return '[' + (+$1 + 1) + ']';
                }));
                $this.val('');
            });

            $newdiv.find('textarea').each(function() {
                var $this = $(this);
                $this.attr('id', $this.attr('id').replace(/_(\d+)_/, function($0, $1) {
                    return '_' + (+$1 + 1) + '_';
                }));
                $this.attr('name', $this.attr('name').replace(/\[(\d+)\]/, function($0, $1) {
                    return '[' + (+$1 + 1) + ']';
                }));
                $this.val('');
            });
            $newdiv.insertAfter('.card-setting-service:last');
        })
        $('.btn-del-service').click(function() {
            var count = $('.card-setting-service').length
            if (count <= 1) {
                return alert("Don't remove all service")
            }

            $(this).parents('.card-setting-service').remove()    
        })
        
    </script>
@endpush