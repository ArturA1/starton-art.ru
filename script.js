// Инициализируем Swiper
new Swiper('.image-slider',{
	loop: true,
    autoHeight: true,
    pagination: {
    	el: '.swiper-pagination',
    	clickable: true,
  	},
    breakpoints: {
        1120: {
            slidesPerView: 2,
            centeredSlides: true,
            spaceBetween: 20,
        },
        691: {
            slidesPerView: 1,
            centeredSlides: true,
            spaceBetween: 10,
        },
    },
	navigation: {
		prevEl: '.swiper-button-prev',
        nextEl: '.swiper-button-next',
    },
});

function countBox1(value, n) {
    document.getElementsByClassName('countBoxm'+n)[0].innerHTML = value-1;
    return document.getElementsByClassName('countBoxp'+n)[0].value = value-1;
}
function countBox2(value, n) {
    document.getElementsByClassName('countBoxm'+n)[0].innerHTML = value+1;
    return document.getElementsByClassName('countBoxp'+n)[0].value = value+1;
}

function countRab1(value) {
    document.getElementById('food_price_t1').innerHTML = value;
    return document.getElementById('food_price_b1').value = value;
}
function countRab2(value) {
    document.getElementById('food_price_t2').innerHTML = value;
    return document.getElementById('food_price_b2').value = value;
}
function countRab3(value) {
    document.getElementById('food_price_t3').innerHTML = value;
    return document.getElementById('food_price_b3').value = value;
}
function countRab4(value) {
    document.getElementById('food_price_t4').innerHTML = value;
    return document.getElementById('food_price_b4').value = value;
}
function countRab5(value) {
    document.getElementById('food_price_t5').innerHTML = value;
    return document.getElementById('food_price_b5').value = value;
}
function countRab6(value) {
    document.getElementById('food_price_t6').innerHTML = value;
    return document.getElementById('food_price_b6').value = value;
}
function countRab7(value) {
    document.getElementById('food_price_t7').innerHTML = value;
    return document.getElementById('food_price_b7').value = value;
}
function countRab8(value) {
    document.getElementById('food_price_t8').innerHTML = value;
    return document.getElementById('food_price_b8').value = value;
}
function countRab9(value) {
    document.getElementById('food_price_t9').innerHTML = value;
    return document.getElementById('food_price_b9').value = value;
}
function countRab10(value) {
    document.getElementById('food_price_t10').innerHTML = value;
    return document.getElementById('food_price_b10').value = value;
}
function countRab11(value) {
    document.getElementById('food_price_t11').innerHTML = value;
    return document.getElementById('food_price_b11').value = value;
}
function countRab12(value) {
    document.getElementById('food_price_t12').innerHTML = value;
    return document.getElementById('food_price_b12').value = value;
}
function countRab13(value) {
    document.getElementById('food_price_t13').innerHTML = value;
    return document.getElementById('food_price_b13').value = value;
}
function countRab14(value) {
    document.getElementById('food_price_t14').innerHTML = value;
    return document.getElementById('food_price_b14').value = value;
}
function countRab15(value) {
    document.getElementById('food_price_t15').innerHTML = value;
    return document.getElementById('food_price_b15').value = value;
}
function countRab16(value) {
    document.getElementById('food_price_t16').innerHTML = value;
    return document.getElementById('food_price_b16').value = value;
}
function countRab17(value) {
    document.getElementById('food_price_t17').innerHTML = value;
    return document.getElementById('food_price_b17').value = value;
}
function countRab18(value) {
    document.getElementById('food_price_t18').innerHTML = value;
    return document.getElementById('food_price_b18').value = value;
}
function countRab19(value) {
    document.getElementById('food_price_t19').innerHTML = value;
    return document.getElementById('food_price_b19').value = value;
}
function countRab20(value) {
    document.getElementById('food_price_t20').innerHTML = value;
    return document.getElementById('food_price_b20').value = value;
}
function countRab21(value) {
    document.getElementById('food_price_t21').innerHTML = value;
    return document.getElementById('food_price_b21').value = value;
}
function countRab22(value) {
    document.getElementById('food_price_t22').innerHTML = value;
    return document.getElementById('food_price_b22').value = value;
}
function countRab23(value) {
    document.getElementById('food_price_t23').innerHTML = value;
    return document.getElementById('food_price_b23').value = value;
}
function countRab24(value) {
    document.getElementById('food_price_t24').innerHTML = value;
    return document.getElementById('food_price_b24').value = value;
}