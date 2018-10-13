jQuery(function () { 

    var $workswidth = jQuery(".works").width();
    var $screenwidth = jQuery(window).width();
    
    var $pagewidth = jQuery(".contacts").width();
    var $scroll1width = $screenwidth*2+($workswidth-$pagewidth)+681;
    //var $scroll1width = $pagewidth*2+$workswidth-370;//5556

    console.log($workswidth);
    console.log($screenwidth);
    console.log($pagewidth);
    console.log($scroll1width);

    //ScrollMagic

    var controller = new ScrollMagic.Controller();

    if ($screenwidth >= 768) {
        var scroll1 = new TimelineMax().to("#view1", 1,   {x: -$scroll1width});

        new ScrollMagic.Scene({
                triggerElement: "#wrap1",
                triggerHook: "onLeave",
                duration: "500%"
            })
            .setPin("#wrap1")
            .setTween(scroll1)
            .addTo(controller);

        var scroll2 = new TimelineMax().to("#view2", 1,   {x: -$screenwidth});
        new ScrollMagic.Scene({
                triggerElement: "#wrap2",
                triggerHook: "onLeave",
                duration: "500%"
            })
            .setPin("#wrap2")
            .setTween(scroll2)
            .addTo(controller);

        var scroll3 = new TimelineMax().to("#view3", 1,   {x: -$screenwidth});
        new ScrollMagic.Scene({
                triggerElement: "#wrap3",
                triggerHook: "onLeave",
                duration: "500%"
            })
            .setPin("#wrap3")
            .setTween(scroll3)
            .addTo(controller);
        } else {
            
        }

    
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