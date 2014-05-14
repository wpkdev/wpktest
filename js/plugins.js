/*global jQuery */
/*jshint browser:true */
/*!
* FitVids 1.1
*
* Copyright 2013, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
*/

(function( $ ){

  "use strict";

  $.fn.fitVids = function( options ) {
    var settings = {
      customSelector: null
    };

    if(!document.getElementById('fit-vids-style')) {
      // appendStyles: https://github.com/toddmotto/fluidvids/blob/master/dist/fluidvids.js
      var head = document.head || document.getElementsByTagName('head')[0];
      var css = '.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}';
      var div = document.createElement('div');
      div.innerHTML = '<p>x</p><style id="fit-vids-style">' + css + '</style>';
      head.appendChild(div.childNodes[1]);
    }

    if ( options ) {
      $.extend( settings, options );
    }

    return this.each(function(){
      var selectors = [
        "iframe[src*='player.vimeo.com']",
        "iframe[src*='youtube.com']",
        "iframe[src*='youtube-nocookie.com']",
        "iframe[src*='kickstarter.com'][src*='video.html']",
        "object",
        "embed"
      ];

      if (settings.customSelector) {
        selectors.push(settings.customSelector);
      }

      var $allVideos = $(this).find(selectors.join(','));
      $allVideos = $allVideos.not("object object"); // SwfObj conflict patch

      $allVideos.each(function(){
        var $this = $(this);
        if (this.tagName.toLowerCase() === 'embed' && $this.parent('object').length || $this.parent('.fluid-width-video-wrapper').length) { return; }
        var height = ( this.tagName.toLowerCase() === 'object' || ($this.attr('height') && !isNaN(parseInt($this.attr('height'), 10))) ) ? parseInt($this.attr('height'), 10) : $this.height(),
            width = !isNaN(parseInt($this.attr('width'), 10)) ? parseInt($this.attr('width'), 10) : $this.width(),
            aspectRatio = height / width;
        if(!$this.attr('id')){
          var videoID = 'fitvid' + Math.floor(Math.random()*999999);
          $this.attr('id', videoID);
        }
        $this.wrap('<div class="fluid-width-video-wrapper"></div>').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100)+"%");
        $this.removeAttr('height').removeAttr('width');
      });
    });
  };
// Works with either jQuery or Zepto
})( window.jQuery || window.Zepto );


/* Fittext */
/*global jQuery */
/*!
* FitText.js 1.2
*
* Copyright 2011, Dave Rupert http://daverupert.com
* Released under the WTFPL license
* http://sam.zoy.org/wtfpl/
*
* Date: Thu May 05 14:23:00 2011 -0600
*/

(function( $ ){

  $.fn.fitText = function( kompressor, options ) {

    // Setup options
    var compressor = kompressor || 1,
        settings = $.extend({
          'minFontSize' : Number.NEGATIVE_INFINITY,
          'maxFontSize' : Number.POSITIVE_INFINITY
        }, options);

    return this.each(function(){

      // Store the object
      var $this = $(this);

      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };

      // Call once to set.
      resizer();

      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize.fittext orientationchange.fittext', resizer);

    });

  };

})( jQuery );


/* Popeasy */
(function(e){e.fn.modal=function(t){function o(){e("."+t.videoClass).attr("src",t.video);r.hide();i.css({top:e(window).height()/2-i.outerHeight()/2+e(window).scrollTop(),left:e(window).width()/2-i.outerWidth()/2+e(window).scrollLeft()});if(s===false){n.css({opacity:t.opacity,backgroundColor:"#"+t.background});n[t.animationEffect](t.animationSpeed);i.delay(t.animationSpeed)[t.animationEffect](t.animationSpeed)}else{i.show()}s=true}function u(){r.stop(true).animate({top:e(window).height()/2-r.outerHeight()/2+e(window).scrollTop(),left:e(window).width()/2-r.outerWidth()/2+e(window).scrollLeft()},t.moveModalSpeed)}function a(){e("."+t.videoClass).attr("src","");s=false;r.fadeOut(100,function(){if(t.animationEffect==="slideDown"){n.slideUp()}else if(t.animationEffect==="fadeIn"){n.fadeOut()}});return false}t=e.extend({trigger:".modalLink",olay:"div.overlay",modals:"div.modal",animationEffect:"fadeIn",animationSpeed:400,moveModalSpeed:"slow",background:"000",opacity:.8,openOnLoad:false,docClose:true,closeByEscape:true,moveOnScroll:true,resizeWindow:true,video:"",videoClass:"video",close:".closeBtn"},t);var n=e(t.olay);var r=e(t.modals);var i;var s=false;if(t.animationEffect==="fadein"){t.animationEffect="fadeIn"}if(t.animationEffect==="slidedown"){t.animationEffect="slideDown"}n.css({opacity:0});if(t.openOnLoad){o()}else{n.hide();r.hide()}e(t.trigger).bind("click",function(t){t.preventDefault();if(e(".modalLink").length>1){getModal=e(this).attr("href");i=e(getModal)}else{i=e(".modal")}o()});if(t.docClose){n.bind("click",a)}e(t.close).bind("click",a);if(t.closeByEscape){e(window).bind("keyup",function(e){if(e.which===27){a()}})}if(t.resizeWindow){e(window).bind("resize",u)}else{return false}if(t.moveOnScroll){e(window).bind("scroll",u)}else{return false}}})(jQuery)