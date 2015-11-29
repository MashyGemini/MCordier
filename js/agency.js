/*!
 * Start Bootstrap - Agency Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$(function() {

    var video = $('#showreel')[0];

    video.addEventListener('playing', function () {
        $('.vidTitle').fadeOut();
    });
    
    video.addEventListener('pause', function () {
        $('.vidTitle').fadeIn();
    });

});

$(function() {

    var video = $('#phantomVideo')[0];

    video.addEventListener('playing', function () {
        $('.portVidTitle').fadeOut();
    });
    
    video.addEventListener('pause', function () {
        $('.portVidTitle').fadeIn();
    });

});

$(".modal-close, .close-modal").click(function () {
    var video = $("#advert").attr("https://player.vimeo.com/video/147235549?color=ffffff");
    
    $("#advert").attr("src","");
    $("#advert").attr("src","https://player.vimeo.com/video/147235549?color=ffffff");
});

$(".modal-close, .close-modal").click(function () {
    var video = $("#phantom").attr("https://player.vimeo.com/video/147234059?color=ffffff");
    
    $("#phantom").attr("src","");
    $("#phantom").attr("src","https://player.vimeo.com/video/147234059?color=ffffff");
});

$(".modal-close, .close-modal").click(function () {
    var video = $("#ragnarok").attr("https://player.vimeo.com/video/147224884");
    
    $("#ragnarok").attr("src","");
    $("#ragnarok").attr("src","https://player.vimeo.com/video/147224884");
});
