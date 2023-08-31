$(document).ready( function(){

    getCommunity();

    $('.business_category').on('change',function(e){
        e.preventDefault();
        category_ids = [];
        $('#deal-container').html('')
        $('#vendor_list_container').html('');
        $('.business_category:checked').each( function(){
            category_ids.push($(this).val());
        })
        getCommunity(category_ids)
    })
})

function getCommunity(category_ids = [])
{
    let params = {
        action: 'community',
        promote_category:category_ids,
        paid_promotion: [1,0],
        limit:1000
    }
    ajax_request(base_url + '/action','GET',params).then( (res) => {
        $('#deal-container').html(res.html)
    })
}

