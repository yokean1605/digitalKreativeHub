
<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.socmed.facebook'))
        ->class('col-md-2 form-control-label')
        ->for('facebook') 
    }}

    <div class="col-md-10">
        {{ @html()->text('facebook')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.socmed.facebook'))
            ->value($setting['facebook'])
        }}
    </div><!--col-->
</div><!--form-group-->


<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.socmed.twitter'))
        ->class('col-md-2 form-control-label')
        ->for('twitter') 
    }}

    <div class="col-md-10">
        {{ @html()->text('twitter')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.socmed.twitter'))
            ->value($setting['twitter'])
        }}
    </div><!--col-->
</div><!--form-group-->


<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.socmed.instagram'))
        ->class('col-md-2 form-control-label')
        ->for('instagram') 
    }}

    <div class="col-md-10">
        {{ @html()->text('instagram')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.socmed.instagram'))
            ->value($setting['instagram'])
        }}
    </div><!--col-->
</div><!--form-group-->

