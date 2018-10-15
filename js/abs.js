function CalcWidth() {

    var $workswidth = jQuery(".works").outerWidth();
    var $screenwidth = jQuery(window).width();
    
    var $scroll1width = $screenwidth*2+($workswidth)+250-570-3;

    var $left = jQuery(".superior").position();

    console.log($workswidth);    
    console.log($screenwidth);    
    console.log($scroll1width);
    console.log(jQuery(".superior").position().left);

    if ($screenwidth>=768) {
         jQuery(".superior").css({left:($scroll1width)});
         jQuery(".testimonial").css({left:($scroll1width)});
         jQuery(".cert").css({left:($scroll1width+$screenwidth)});
         jQuery(".map").css({left:($scroll1width+$screenwidth)});
         jQuery(".paper").css({left:($scroll1width+$screenwidth*2)});
    } else {
        jQuery(".superior").css({left:0});
        jQuery(".testimonial").css({left:0});
        jQuery(".cert").css({left:0});
        jQuery(".map").css({left:0});
        jQuery(".paper").css({left:0});
        // jQuery(".testimonial").css({width:$screenwidth});
    }
}

jQuery(window).resize(function() {
    location.reload();
    CalcWidth();
} ); 

jQuery(function () {
    CalcWidth();
});

/*
var maxWidth  = jQuery('#scaleview').width();
var maxHeight = jQuery('#scaleview').height();

var windowWidth = jQuery(window).width();
var windowHeight = jQuery(window).height();

jQuery(window).resize(function(evt) {
    var $window = jQuery(window);
    var width = $window.width();
    var height = $window.height();
    var scale;

    // early exit
    if(width >= windowWidth && height >= windowHeight) {
        jQuery('#scaleview').css({'-webkit-transform': ''});
        jQuery('#scalewrap').css({ width: '', height: '' });
        return;
    }
    
    //scale = Math.min(width/maxWidth, height/maxHeight);
    scale = Math.min(width/windowWidth, height/windowHeight);
    
    jQuery('#scaleview').css({'-webkit-transform': 'scale(' + scale + ')'});
    jQuery('#scalewrap').css({ width: maxWidth * scale, height: maxHeight * scale });
});*/