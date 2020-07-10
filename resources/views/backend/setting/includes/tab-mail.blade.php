
<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.mail.from_name'))
        ->class('col-md-2 form-control-label')
        ->for('mail_from_name') 
    }}

    <div class="col-md-10">
        {{ @html()->text('mail_from_name')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.mail.from_name'))
            ->value($setting['mail_from_name'])
        }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.mail.from_address'))
        ->class('col-md-2 form-control-label')
        ->for('mail_from_address') 
    }}

    <div class="col-md-10">
        {{ @html()->text('mail_from_address')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.mail.from_address'))
            ->value($setting['mail_from_address'])
        }}
    </div><!--col-->
</div><!--form-group-->


<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.mail.driver'))
        ->class('col-md-2 form-control-label')
        ->for('mail_driver') 
    }}

    <div class="col-md-10">
        {{ @html()->text('mail_driver')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.mail.driver'))
            ->value($setting['mail_driver'])
        }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.mail.host'))
        ->class('col-md-2 form-control-label')
        ->for('mail_host') 
    }}

    <div class="col-md-10">
        {{ @html()->text('mail_host')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.mail.host'))
            ->value($setting['mail_host'])
        }}
    </div><!--col-->
</div><!--form-group-->
<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.mail.port'))
        ->class('col-md-2 form-control-label')
        ->for('mail_port') 
    }}

    <div class="col-md-10">
        {{ @html()->text('mail_port')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.mail.port'))
            ->value($setting['mail_port'])
        }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.mail.username'))
        ->class('col-md-2 form-control-label')
        ->for('mail_username') 
    }}

    <div class="col-md-10">
        {{ @html()->text('mail_username')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.mail.username'))
            ->value($setting['mail_username'])
        }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.mail.password'))
        ->class('col-md-2 form-control-label')
        ->for('mail_password') 
    }}

    <div class="col-md-10">
        {{ @html()->password('mail_password')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.mail.password'))
            ->value($setting['mail_password'])
        }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('validation.attributes.backend.setting.mail.encryption'))
        ->class('col-md-2 form-control-label')
        ->for('mail_encryption') 
    }}

    <div class="col-md-10">
        {{ @html()->text('mail_encryption')
            ->class('form-control')
            ->placeholder(__('validation.attributes.backend.setting.mail.encryption'))
            ->value($setting['mail_encryption'])
        }}
    </div><!--col-->
</div><!--form-group-->
