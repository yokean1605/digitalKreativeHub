
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../bootstrap');
require('../plugins');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

$(document).ready(function(){
	
	// to top button
	$(window).scroll(function() {
	    if ($(this).scrollTop() > 1000) {
	        $('#toTop').fadeIn(500);
	    } else {
	        $('#toTop').fadeOut(500);
	    }
	});

	$("#toTop").click(function() {
	    $("html, body").animate({scrollTop: 0}, 1200);
	    return false;
	 });

	// clone nav navbar for scroll down
	var $nav 	= $("#menu");
		$clone	= $nav.before($nav.clone(true).addClass("clone"));
	$(window).on("scroll", function() {
		var fromTop = $(window).scrollTop();
		$("body").toggleClass("down", (fromTop > 650));
	});

	// no -fixe class in page single post
	// $("#menu").not(document.getElementByClass("clone")).css("background-color", "red");
});


// scroll down show icon  scrollReveral
window.sr = ScrollReveal();
sr.reveal('.sr-icons', {
	duration: 500,
	origin: 'top',
	delay: 0,

}, 200);


// klik scroll smooth
// $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
// $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
$('a.js-scroll-trigger[href*="#"]:not([href="#"]').on('click', function() {
	if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	  var target = $(this.hash);
	  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	  console.log("taget", target);
	  if (target.length) {
	    $('html, body').animate({
	      scrollTop: (target.offset().top - 56)
	    }, 1000);
	    return false;
	  }
	}
});


//Closes responsive menu when a scroll trigger link is clicked
$('.js-scroll-trigger').click(function() {
	$('.navbar-collapse').collapse('hide');
});

// Activate scrollspy to add active class to navbar items on scroll
$('body').scrollspy({
	target: '#menu',
	offset: 88
});


