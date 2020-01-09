jQuery(document).ready(function() {
    jQuery('.color-boat-container').each((index, el) => {
        jQuery(el).find('.required').removeClass('required');
        jQuery(el).find('.color-box').css({'margin-right': '10px', 'width': '50px', 'height': '50px', 'background-color': jQuery(el).find('input').val()})
        jQuery(el).find('input').css({'visibility': 'hidden'});
        jQuery(el).find('.color-box').click(function() {
            
            jQuery('.color-boat-container').each((index, el) => {
                jQuery(el).find('.color-box').css({
                    'border': '0px solid #cccccc'
                })
            });
            jQuery(this).css({
                'border': '3px solid #cccccc'
            })
        })
        jQuery(el).find('span').css({'visibility': 'hidden'});
        if(jQuery(el).find('input').is(':checked')) {
            jQuery(el).find('.color-box').css({
                'border': '3px solid #999999'
            })
        }
    })
});