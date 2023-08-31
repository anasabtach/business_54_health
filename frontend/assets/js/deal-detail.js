$(document).ready( function(){
    let paid_promotion = deal_type == 0 ? ['0'] : ['1'];
    let params = {
        action: 'related-deals',
        paid_promotion: paid_promotion,
        user_id:deal_user_id,
        limit:4
    }
    ajax_request(base_url + '/action','GET',params).then( (res) => {
        if( res.html == null || res.html == '' ){
            $('#related_deal_section').remove();
        }else{
            $('#deal-container').html(res.html)
        }
    })

    $('._deal_status').click( function(e){
        var slug = $(this).data('slug');
        let params = {
            slug:slug,
            action: 'update_deal_status',
            status: $(this).is(':checked') ? '1' : '0'
        };
        ajax_request(base_url + '/action','POST',params).then( (res) => {
           if( res.code == 400 ){
                //alert(res.message);
           }
        })
    })
    
     //deal redeem
    $('#_deal_redeem').click( function(e){
        e.preventDefault();
        let validation_messages;
        let deal_code = $('#deal_code').val();
        if( auth == null || auth == '' ){
            validation_messages = '<div class="alert alert-danger">Please login to continue</div>';
            $('#_success_dev').addClass( 'd-none' );
            $('#_error_div').html(validation_messages);
            $('#_error_div').removeClass('d-none');
       } else if ( deal_code == '' || deal_code == null ){
            validation_messages = '<div class="alert alert-danger">Redeem code is required</div>';
            $('#_success_dev').addClass( 'd-none' );
            $('#_error_div').html(validation_messages);
            $('#_error_div').removeClass('d-none');
       } else {
            $('#overlay').show();
            $('button').attr('disabled','disabled');
            $('input[type="submit"]').attr('disabled','disabled');
            let params = {
                action: 'deal_redeem',
                deal_id: $(this).data('id'),
                redeem_code: deal_code
            };
            ajax_request(base_url + '/action','GET',params).then( (res) => {
                $('#overlay').hide();
                $('button').removeAttr('disabled');
                $('input[type="submit"]').removeAttr('disabled');
                if( res.code == 400 ){
                    validation_messages = '<div class="alert alert-danger">';
                    for (const [key, value] of Object.entries(res.data)) {
                        validation_messages += `<p>${value}</p>`;
                    }
                    validation_messages += '</div>';
                    $('#_success_dev').addClass( 'd-none' );
                    $('#_error_div').html(validation_messages);
                    $('#_error_div').removeClass('d-none');
                } else {
                    $('#_error_div').addClass('d-none');
                    $('#_success_dev').html( '<div class="alert alert-success">' + res.message + '</div>' );
                    $('#_success_dev').removeClass( 'd-none' );
                    setTimeout( function(){
                        $('#redeemedModal').modal('hide');
                        $('#deal_code').val('');
                        $('#_success_dev').addClass( 'd-none' );
                    },3000 )

                }
            })
       }
    })
  
})
