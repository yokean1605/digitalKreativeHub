import { generateDz, listenDel, goTo } from './upload';


$('#add_partner').click(function(e){
    e.preventDefault();
    var oldCount = $('.partner-list').last().attr('count-partner');
    var count    = (isNaN(oldCount))?1:parseInt(oldCount)+1;
    var url      = $('.partner-box').attr('url');
    var box = '<div class="card card-setting-partner partner-list" count-partner="'+ count +'">'+
    '        <div class="card-body">'+
    '            <div class="row">'+
    '                <div class="col-sm-5">'+
    '                    <h4 class="card-title mb-0 partner-card-title">'+
    '                        Partner '+ count +
    '                    </h4>'+
    '                </div>'+
    '                <div class="col-sm-7 pull-right">'+
    '                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">'+
    '                        <button type="button" class="btn btn-sm btn-danger btn-del-partner">X</button>'+
    '                    </div>'+
    '                </div>'+
    '            </div>'+
    '            <div class="row mt-4">'+
    '                <div class="col">'+
    '                    <div class="form-group row">'+
    '                        <label class="col-md-2 form-control-label">Logo Partner</label>'+
    '                        <div class="col-md-10">'+
    '                                <div class="form-group">'+
    '                                    <div class="dropzone do-upload dz-clickable" data-url="' + url + '" data-name="partner[' + count + '][image]" is-large="0"><div class="dz-default dz-message"><span>Drop files here to upload</span></div></div>'+
    '                                </div>'+
    '                        </div>'+
    '                    </div>'+
    '                </div>'+
    '            </div>'+
    '        </div>'+
    '    </div>';




    $('.partner-box').append(box);
    var dz = $('.partner-box').find('.do-upload:last').not('.hidden');
    generateDz(dz);
    listenDel();
    goTo($('.partner-list').last());

})
$('.partner-box').on('click', '.btn-del-partner', function(e) {
    var count = $('.card-setting-partner').length
    if (count <= 1) {
        return alert("Don't remove all partner")
    }

    $(this).parents('.card-setting-partner').remove()    
})
