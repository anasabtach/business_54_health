let map,
    markerClusterer = null,
    markers = [],
    category_ids = [],
    search_keyword;

$( document ).ready( function(){

    $("#settingModal").click(function(){
        $(".category-text").toggleClass("active");
    });

    $(document).on( 'click','._vendor', function(e){
        e.preventDefault();
        let vendor_lat = $(this).data('lat');
        let vendor_lng = $(this).data('lng');
        if( vendor_lat != '' && vendor_lat != null && vendor_lng != '' && vendor_lng != '' ){
            map.setCenter(new google.maps.LatLng(vendor_lat, vendor_lng));
            map.setZoom(13);
        }
    })

    $('#search-map').click( function(e){
        e.preventDefault();
        //load vendor by name
        search_keyword = $('#_map_search').val();
        if( search_keyword.length > 0 ){
            latitude  = null;
            longitude = null;
            //remove markers
            removeMarkers();
            markers=[];
            $('#vendor_list_container').html('<p>Searching</p>');
            loadVendors(search_keyword);
        }
    })

    $('.business_category').on('change',function(e){
        e.preventDefault();

        category_ids = [];
        removeMarkers();
        markers=[];
        $('#vendor_list_container').html('');

        $('.business_category:checked').each( function(){
            latitude  = null;
            longitude = null;
            category_ids.push($(this).val());
        })
        loadVendors(search_keyword,category_ids)
        $('.map-category-text').removeClass('active')
    })
})

function loadVendors(name=null,business_category=[])
{
    let vendor_params = {
        action: 'vendors-map',
        promote_category:business_category,
        name: name,
        latitude:latitude,
        longitude:longitude,
        limit:1000
    };
    ajax_request(base_url + '/action','GET',vendor_params).then( (res) => {
        let vendor_list_html = ``;
        if( res.data.length > 0 ){
            let vendors = res.data;
            for( var i=0; i < vendors.length; i++ ){
                vendor_list_html += vendorHtml(vendors[i]);
            }
             //show marker on map
             mapMarkers(vendors);
            //vendor list show
            $('#vendor_list_container').html(vendor_list_html);
        } else {
            $('#vendor_list_container').html(`<div class="alert alert-info">No Data Found</div>`);
        }
    })
}
function mapMarkers(vendors)
{
    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    for (i = 0; i < vendors.length; i++) {
      let vendor = vendors[i];
      marker = new google.maps.Marker({
                    position: { lat: parseFloat(vendor.latitude), lng: parseFloat(vendor.longitude) },
                    map: map
                });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          let info_html = `
            <div>
                <h6>${vendor.name}</h6>
                <div style="margin-top:20px;">
                    <p>Address: ${vendor.address}</p>
                    <p style="margin-top:10px;">Working Hours:</p>
                    <p>Mon - Sun</p>
                    <p>${ vendor.open_time } - ${ vendor.close_time }</p>
                </div>
            </div>
          `;
          infowindow.setContent(info_html);
          infowindow.open(map, marker);
        }
      })(marker, i));

    }
}

function removeMarkers()
{
    if( markers.length > 0 ){
        for (let i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
    }
}

function vendorHtml(vendor)
{
    let rating_html = ``;
    for( var r=1; r <=5; r++ ){
        if( vendor.total_rating >= r ){
            rating_html += `<img src="${ base_url }/frontend/assets/img/Star.png" alt="star-img" class="img-fluid">`;
        } else {
            rating_html += `<img src="${ base_url }/frontend/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">`;
        }
    }
    let category_html = '';
    // if( vendor.business_category_id != 0 ){
    //     category_html += `<ul class="d-flex align-items-center">
    //                             <li>
    //                                 <img src="${ base_url }/frontend/assets/img/noun-food.png" alt="noun-food" class="img-fluid">
    //                             </li>
    //                             <li>
    //                                 <span class="review-227 ms-1 color-3b3b4d">${ vendor.business_category.title }</span>
    //                             </li>
    //                         </ul>`;
    // }
    let vendor_list_html = `<div style="cursor:pointer;" data-lat="${ vendor.latitude }" data-lng="${ vendor.longitude }" class="_vendor map-content d-flex align-items-center">
                                <div class="content-img">
                                    <img src="${ vendor.image_url }" alt="resturent-img" class="img-fluid">
                                </div>
                                <div class="content-text ms-2">
                                    <div class="res-name">${ vendor.name }</div>
                                        <ul class="d-flex align-items-center">
                                            <li>${rating_html}</li>
                                            <li>
                                                <span class="review-227 color-2e3336 ms-1" >
                                                    ${ vendor.total_review > 1 ? vendor.total_review + ' reviews' : vendor.total_review + ' review' }
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="location-list d-flex align-items-center">
                                            ${category_html}
                                            <ul class="d-flex align-items-center map-review-list">
                                                <li>
                                                    <img src="${ base_url }/frontend/assets/img/Location.png" alt="location" class="img-fluid">
                                                </li>
                                                <li>
                                                    <span class="review-227 ms-1 color-3b3b4d">${ vendor.city }</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
    return vendor_list_html;
}

function initMap()
{
    let myLatLng = { lat: 44.500000, lng: -89.500000 };
    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 5,
        center: myLatLng
    });

    loadVendors();
}
