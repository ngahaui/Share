$(function () {
  //popover option
  $("#a-popover").popover({
    title:$('.popover-title').html(),
    content: $('.popover-content').html(),
    placement: 'right',
    trigger: "hover",
    delay: { "show": 200, "hide": 100 },
    html: true
  });
  $("#b-popover").popover({
    title:$('.popover-title').html(),
    content: $('.popover-content').html(),
    placement: 'right',
    trigger: "hover",
    delay: { "show": 200, "hide": 100 },
    html: true
  });
    
});

/**/
jQuery(document).ready(function($) {
 
  $(".owl-item").owlCarousel({
    items:4,
    autoPlay:true,
    nav:true,
    dots:true,
    pagination: true,
    
    margin:10,
    itemsDesktop : [1000,3], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,3], // betweem 900px and 601px
    itemsTablet: [600,3], //2 items between 600 and 0
    itemsMobile :[400,1] // itemsMobile disabled - inherit from itemsTablet option
    
  });
});
function scrolltop() 
{
    var id_button = '#go-to-top';

    // Kéo xuống khoảng cách 220px thì xuất hiện button
    var offset = 220;

    // THời gian di trượt là 0.5 giây
    var duration = 500;

    // Thêm vào sự kiện scroll của window, nghĩa là lúc trượt sẽ
    // kiểm tra sự ẩn hiện của button
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery(id_button).fadeIn(duration);
        } else {
            jQuery(id_button).fadeOut(duration);
        }
    });

    // Thêm sự kiện click vào button để khi click là trượt lên top
    jQuery(id_button).click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    });
}

// Thực hiện
$(document).ready(function(){
    scrolltop();
});

