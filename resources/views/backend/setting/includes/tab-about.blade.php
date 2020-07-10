
<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.about.title'))
        ->class('col-md-2 form-control-label')
        ->for('about[title]') }}

    <div class="col-md-10">
        {{ @html()->text('about[title]')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.about.title'))
            ->value(json_decode($setting['about'])->title)
        }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.about.sub_title'))
        ->class('col-md-2 form-control-label')
        ->for('about[sub_title]') }}

    <div class="col-md-10">
        {{ @html()->text('about[sub_title]')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.about.sub_title'))
            ->value(json_decode($setting['about'])->sub_title)
        }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.about.description'))
        ->class('col-md-2 form-control-label')
        ->for('about[description]') }}

    <div class="col-md-10">
        {{ @html()->textarea('about[description]')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.about.description'))
            ->value(json_decode($setting['about'])->description)
        }}
    </div><!--col-->
</div><!--form-group-->