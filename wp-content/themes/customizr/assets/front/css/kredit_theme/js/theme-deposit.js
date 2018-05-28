function sort_data(cart, key) {
    return cart;
}

function change(cart) {
    console.log("Показываем таблицу");

    var sum_deposit = $("#price").val();
    // var card_type_value = document.querySelector('input[name="mainFilterValue"]:checked').value;


    var l = cart.bank_offers.length;

    var table = "<ul class='' >";
    var kol = 0;
    for (i = 0; i <= l - 1; i++) {

        var name = cart.bank_offers[i].name;
        var logo = cart.bank_offers[i].logo;
        var rating = Number(cart.bank_offers[i].rating);

        var rate_number = Number(cart.bank_offers[i].rate_number);
        var rate_str = cart.bank_offers[i].rate_number;
        rate_str = rate_str.replace(".", ",");

        var rate_dollars_number = Number(cart.bank_offers[i].rate_dollars_number);
        var rate_dollars_str = cart.bank_offers[i].rate_dollars_number;
        rate_dollars_str = rate_dollars_str.replace(".", ",");


        var rate_euro_number = Number(cart.bank_offers[i].rate_euro_number);
        var rate_euro_str = cart.bank_offers[i].rate_euro_number;
        rate_euro_str = rate_euro_str.replace(".", ",");


        var period = cart.bank_offers[i].period;
        var period_number = Number(cart.bank_offers[i].period_number);

        var period_dollars = cart.bank_offers[i].period_dollars;
        var period_dollars_number = Number(cart.bank_offers[i].period_dollars_number);

        var period_euro = cart.bank_offers[i].period_euro;
        var period_euro_number = Number(cart.bank_offers[i].period_euro_number);


        var link = cart.bank_offers[i].link;
        var income = '';


        if (true) {
            kol += 1;

            table = table + '<li class="results-container-line" ' +
                'data-rate="' + rate_number + '" ' +
                'data-rate-dollars="' + rate_dollars_number + '" ' +
                'data-rate-euro="' + rate_euro_number + '" ' +
                'data-period="' + period_number + '" ' +
                'data-period-dollars="' + period_dollars_number + '" ' +
                'data-period-euro="' + period_euro_number + '" ' +
                'data-income="' + income + '">' +
                '<div class="result-card result-card--deposit result-card--promoted T-DefaultProposition T-Proposition">' +
                '<div class="result-card-top">' +
                '<div class="company-info-container">' +
                '<div class="company-logo">' +
                '<a href="' + link + '" class="company-logo-inner">' +
                '<img src="' + logo + '" alt="Банк Россия" title="Банк Россия">' +
                '</a>' +
                '</div>' +
                '<div class="company-rating-reviews result-card__company-rating-reviews popup-container Tooltip-Container-Big" title="4.4">' +
                '<div class="rating-stars rating-stars--narrow">' +
                '<span></span>' +
                '<span> </span>' +
                '<div class="rating-stars-inner-container">' +
                '<span class="rating-stars-bar-svg is-stars-4-5">' +
                '</span>' +
                '</div>' +
                '<span class="rating-stars-text"></span>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="product-info-container">' +
                '<div class="l-content-row">' +
                '<div class="result-card-name">' +
                '<div>' +
                '<a href="' + link + '" class="result-name">' + name + '</a>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="l-content-row result-main-features clearfix">' +
                '<div class="result-card-item result-card-item--big">' +
                '<span class="deposit-rate-value-container popup-container">' +
                '<span class="deposit-rate-value test-rate-value">' + rate_str + '%</span>' +
                '<div class="result-card-item-rate-sub">Ставка в год</div>' +
                '</span>' +
                '</div>' +
                '<span> </span>' +
                '<div class="result-card-item result-card-item--small">' +
                '<span class="deposit-time-value-container">' +
                '<span class="deposit-profit-value">' + period + '</span>' +
                '<div class="result-card-item-rate-sub">Срок вклада</div>' +
                '</span>' +
                '</div>' +
                '<span> </span>' +
                '<div class="result-card-item">' +
                '<span class="deposit-profit-value-container popup-container">' +
                '<span class="deposit-profit-value bank-product-digit-value">+55 125' +
                '<span class="rouble"><span class="rouble__default">руб.</span>' +
                '</span>' +
                '</span' +
                '><div class="result-card-item-rate-sub">Ваш доход</div>' +
                '</span>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="result-card-btn-container">' +
                '<a class="ui-button ui-button--default result-card-order-btn" href="' + link + '" data-test="card">Подробнее</a>' +
                '</div>' +
                '</div>' +
                '<div class="result-card-mobile-btn-container">' +
                '<a class="ui-button ui-button--default result-card-order-btn" href="' + link + '" data-test="card">Подробнее</a>' +
                '</div><div class="result-card-close-btn">' +
                '<icon class="icon icon-size-13 icon--close">' +
                '<svg class="icon-img" viewBox="0 0 20 20">' +
                '<line fill="none" stroke="#3B3E46" stroke-width="2" x1="1.3" y1="1.1" x2="18.9" y2="18.7"></line>' +
                '<line fill="none" stroke="#3B3E46" stroke-width="2" x1="18.6" y1="1.1" x2="1" y2="18.7"></line>' +
                '</svg>' +
                '</icon>' +
                '</div>' +
                '</div>' +
                '</li>';

        }
    }
    table = table + "</ul>";
    document.getElementById("list_bank").innerHTML = table;
}
