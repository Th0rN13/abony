let $workswidth 
let $screenwidth
let $screenheight
let $scrollwidth

let $paperheight
let $paperborderline
let $footerheight

function StartScrollMagic() {
    //ScrollMagic

    if ($screenheight < 999) {$bordery = 171;}
    else if ($screenheight < 1039) {$bordery = 221;}
    else $bordery = 275;

    let controller = new ScrollMagic.Controller();    

    const timeSlide = 20;
    const timeBeetwen = 1;
    const timeSlBeet = timeSlide + timeBeetwen;

    if ($screenwidth >= 768) {        
        let scroll = new TimelineMax()
            //contact
            .add(TweenMax.to("#view1", timeSlide,   {x: -$screenwidth, ease: Power3.easeInOut}))
            .add(TweenMax.to("#border-img", timeSlide,   {x: +$screenwidth-280, ease: Power3.easeInOut}), 0)
            .add(TweenMax.to("#view1", timeBeetwen,   {ease: Power3.easeInOut}))            
            //tank
            .add(TweenMax.to("#view1", timeSlide,   {x: -$screenwidth*2, ease: Power3.easeInOut}))
            .add(TweenMax.to("#border-img", timeSlide,   {x: +$screenwidth*2-280, ease: Power3.easeInOut}), timeSlBeet)
            .add(TweenMax.to("#view1", timeBeetwen,   {ease: Power3.easeInOut}))
            //works
            .add(TweenMax.to("#view1", timeSlide,   {x: -$scrollwidth, ease: Power3.easeInOut}))
            .add(TweenMax.to("#border-img", timeSlide,   {x: +$scrollwidth+290, width: 343, ease: Power3.easeInOut}), timeSlBeet*2) //cropwidth
            .add(TweenMax.to("#border-img img", timeSlide,   {left: -1054, ease: Power3.easeInOut}), timeSlBeet*2) //width diff, shift to right
            .add(TweenMax.to("#works-bg", timeSlide,   {x: +$workswidth-323, ease: Power3.easeInOut}), timeSlBeet*2) //fix bg
            .add(TweenMax.to("#view1", timeBeetwen,   {ease: Power3.easeInOut}))
            //superior
            .add(TweenMax.to("#view1", timeSlide,   {y: -$screenheight, ease: Power3.easeInOut}))
            .add(TweenMax.to("#border-img", timeSlide,   {y: $bordery, ease: Power3.easeInOut}), timeSlBeet*3) //move to bottom page
            .add(TweenMax.to("#view1", timeBeetwen,   {ease: Power3.easeInOut}))
            //testimonial
            .add(TweenMax.to("#view1", timeSlide,   {x: -$scrollwidth-$screenwidth, ease: Power3.easeInOut}))
            .add(TweenMax.to("#view1", timeBeetwen,   {ease: Power3.easeInOut}))
            //cert
            .add(TweenMax.to("#view1", timeSlide,   {y: -$screenheight*2, ease: Power3.easeInOut}))
            .add(TweenMax.to("#view1", timeBeetwen,   {ease: Power3.easeInOut}))
            //map
            .add(TweenMax.to("#view1", timeSlide,   {x: -$scrollwidth-$screenwidth*2, ease: Power3.easeInOut}))
            .add(TweenMax.to("#view1", timeBeetwen,   {ease: Power3.easeInOut}))
            //papers
            .add(TweenMax.to("#view1", timeSlide,   {y: -$screenheight*3, ease: Power3.easeInOut}))
            .add(TweenMax.to("#view1", timeBeetwen,   {y: -$screenheight*2-$paperheight-$footerheight, ease: Linear.easeInOut}))

        new ScrollMagic.Scene({
                triggerElement: "#wrap1",
                triggerHook: "onLeave",
                duration: "800%"
            })
            .setPin("#wrap1")
            .setTween(scroll)            
            .addTo(controller);

        } else {}

}

function CalcCoord() {
    //Some usable variables
    $workswidth = jQuery(".works").outerWidth();
    $screenwidth = jQuery(window).width();
    $screenheight = jQuery(window).height();
    $scrollwidth = $screenwidth*3+($workswidth-$screenwidth)-300-23;
    $paperheight = jQuery(".paper").outerHeight();        
    $footerheight = jQuery(".footer").outerHeight();

    //if Large Screen, then scroll magic, and setup positions depends on works width
    if ($screenwidth >= 768) {
        jQuery('.superior').css({left: $scrollwidth, top: $screenheight});
        jQuery('.testimonial').css({left: $scrollwidth+$screenwidth, top: $screenheight});
        jQuery('.cert').css({left: $scrollwidth+$screenwidth, top: $screenheight*2});
        jQuery('.map').css({left: $scrollwidth+$screenwidth*2, top: $screenheight*2});
        jQuery('.paper').css({left: $scrollwidth+$screenwidth*2, top: $screenheight*3});
        jQuery('.footer').css({left: $scrollwidth+$screenwidth*2, top: $screenheight*3+$paperheight});
    }     

    //Border line at last page (paper)            
    if (($screenheight > 849 ) && ($screenwidth > 1199)) {
        //padding for large screens (17% left and 7% top)
        $paperborderline = $screenwidth*0.17;
        jQuery(".paper-border-line").css({left:($paperborderline + 120)});
        jQuery(".paper-border-line").css({width:(681 - $paperborderline)});
        console.log('if: ', $paperborderline);
        if ($screenheight > 999 ) {
            $paperborderline = $screenwidth*0.07; 
        } else {
            //padding for <1000px 2% top)
            $paperborderline = $screenwidth*0.02; 
        }
        console.log('if: ', $paperborderline);       
    } else {        
        //padding for small screens (2% left and top)
        $paperborderline = $screenwidth*0.02;
        jQuery(".paper-border-line").css({left:($paperborderline + 120)});
    }
    jQuery(".paper-border-line").css({height:($paperborderline + 85)});
}

jQuery(window).resize(function() {
    // if Scrollmagic active then calc new Coords and Start 
    let $oldscreenwidth = $screenwidth;
    $screenwidth = jQuery(window).width();    
    CalcCoord();
    if ($screenwidth >= 768) {        
        location.reload();        
    } else {
        if($oldscreenwidth >= 768) {
            location.reload();
        }
    }
} ); 

jQuery(function () {
    CalcCoord();
    //Prevent map from scroll, close tranparent div if click at this
        //and open if click at any other
    jQuery("body").click(function(e) {                
        if(e.target.id === "map-transparent") {
            jQuery("#map-transparent").css({'display':'none'});
        } else {
            jQuery("#map-transparent").css({'display':'block'});
        }
    });
    StartScrollMagic();
});

