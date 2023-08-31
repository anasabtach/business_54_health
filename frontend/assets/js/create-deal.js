$( document ).ready(function() {

    $( function() {
        $( "#datepicker" ).datepicker({
            minDate: new Date()
        });
    });
    $( function() {
        $( "#startDate" ).datepicker({
            minDate: new Date()
        });
    });

    $('.calander-icon').click( function(){
        var id = $(this).data('id');
        $('#' + id).focus();
    })

    // $('input[name="redeem_type"]').change( function(){
    //     if( $(this).val() == 'multiple' ){
    //         $('#deal_code_fields').hide();
    //     } else {
    //         $('#deal_code_fields').show();
    //     }
    // })

    var defaultPriceType = $('#price_type').attr('data-value');
    if( defaultPriceType != '' ){
        priceType(defaultPriceType);
    }
    $('#price_type').on('change',function(){
        var option = $(this).val();
        priceType(option);
    })

    $('#discount_percentage').keyup( function(){
        var value = $(this).val();
        var price = $('input[name="price"]').val();
        if( price == '' ){
            alert('Price field is required')
        } else if( value > 100 ){
            alert('Discount percentage is not valid');
            $('#discount_percentage').val('0');
            $('#sale_price').val('0');
        } else {
            var discount_price = (( parseFloat(price) * parseFloat(value) ) / 100)
                discount_price = discount_price.toFixed(2);
            $('#sale_price').val( parseFloat(price) - discount_price);
        }
    })

    var defaultTimeBond = $('#time_bound').attr('data-value');
    if( defaultTimeBond != '' ){
        timeBond(defaultTimeBond);
    }
    $('#time_bound').on( 'change', function(){
        var option = $(this).val();
        timeBond(option);
    })

    $('#_upload_image').click( function(){
        $('#image_url').click();
    })
    $('#image_url').change( function(event){
        var output = document.getElementById('_upload_image');
        output.src = URL.createObjectURL(event.target.files[0]);
        $('#_upload_image').css('width','150px');
        $('#_upload_image').css('height','100px');
        $('#_upload_image').css('object-fit','cover');
    })
    //delete deal
    $('._delete_deal').click( function(e){
        e.preventDefault();
        let slug = $(this).data('slug');
        if( slug == '' ){
            alertify.alert('Message', 'Something went wrong.', function(){});
            location.reload(true);
        }
        alertify.confirm('Alert', 'Are you sure you want to continue?',
        function(){
            $('#overlay').show();
            $('button').attr('disabled','disabled');
            //confirm cb
            let delete_deal_params = {
                action: 'delete_deal',
                slug: slug
            }
            ajax_request(base_url + '/action' ,'POST',delete_deal_params).then( (res) => {
                if( res.code == 200 ){
                    alertify.success(res.message)
                    setTimeout( function(){
                        if( deal_type == 1 ){
                            window.location.href= base_url + '/marketing-management';
                        } else {
                            window.location.href= base_url + '/deal-management';
                        }
                    },2000)
                } else {
                    alertify.error(res.message)
                }
            })
        }, function(){
            //cencel cb
        })
    })
    //stripe integration
    if( deal_type == 'marketing' )
    {
        var stripe = Stripe(STRIPE_PUBLISHED_KEY);
        var elements = stripe.elements('');
        // Create an instance of the card Element.
        var card = elements.create('card',{
            style: {
                base: {
                    iconColor: '#c4f0ff',
                    color: 'black',
                    fontWeight: '500',
                    fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
                    fontSize: '16px',
                    fontSmoothing: 'antialiased',
                    ':-webkit-autofill': {
                        color: '#ccc',
                    },
                    '::placeholder': {
                        color: '#ccc',
                    },
                },
                    invalid: {
                    iconColor: '#212121',
                    color: '#212121',
                },
            }
        });
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Create a token or display an error when the form is submitted.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            loaderBar();
            $('button').attr('disabled','disabled')
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the customer that there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                    $('button').removeAttr('disabled')
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'card_token');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            // Submit the form
            form.submit();
        }
    }

});
function priceType(option)
{
    if( option == 'special_price' ){
        $('#special_price_field').removeClass('d-none');
        $('.off_field').addClass('d-none');
        $('#special_price_field').addClass('d-block');
    } else if( option == 'off' ){
        $('.off_field').removeClass('d-none');
        $('#special_price_field').removeClass('d-none');
        $('.off_field').addClass('d-block');
        $('#special_price_field').addClass('d-block');
    } else {
        $('.off_field').removeClass('d-block');
        $('#special_price_field').removeClass('d-block');
        $('#special_price_field').addClass('d-none');
        $('.off_field').addClass('d-none');
        $('[name="price"]').val(0);
        $('[name="sale_price"]').val(0);
    }
}
function timeBond(option)
{
    if( option == 'time_bound' ){
        $('#time_bond_field').removeClass('d-none')
    } else {
        $('#time_bond_field').addClass('d-none')
    }
}
