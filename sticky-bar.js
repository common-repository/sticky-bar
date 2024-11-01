jQuery(document).ready(function($){
    "use strict";

    //Select the sticky bar
    var WPATI_Bar = $("#wpati_sticky_bar");

    //wait until openningDelay pass
    setTimeout(function(){
        //check for openning animation
        if(openningAnimation == 'fade'){
            WPATI_Bar.fadeIn("normal");
        } else if (openningAnimation == 'without') {
            WPATI_Bar.show();
        } else if (openningAnimation == 'slide') {
            WPATI_Bar.slideDown("normal");
        } else {
            WPATI_Bar.show();
        }
    }, (openningDelay * 1000));

    //Add event for closing button
    $(".wsb-close-bar").click(function(e){
        e.preventDefault();

        //check for closing animation
        if(closingAnimation == 'fade'){
            WPATI_Bar.fadeOut("normal");
        } else if (closingAnimation == 'without') {
            WPATI_Bar.hide();
        } else if (closingAnimation == 'slide') {
            WPATI_Bar.slideUp("normal");
        } else {
            WPATI_Bar.hide();
        }

        //check for after close behaviour
        if(afterClose == 'hide'){
            var date = new Date();
            date.setTime(date.getTime() + (afterCloseDays*24*60*60*1000));
            var expire = date.toUTCString();
            document.cookie = "wpati_show=false; expires="+expire;
        }
    });
});
