﻿function sort_data(cart, key) {
    return cart;
}

function change(cart) {
    console.log("Показываем таблицу");

    var sum_credit = $("#price").val();


    var l = cart.bank_offers.length;

    var table = "<ul class='' >";
    var kol = 0;
    for (i = 0; i <= l - 1; i++) {

        var name = cart.bank_offers[i].name;
        var logo = cart.bank_offers[i].logo;
        var alt = cart.bank_offers[i].alt;
        var rate = cart.bank_offers[i].rate;
        var bank_title = cart.bank_offers[i].bank_title;


        if (true) {
            kol += 1;

            table = table + '<li class="results-container-line">' +
                '<div class="bank-product result-card result-card--deposit result-card--promoted T-DefaultProposition T-Proposition">' +
                '<div class="result-card-top bank-product__top">' +
                '<div class="bank-product__header bank-product__header--mobile">' +
                '<div class="bank-product__bank">'+ bank_title +'</div>' +
                '<div class="bank-product__card-name">' +
                '<a class="bank-product__card-link" href="" target="_blank" rel="noopener noreferrer">'+ name +'</a>' +
                '</div>' +
                '</div>' +
                '<div class="bank-product__row">' +
                '<div class="bank-product__column bank-product__column--small">' +
                '<span class="bank-product__cardwrap">' +
                '<div class="bank-product__card">' +
                '<div class="product-pic">' +
                '<a class="company-logo-inner" href="https://sravni.go2cloud.org/aff_c?offer_id=75&amp;aff_id=2&amp;aff_sub=893580847.1527081166&amp;aff_sub2=(not set)/~/(not set)/~/(not set)/~/(not set)/~/Moscow/~/Moscow/~/kredity%2Fpodbor-onlajn%2F&amp;aff_sub3=&amp;aff_sub4=MasterCardStandardprosto-kreditnaja&amp;aff_sub5=credcard&amp;source=search" target="_blank" rel="noopener noreferrer">' +
                '<img style="width:221px;" src="'+ logo +'" alt="'+ alt +'">' +
                '</a>' +
                '</div><span></span></div>' +
                '</span></div>' +
                '<div class="bank-product__column bank-product__column--big">' +
                '<div class="bank-product__desc">' +
                '<div class="product-info-container-inner">' +
                '<div class="l-content-row">' +
                '<div class="bank-product__header">' +
                '<div class="bank-product__bank">'+ bank_title +'</div>' +
                '<div class="bank-product__card-name">' +
                '<a class="bank-product__card-link" href="https://sravni.go2cloud.org/aff_c?offer_id=75&amp;aff_id=2&amp;aff_sub=893580847.1527081166&amp;aff_sub2=(not set)/~/(not set)/~/(not set)/~/(not set)/~/Moscow/~/Moscow/~/kredity%2Fpodbor-onlajn%2F&amp;aff_sub3=&amp;aff_sub4=MasterCardStandardprosto-kreditnaja&amp;aff_sub5=credcard&amp;source=search" target="_blank" rel="noopener noreferrer">Карта «Просто кредитная» Masterсard Standard</a>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="l-content-row result-main-features clearfix">' +
                '<ul class="card-info-list">' +
                '<li class="card-info-list__item">' +
                '<span class="card-info-list__icon card-info-list__icon--percent"></span>' +
                '<span class="digits bank-product__txt">'+ rate +'</span>' +
                '<span class="dimmed bank-product__ref"> ставка по кредиту в год</span>' +
                '</li>' +
                '<li class="card-info-list__item">' +
                '<span class="card-info-list__icon card-info-list__icon--calendar"></span>' +
                '<span class="digits bank-product__txt">до 50 дней</span>' +
                '<span class="dimmed bank-product__ref"> льготный период</span>' +
                '</li>' +
                '<li class="card-info-list__item">' +
                '<span class="card-info-list__icon card-info-list__icon--bag"></span>' +
                '<span class="digits bank-product__txt">до 300&nbsp;000 ' +
                '<span class="rouble">' +
                '<span class="rouble__default">руб.</span>' +
                '</span>' +
                '</span>' +
                '<span class="dimmed bank-product__ref"> кредитный лимит</span>' +
                '</li>' +
                '<li class="card-info-list__item">' +
                '<span class="card-info-list__icon card-info-list__icon--price"></span>' +
                '<span class="digits bank-product__txt">бесплатно</span>' +
                '<span class="dimmed bank-product__ref"> стоимость обслуживания</span>' +
                '</li>' +
                '</ul>' +
                '</div>' +
                '<div class="result-card-btn-container bank-product__btn">' +
                '<a href="https://sravni.go2cloud.org/aff_c?offer_id=75&amp;aff_id=2&amp;aff_sub=893580847.1527081166&amp;aff_sub2=(not set)/~/(not set)/~/(not set)/~/(not set)/~/Moscow/~/Moscow/~/kredity%2Fpodbor-onlajn%2F&amp;aff_sub3=&amp;aff_sub4=MasterCardStandardprosto-kreditnaja&amp;aff_sub5=credcard&amp;source=search" class="ui-button ui-button--green" target="_blank" rel="noopener noreferrer">Перейти</a>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="bank-product__lic bank-product__lic--pos-bottom">' +
                '<div class="license-text ">' +
                '<span>Лиц. № </span><span>2557</span>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="result-card-mobile-btn-container">' +
                '<a href="https://sravni.go2cloud.org/aff_c?offer_id=75&amp;aff_id=2&amp;aff_sub=893580847.1527081166&amp;aff_sub2=(not set)/~/(not set)/~/(not set)/~/(not set)/~/Moscow/~/Moscow/~/kredity%2Fpodbor-onlajn%2F&amp;aff_sub3=&amp;aff_sub4=MasterCardStandardprosto-kreditnaja&amp;aff_sub5=credcard&amp;source=search" class="ui-button ui-button--green ui-button--mobile" target="_blank" rel="noopener noreferrer">Перейти</a>' +
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
    table = table + "</ul>";
    document.getElementById("list_bank").innerHTML = table;
}
