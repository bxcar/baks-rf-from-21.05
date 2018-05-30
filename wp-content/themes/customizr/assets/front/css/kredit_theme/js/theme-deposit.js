function sort_data(cart, key) {
    return cart;
}

function declOfNum(number, titles) {
    cases = [2, 0, 1, 1, 1, 2];
    return number + ' ' + titles[(number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5]];
}

function change(cart) {
    // console.log("Показываем таблицу");

    var sum_deposit = $("#price").val();
    var currency = $("#cur_currency_dop").val();
    var deposit_period = $("#cur_period").val();
    var deposit_period_number = deposit_period.replace(/[^0-9]/gim, '');
    var cur_rate;
    var cur_rate_number;
    var cur_per;
    // var cur_per_number;
    var rating_class;


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


        var period_number = Number(cart.bank_offers[i].period_number);
        var period_dollars_number = Number(cart.bank_offers[i].period_dollars_number);
        var period_euro_number = Number(cart.bank_offers[i].period_euro_number);


        var link = cart.bank_offers[i].link;
        var income = '';


        kol += 1;

        if (currency == '₽') {
            income = Math.round(rate_number * sum_deposit / 100) * deposit_period_number;
            cur_rate = rate_str;
            cur_rate_number = rate_number;

            cur_per = declOfNum(period_number * deposit_period_number, ['день', 'дня', 'дней']);
        } else if (currency == '$') {
            income = Math.round(rate_dollars_number * sum_deposit / 100) * deposit_period_number;
            cur_rate = rate_dollars_str;
            cur_rate_number = rate_dollars_number;

            cur_per = declOfNum(period_dollars_number * deposit_period_number, ['день', 'дня', 'дней']);
        } else if (currency == '€') {
            income = Math.round(rate_euro_number * sum_deposit / 100) * deposit_period_number;
            cur_rate = rate_euro_str;
            cur_rate_number = rate_euro_number;

            cur_per = declOfNum(period_euro_number * deposit_period_number, ['день', 'дня', 'дней']);
        }

        if (rating == 1) {
            rating_class = 'is-stars-1';
        } else if (rating == 1.5) {
            rating_class = 'is-stars-1-5';
        } else if (rating == 2) {
            rating_class = 'is-stars-2';
        } else if (rating == 2.5) {
            rating_class = 'is-stars-2-5';
        } else if (rating == 3) {
            rating_class = 'is-stars-3';
        } else if (rating == 3.5) {
            rating_class = 'is-stars-3-5';
        } else if (rating == 4) {
            rating_class = 'is-stars-4';
        } else if (rating == 4.5) {
            rating_class = 'is-stars-4-5';
        } else if (rating == 5) {
            rating_class = 'is-stars-5';
        }

        table = table + '<li class="results-container-line" ' +
            'data-rate="' + cur_rate_number + '" ' +
            'data-rating="' + rating + '" ' +
            'data-income="' + income + '">' +
            '<div class="result-card result-card--deposit result-card--promoted T-DefaultProposition T-Proposition">' +
            '<div class="result-card-top">' +
            '<div class="company-info-container">' +
            '<div class="company-logo">' +
            '<a href="' + link + '" class="company-logo-inner">' +
            '<img src="' + logo + '">' +
            '</a>' +
            '</div>' +
            '<div class="company-rating-reviews result-card__company-rating-reviews popup-container Tooltip-Container-Big" title="4.4">' +
            '<div class="rating-stars rating-stars--narrow">' +
            '<span></span>' +
            '<span> </span>' +
            '<div class="rating-stars-inner-container">' +
            '<span class="rating-stars-bar-svg ' + rating_class + '">' +
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
            '<span class="deposit-rate-value test-rate-value">' + cur_rate + '%</span>' +
            '<div class="result-card-item-rate-sub">Ставка в год</div>' +
            '</span>' +
            '</div>' +
            '<span> </span>' +
            '<div class="result-card-item result-card-item--small">' +
            '<span class="deposit-time-value-container">' +
            '<span class="deposit-profit-value">' + cur_per + '</span>' +
            '<div class="result-card-item-rate-sub">Срок вклада</div>' +
            '</span>' +
            '</div>' +
            '<span> </span>' +
            '<div class="result-card-item">' +
            '<span class="deposit-profit-value-container popup-container">' +
            '<span class="deposit-profit-value bank-product-digit-value">+' + income +
            '<span class="rouble1"><span class="rouble__default1">' + currency + '</span>' +
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
    table = table + "</ul>";
    document.getElementById("list_bank").innerHTML = table;
}
