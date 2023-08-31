$(document).ready( function(){
    let params = {
        action: 'get-deals',
        paid_promotion: deal_type == 'default' ? [0] : [1],
        user_id:user_id,
        limit:1000
    }
    ajax_request(base_url + '/action','GET',params).then( (res) => {
        if( res.html != '' ){
            $('#_coming_soon_image').remove();
        } else {
            $('#_coming_soon_image').removeClass('d-none');
        }
        $('.loader').remove();
        $('#deal-container').append(res.html)
    })
})
