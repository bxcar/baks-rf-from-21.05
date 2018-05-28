var sort_params = document.getElementById('sort-params');

jQuery(sort_params).click(function (e) {
    if (e.target.getAttribute('data-cust-att') != 'sort-parameter') return;
    // jQuery('div#list_bank ul').empty(); //I don't know why, but it's not necessary
    sort_credits(e.target.getAttribute('data-type'));
});

function sort_credits(type) {
    var elemObj = jQuery("div#list_bank ul li.results-container-line");

    elemObj.sort(function (a, b) {
        if (jQuery(a).attr("data-" + type) < jQuery(b).attr("data-" + type)) {
            return -1;
        } else {
            return 1;
        }
    }).each(function () {
        jQuery("div#list_bank ul").append(this);
        // console.log(jQuery(this).find("._2BVob")[0].innerHTML);
    });
}

//load more credits
function loadmore() {
    jQuery("div#list_bank li.results-container-line").slice(0, 3).show();
    jQuery("#loadMore").on('click', function (e) {
        e.preventDefault();
        jQuery("div#list_bank li.results-container-line:hidden").slice(0, 15).slideDown();
    });
}