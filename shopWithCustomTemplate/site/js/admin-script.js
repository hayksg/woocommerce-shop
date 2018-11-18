jQuery(function ($) {

    /* Upload image for shipping widget */

    $(document).on('click', '.js-shipping-widget-image-upload', function(e){

        e.preventDefault;
        var button = $(this);

        var frameFile = wp.media({
            title: 'Select or upload image',
            library: {
                type: 'image'
            },
            button: {
                text: 'Select image'
            },
            multiple: false // User can select only one image per select
        });

        frameFile.on('select', function(){
            var attachment = frameFile.state().get('selection').first().toJSON();

            button.siblings('.shopping-image').val(attachment.url);
            button.parents('form').find('*[type="submit"]').removeAttr('disabled');;
        });

        frameFile.open();
    });

});