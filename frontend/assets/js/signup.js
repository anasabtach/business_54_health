$( document ).ready(function() {
    $('#_upload_image').click( function(){
        $('#image_url').click();
    })
    $('#image_url').change( function(event){
        var output = document.getElementById('_upload_image');
        output.src = URL.createObjectURL(event.target.files[0]);
    })
    $('#web_based_service').on( 'change', function(){
        if( $(this).val() == 1 ){
            $('#website_div').show();
        } else {
            $('#website_div').hide();
        }
    })
    $('form').submit( function(){
        $('button').attr('disabled','disabled');
        $('input[type="submit"]').attr('disabled','disabled');
        loaderBar()
    })
    googleAutoComplete();
});
