
var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();


$('.post-title').on('keyup paste',function() {
    var slug = slugify($(this).val())
    $('.post-slug').val(slug)
    var oldSlug = $('.post-slug').attr('old-slug')

    if (oldSlug == slug) {
        removeFeedback()
        return;
    }
    delay(function(){
        checkSlug(slug)
    }, 1000 );
});

$('.post-slug').on('keyup paste',function() {
    var slug = slugify($(this).val())
    
    var oldSlug = $(this).attr('old-slug')
    console.log(oldSlug,slug)
    if (oldSlug == slug) {
        removeFeedback()
        return;
    }
    $(this).val(slug)
    
    delay(function(){
        checkSlug(slug)
    }, 1000 );
});

function checkSlug(strSlug) {
    $.ajax({
        method: 'GET',
        url: BASE_URL + '/api/post/slugmatch',
        data: { slug: strSlug },
        success: function(resp) {
            if (!strSlug) {
                removeFeedback()
                return
            }
            if(resp.exist) {
                var pslug = $('.post-slug')
                pslug.siblings('.valid-feedback').remove()
                pslug.removeClass('is-valid')
                if (pslug.siblings('.invalid-feedback').length <= 0) {
                    var msg = '<div class="invalid-feedback">Slug must be unique. Please change a slug.</div>';
                    pslug.after(msg)   
                }
                if (!pslug.hasClass('.is-invalid')) {
                    pslug.addClass('is-invalid')
                }
            } else {
                var pslug = $('.post-slug')
                pslug.siblings('.invalid-feedback').remove()
                pslug.removeClass('is-invalid')
                if (pslug.siblings('.valid-feedback').length <= 0) {
                    var msg = '<div class="valid-feedback">Slug is valid</div>';
                    pslug.after(msg)   
                }
                if (!pslug.hasClass('.is-valid')) {
                    pslug.addClass('is-valid')
                }
            }
        },
    })
}

function slugify(text)
{
  return text.toString().toLowerCase()
    .replace(/\s+/g, '-')           // Replace spaces with -
    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
    .replace(/^-+/, '')             // Trim - from start of text
    .replace(/-+$/, '');            // Trim - from end of text
}

function removeFeedback()
{
    var pslug = $('.post-slug')
    pslug.siblings('.valid-feedback').remove()
    pslug.siblings('.invalid-feedback').remove()
    pslug.removeClass('is-valid')
    pslug.removeClass('is-invalid')
}