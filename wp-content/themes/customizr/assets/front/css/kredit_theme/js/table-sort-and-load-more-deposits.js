var sort_params = document.getElementById('sort-params');

jQuery(sort_params).click(function (e) {
    if (e.target.getAttribute('data-cust-att') != 'sort-parameter') return;
    sort_credits(e.target.getAttribute('data-type'));
});

function sort_credits(type) {
    var elemObj = jQuery("div#list_bank > ul li.results-container-line");
    // jQuery('div#list_bank > ul').empty(); //I don't know why, but it's not necessary

    elemObj.sort(function (a, b) {
        if (Number(jQuery(a).attr("data-" + type)) < Number(jQuery(b).attr("data-" + type))) {
            return -1;
        } else {
            return 1;
        }
    }).each(function () {
        jQuery("div#list_bank > ul").prepend(this);
    });
    jQuery("div#list_bank li.results-container-line").css("display", "none").slice(0, 3).show();
}

//load more credits
function loadmore() {
    jQuery("div#list_bank li.results-container-line").slice(0, 3).show();
    jQuery("#loadMore").on('click', function (e) {
        e.preventDefault();
        jQuery("div#list_bank li.results-container-line:hidden").slice(0, 15).slideDown();
    });
}
