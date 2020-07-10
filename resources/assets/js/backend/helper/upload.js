if($(".do-upload").length>0){
    $.each($(".do-upload"), function(){
        generateDz($(this));
        listenDel();
    });
}
export function generateDz(elem)
{
    if(elem.attr('is-large') == '1'){
        var isLarge = true;
    }
    var dataUrl  = elem.attr('data-url'); // required
    var dataName = elem.attr('data-name'); // required
    var ths      = elem;
    elem.dropzone({
        url     : dataUrl,
        maxFiles:1,
        maxFilesize: 2,
        acceptedFiles: 'image/*',
        init: function() {
            this.on("sending", function(file, xhr, formData){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                formData.append("_token", CSRF_TOKEN);
            });
            this.on("error", function(file, message) { 
                alert(message);
                this.removeFile(file); 
            });
        },
        success : function(ev , resp){
            var origImg = resp.filename;
            var fullPath  = BASE_URL + '/' + resp.path;
            var imgBox = '<div class="img-dz">';
                    imgBox += '<img src="'+fullPath+'" alt="Image" class="img-dz img-fluid">';
                    imgBox += '<button type="button" class="btn btn-primary btn-img-dz del-img-dz">Remove Image</button>';
                    imgBox += '<input type="hidden" name="'+dataName+'" value="'+origImg+'">';
                imgBox += '</div>';
                ths.parent().append(imgBox);
                ths.addClass('hidden');
                this.removeFile(ev);
        },
        error : function(err){
            console.log(err);
        }
    });
}


export function listenDel()
{
    $('.form-group').delegate('.del-img-dz', 'click', function(e){
        e.preventDefault();
        $(this).parent().siblings().removeClass('hidden');
        $(this).parent().remove();
    }).on('click', '.del-form', function(e){
        e.preventDefault();
        $(this).closest('.form-group').slideUp(600, function(){$(this).remove()});
    })

}    


export function goTo(elem)
{
    $('html,body').animate({
        scrollTop: elem.offset().top
    },1000);
    elem.find('input,textarea,select').filter(':visible:first').focus();
}

