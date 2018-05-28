function sort_data(cart, key) {
    return cart;
}

function change(cart) {
    console.log("Показываем таблицу");

    var sum_credit = $("#price").val();
    var card_type_value = document.querySelector('input[name="mainFilterValue"]:checked').value;


    var l = cart.bank_offers.length;

    var table = "<ul class='' >";
    var kol = 0;
    for (i = 0; i <= l - 1; i++) {

        var name = cart.bank_offers[i].name;
        var logo = cart.bank_offers[i].logo;
        var alt = cart.bank_offers[i].alt;
        var rate = cart.bank_offers[i].rate;
        var bank_title = cart.bank_offers[i].bank_title;
        var credit_limit = cart.bank_offers[i].credit_limit;
        var period = cart.bank_offers[i].period;
        var service_cost = cart.bank_offers[i].service_cost;
        var credit_card_link = cart.bank_offers[i].credit_card_link;
        var amount_min = Number(cart.bank_offers[i].amount_min);
        var amount_max = Number(cart.bank_offers[i].amount_max);
        var type_card = cart.bank_offers[i].type_card;
        var cashback = cart.bank_offers[i].cashback;
        var min_credit_rate = Number(cart.bank_offers[i].min_credit_rate);
        var grace_period = Number(cart.bank_offers[i].grace_period);
        var max_credit_limit = Number(cart.bank_offers[i].max_credit_limit);


        if ((sum_credit >= amount_min) && (sum_credit <= amount_max) && ((card_type_value == 'card_type_' + type_card[0])
            || (card_type_value == 'card_type_' + type_card[1])
            || (card_type_value == 'card_type_' + type_card[2])
            || (card_type_value == 'card_type_' + type_card[3])
            || (card_type_value == 'card_type_' + type_card[4])
            || (card_type_value == 'card_type_all'))) {
            console.log(min_credit_rate);
            console.log(grace_period);
            console.log(max_credit_limit);
            kol += 1;

            table = table + '<li class="results-container-line">'+
                '<div class="result-card result-card--deposit result-card--promoted T-DefaultProposition T-Proposition">'+
                '<div class="result-card-top">'+
                '<div class="company-info-container">'+
                '<div class="company-logo">'+
                '<a href="/bank/rossija/" class="company-logo-inner">'+
                '<img src="//f.sravni.ru/logotypes/banks/logo_228.svg" alt="Банк Россия" title="Банк Россия">'+
                '</a>'+
                '</div>'+
                '<div class="company-rating-reviews result-card__company-rating-reviews popup-container Tooltip-Container-Big" title="4.4">'+
                '<div class="rating-stars rating-stars--narrow">'+
                '<span></span>'+
                '<span> </span>'+
                '<div class="rating-stars-inner-container">'+
                '<span class="rating-stars-bar-svg is-stars-4-5">'+
                '</span>'+
                '</div>'+
                '<span class="rating-stars-text"></span>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '<div class="product-info-container">'+
                '<div class="l-content-row">'+
                '<div class="result-card-name">'+
                '<div>'+
                '<div class="license-text ">'+
                '<span>Лиц. № </span>'+
                '<span>328</span>'+
                '</div>'+
                '<a href="/bank/rossija/vklad/vesennee-nastroenie/?currency=1&amp;amount=850000&amp;period=Год" class="result-name">Вклад «Весеннее настроение»</a>'+
                '</div>'+
                '<div class="provider-name">'+
                '<span>Банк Россия</span>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '<div class="l-content-row result-main-features clearfix">'+
                '<div class="result-card-item result-card-item--big">'+
                '<span class="deposit-rate-value-container popup-container">'+
                '<span class="deposit-rate-value test-rate-value">6,45%</span>'+
                '<div class="result-card-item-rate-sub">Ставка в год</div>'+
                '</span>'+
                '</div>'+
                '<span> </span>'+
                '<div class="result-card-item result-card-item--small">'+
                '<span class="deposit-time-value-container">'+
                '<span class="deposit-profit-value">367 дней</span>'+
                '<div class="result-card-item-rate-sub">Срок вклада</div>'+
                '</span>'+
                '</div>'+
                '<span> </span>'+
                '<div class="result-card-item">'+
                '<span class="deposit-profit-value-container popup-container">'+
                '<span class="deposit-profit-value bank-product-digit-value">+55 125'+
                '<span class="rouble"><span class="rouble__default">руб.</span>'+
                '</span>'+
                '</span'+
                '><div class="result-card-item-rate-sub">Ваш доход</div>'+
                '</span>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '<div class="result-card-btn-container">'+
                '<a class="ui-button ui-button--default result-card-order-btn" href="/bank/rossija/vklad/vesennee-nastroenie/?currency=1&amp;amount=850000&amp;period=Год" data-test="card">Подробнее</a>'+
                '</div>'+
                '</div>'+
                '<div class="result-card-mobile-btn-container">'+
                '<a class="ui-button ui-button--default result-card-order-btn" href="/bank/rossija/vklad/vesennee-nastroenie/?currency=1&amp;amount=850000&amp;period=Год" data-test="card">Подробнее</a>'+
                '</div><div class="result-card-close-btn">'+
                '<icon class="icon icon-size-13 icon--close">'+
                '<svg class="icon-img" viewBox="0 0 20 20">'+
                '<line fill="none" stroke="#3B3E46" stroke-width="2" x1="1.3" y1="1.1" x2="18.9" y2="18.7"></line>'+
                '<line fill="none" stroke="#3B3E46" stroke-width="2" x1="18.6" y1="1.1" x2="1" y2="18.7"></line>'+
                '</svg>'+
                '</icon>'+
                '</div>'+
                '</div>'+
                '</li>';

        }
    }
    table = table + "</ul>";
    document.getElementById("list_bank").innerHTML = table;
}
