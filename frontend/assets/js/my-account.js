$( document ).ready(function() {
    $('#_upload_image').click( function(){
        $('#image_url').click();
    })
    $('#image_url').change( function(event){
        var output = document.getElementById('_upload_image');
        output.src = URL.createObjectURL(event.target.files[0]);
    })
    $('#banner_image').click( function(){
        $('#banner_image_url').click();
    })
    $('#banner_image_url').change( function(event){
        var output = document.getElementById('banner_image');
        output.src = URL.createObjectURL(event.target.files[0]);
    })
    $('#web_based_service').on( 'change', function(){
        if( $(this).val() == 1 ){
            $('#website_div').show();
        } else {
            $('#website_div').hide();
        }
    })
    $('.nav-link').click( function(){
        $('.alert').hide();
    })
    $('form').submit( function(){
        $('button').attr('disabled','disabled');
        $('input[type="submit"]').attr('disabled','disabled');
        loaderBar()
    })
    //notification setting
    $('input[name="notification_setting"]').click( function(e){
        let params = {
            action: 'notification-setting',
            notification_setting: $(this).is(':checked') ? '1' : '0'
        }
        ajax_request(base_url + '/action','GET',params).then( (res) => {
            console.log('res',res);
        })
    })
    //get content
    let content_params = {
        action: 'content',
    }
    ajax_request(base_url + '/action','GET',content_params).then( (res) => {
        $('#_terms_conditions').append(res.data['terms-condition']);
        $('#_privacy_policy').append(res.data['privacy-policy']);
        $('#_faq_').append(res.data.faq);
    });
    //google place api
    googleAutoComplete();
    //rating api
    getRatingReview();
    //get statistics
    getStatistics();
});
function getRatingReview()
{
    let review_param = {
        action: 'vendor-rating',
        user_id: user_id
    };
    ajax_request(base_url + '/action','GET',review_param).then( (res) => {
        if( res.data.length > 0 ){
            for(var i=0; i < res.data.length; i++){
                $('#_review_container').html(`
                    <div class="review-para">
                        <div class="d-flex d-flex align-items-center justify-content-between">
                            <div class="review-heading">
                                <ul class="d-flex align-items-center">
                                    <li class="color-3b3b4d">${ res.data[i].user.name }</li>
                                    <li class="ms-2"><img
                                        src="${ base_url }/frontend/assets/img/star-heading.png"
                                        alt="star-heading" class="img-fluid">
                                    </li>
                                    <li class="color-2e3336 ms-1">${ res.data[i].rating }</li>
                                </ul>
                            </div>
                            <div class="review-date">
                                <p>${ moment(res.data[i].created_at).format('MM-DD-YYYY')  }</p>
                            </div>
                        </div>
                        <p class="border-bottom">
                            ${ res.data[i].review }
                        </p>
                    </div>
                `);
            }
        } else {
            $('#_review_container').html(`<div style="padding: 10px 0;margin-left: 20px;" class="review-title"><p>No Review Found</p></div>`);
        }
    })
}
function getStatistics()
{
    let statistics_params = {
        action: 'statistics',
    };
    ajax_request(base_url + '/action','GET',statistics_params).then( (res) => {
        let statistics = res.data;
        for (const [key, value] of Object.entries(statistics)) {
           $('#'+key).find('h2').html(value);
        }
    });
}
