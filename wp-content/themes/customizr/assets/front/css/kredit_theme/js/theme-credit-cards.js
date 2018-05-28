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

            table = table + '<li class="results-container-line" data-rate="' + min_credit_rate + '" data-period="' + grace_period + '" data-limit="' + max_credit_limit + '">' +
                '<div class="bank-product result-card result-card--deposit result-card--promoted T-DefaultProposition T-Proposition">' +
                '<div class="result-card-top bank-product__top">' +
                '<div class="bank-product__header bank-product__header--mobile">' +
                '<div class="bank-product__bank">' + bank_title + '</div>' +
                '<div class="bank-product__card-name">' +
                '<a class="bank-product__card-link" href="' + credit_card_link + '" target="_blank">' + name + '</a>' +
                '</div>' +
                '</div>' +
                '<div class="bank-product__row">' +
                '<div class="bank-product__column bank-product__column--small">' +
                '<span class="bank-product__cardwrap">' +
                '<div class="bank-product__card">' +
                '<div class="product-pic">' +
                '<a class="company-logo-inner" href="' + credit_card_link + '" target="_blank" rel="noopener noreferrer">' +
                '<img style="width:221px;" src="' + logo + '" alt="' + alt + '">' +
                '</a>' +
                '</div><span></span></div>' +
                '</span></div>' +
                '<div class="bank-product__column bank-product__column--big">' +
                '<div class="bank-product__desc">' +
                '<div class="product-info-container-inner">' +
                '<div class="l-content-row">' +
                '<div class="bank-product__header">' +
                '<div class="bank-product__bank">' + bank_title + '</div>' +
                '<div class="bank-product__card-name">' +
                '<a class="bank-product__card-link" href="' + credit_card_link + '" target="_blank" rel="noopener noreferrer">' + name + '</a>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="l-content-row result-main-features clearfix">' +
                '<ul class="card-info-list">' +
                '<li class="card-info-list__item">' +
                '<span class="card-info-list__icon card-info-list__icon--percent"></span>' +
                '<span class="digits bank-product__txt">' + rate + '</span>' +
                '<span class="dimmed bank-product__ref"> ставка по кредиту в год</span>' +
                '</li>' +
                '<li class="card-info-list__item">' +
                '<span class="card-info-list__icon card-info-list__icon--calendar"></span>' +
                '<span class="digits bank-product__txt">' + period + '</span>' +
                '<span class="dimmed bank-product__ref"> льготный период</span>' +
                '</li>' +
                '<li class="card-info-list__item">' +
                '<span class="card-info-list__icon card-info-list__icon--bag"></span>' +
                '<span class="digits bank-product__txt">' + credit_limit + ' ' +
                '<span class="rouble">' +
                '<span class="rouble__default">руб.</span>' +
                '</span>' +
                '</span>' +
                '<span class="dimmed bank-product__ref"> кредитный лимит</span>' +
                '</li>' +
                '<li class="card-info-list__item">' +
                '<span class="card-info-list__icon card-info-list__icon--price"></span>' +
                '<span class="digits bank-product__txt">' + service_cost + '</span>' +
                '<span class="dimmed bank-product__ref"> стоимость обслуживания</span>' +
                '</li>';
            if (cashback) {
                table = table + '<li class="card-info-list__item card-info-list__item-cashback">' +
                    '<span class="card-info-list__icon card-info-list__icon--cashback"></span>' +
                    '<span class="digits bank-product__txt">' + cashback + ' </span>' +
                    '<span class="dimmed bank-product__ref"> Cashback</span>' +
                    '</li>' +
                    '</ul>' +
                    '</div>' +
                    '<div class="result-card-btn-container bank-product__btn">' +
                    '<a href="' + credit_card_link + '" class="ui-button ui-button--green" target="_blank" rel="noopener noreferrer">Перейти</a>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="bank-product__lic bank-product__lic--pos-bottom">' +
                    '<div class="license-text " style="display: none;">' +
                    '<span>Лиц. № </span><span>2557</span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="result-card-mobile-btn-container">' +
                    '<a href="' + credit_card_link + '" class="ui-button ui-button--green ui-button--mobile" target="_blank" rel="noopener noreferrer">Перейти</a>' +
                    '</div>' +
                    '<div class="result-card-close-btn">' +
                    '<icon class="icon icon-size-13 icon--close">' +
                    '<svg class="icon-img" viewBox="0 0 20 20"><line fill="none" stroke="#3B3E46" stroke-width="2" x1="1.3" y1="1.1" x2="18.9" y2="18.7"></line><line fill="none" stroke="#3B3E46" stroke-width="2" x1="18.6" y1="1.1" x2="1" y2="18.7"></line></svg>' +
                    '</icon>' +
                    '</div>' +
                    '</div>' +
                    '</li>';
            } else {
                table = table + '</ul>' +
                    '</div>' +
                    '<div class="result-card-btn-container bank-product__btn">' +
                    '<a href="' + credit_card_link + '" class="ui-button ui-button--green" target="_blank" rel="noopener noreferrer">Перейти</a>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="bank-product__lic bank-product__lic--pos-bottom">' +
                    '<div class="license-text " style="display: none;">' +
                    '<span>Лиц. № </span><span>2557</span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="result-card-mobile-btn-container">' +
                    '<a href="' + credit_card_link + '" class="ui-button ui-button--green ui-button--mobile" target="_blank" rel="noopener noreferrer">Перейти</a>' +
                    '</div>' +
                    '<div class="result-card-close-btn">' +
                    '<icon class="icon icon-size-13 icon--close">' +
                    '<svg class="icon-img" viewBox="0 0 20 20"><line fill="none" stroke="#3B3E46" stroke-width="2" x1="1.3" y1="1.1" x2="18.9" y2="18.7"></line><line fill="none" stroke="#3B3E46" stroke-width="2" x1="18.6" y1="1.1" x2="1" y2="18.7"></line></svg>' +
                    '</icon>' +
                    '</div>' +
                    '</div>' +
                    '</li>';
            }

        }
    }
    table = table + "</ul>";
    document.getElementById("list_bank").innerHTML = table;
}
