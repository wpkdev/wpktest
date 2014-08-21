
  <footer class="home">

    <h3>Volg Shot of Joy</h3>
    <div class="social-btns">
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" class="social-link"><span class="icon-facebook">Facebook</span></a>
      <a href="https://twitter.com/intent/tweet?text=Shot&nbsp;0f&nbsp;Joy&url=<?php echo get_permalink(); ?>&via=shotofjoynl&related=shotofjoynl" class="social-link"><span class="icon-twitter">Twitter</span></a>
			<span class="social-link"><span class="icon-pinterest"><a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark">Pinterest</a></span></span>
		</div>

    <ul>
      <li><a href="http://www.shotofjoy.nl/over-shot-of-joy/">Over Shot of Joy</a></li>
      <li><a href="http://www.shotofjoy.nl/privacy-beleid-statement-van-shot-of-joy/">Privacy Policy</a></li>
      <li><a href="http://www.shotofjoy.nl/algemene-voorwaarden/">Gebruiksvoorwaarden</a></li>
      <li><a href="http://www.shotofjoy.nl/contact/">Contact</a></li>
      <!--<li><a href="http://www.shotofjoy.nl/uitschrijven/">Abonnement opzeggen</a></li>-->
      <li><a href="http://www.shotofjoy.nl/nieuwsbrief/">Inschrijven nieuwsbrief</a></li>
    </ul>
  </footer>
</div>
</body>

<?php wp_footer(); ?>


<?php global $video_url; ?>


<script>

  //Default settings
  var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
  var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
  var isiDevice = /ipad|iphone|ipod/i.test(navigator.userAgent.toLowerCase());
  var isAndroid = /android/i.test(navigator.userAgent.toLowerCase());
  var window_width = $(window).width();
  var window_height = $(window).height();

  var html_element = '<a href="" class="go_to_page nav-act"><span>1</span></a>';
  var counter = 1;
  var init = 0;
  function set_page_height(){
    $('.page').each(function(index, item) {
      // SET THE HEIGHT OF A PAGE
      var page_height = $('.page-content', this).height();
      if(page_height > window_height){
        $(this).height(page_height+105);
      }

      //SET NAVIGATION ITEM
      if(init == 0){
        var html_element = '<a href="" class="go_to_page"><span>'+counter+'</span></a>';
        $('nav').append(html_element);
      }

      counter++;
    });

    init = 1;
  }

  set_page_height();


  /*******************************************
  *** LOAD BACKGROUND FOR DIFFERENT VIEWPORTS
  ********************************************/
  function load_bg_img(){


    $('.page').each(function(index, item) {
        var attr = $(this).attr('data-src');

        if (typeof attr !== 'undefined' && attr !== false) {
          if(window_width > 1024){
          res_img = $(this).attr('data-src');
        }else if(window_width < 481){
          res_img = $(this).attr('data-src-480');
        }else if(window_width < 769){
          res_img = $(this).attr('data-src-768');
        }else if(window_width < 1025){
          res_img = $(this).attr('data-src-1024');
        }

        $(this).css('background-image', 'url(' + res_img + ')');
      }

    });


    $('.big-image').each(function(index, item) {
        var attr = $(this).attr('data-src');

        if (typeof attr !== 'undefined' && attr !== false) {
          if(window_width > 1024){
          res_img = $(this).attr('data-src');
        }else if(window_width < 481){
          res_img = $(this).attr('data-src-480');
        }else if(window_width < 769){
          res_img = $(this).attr('data-src-768');
        }else if(window_width < 1025){
          res_img = $(this).attr('data-src-1024');
        }

        $(this).attr('src', res_img);
      }

    });



  }
  load_bg_img();



  function logo_position(){
    var new_alpha = 1-(($(window).scrollTop() * 0.25)/100);
    $(".scroll-indicator-box").css({ opacity: new_alpha });
  }




  $(window).on("resize", function(){
     load_bg_img();
     set_page_height();

  });
  $(window).scroll(function() {
    logo_position();

    if( !isiDevice && !isAndroid && !isiPhone && !isiPad ) {
      if(window_width > 1200){
        active_nav();

      }
    }
  });



  /*******************************************
  *** SOCIAL MEDIA POPUP
  ********************************************/
    $('.js-social-popup').click(function(e){
      var sTop = window.screen.height/2-(218);
      var sLeft = window.screen.width/2-(313);
      var win = window.open(this.href,'sharer','toolbar=0,status=0,resizable=0,location=0,width=626,height=256,top='+sTop+',left='+sLeft);
      e.preventDefault();
    });




  /*******************************************
  *** SHOW THE RIGHT NAVIGATION INDICATOR
  ********************************************/
   function active_nav(){
    var counter = 1;
    var activeelement = 1;
    var activeelementold = 1;
    $('.page').each(function(index, item) {

      if($(".page-"+counter).position().top  < ($(window).scrollTop())+100 ){
         $(".go_to_page").removeClass('nav-act');
         $(".go_to_page:nth-child("+counter+")").addClass('nav-act');
         activeelementold = activeelement;
         activeelement = counter;
      }
      counter++;
    });
  }
  active_nav();


  /*******************************************
  *** CLICK ON THE NAVIAGTION INDICATOR
  ********************************************/
  $(".go_to_page").click(function() {
    page = $("span",this).html();
    $('html, body').animate({
       scrollTop: $(".page-"+page).offset().top
    }, 1000, "swing");

    return false;
  });


  /* VERTALINGEN */
  $('.control-label').each(function(index, item) {
  html = $(this).html();

  if(html == 'Kies een gebruikersnaam'){
    $(this).html('E-mailadres');
  }
  if(html == 'Gebruikersnaam'){
    $(this).html('E-mailadres');
  }
  if(html == 'E-mailadres'){
    $(this).html('Herhaal e-mailadres');
  }
});

$('#loginform label').each(function(index, item) {
  html = $(this).html();

  if(html == 'Kies een gebruikersnaam'){
    $(this).html('E-mailadres');
  }
  if(html == 'Gebruikersnaam'){
    $(this).html('E-mailadres');
  }

});

if($('#login_right').html()  == 'Heeft u al een account?'){
  $('#login_right').html('Heb je al een account?');
}

$("#pronamic-pay-form input[type=submit]").attr('value','Lidmaatschap starten');
$("#pronamic-pay-form input[type=submit]").attr("disabled", "disabled");
$("#pronamic-pay-form input[type=submit]").css("background", "#cccccc");

$('#pronamic-pay-form img').hide();
$('#pronamic-pay-form').prepend('<p style="float:right;margin-top:-13px;"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/betaalmethode.jpg" /></p>');

$('#payment_checker').click(function(e){
  if($(this).is(':checked')){
       $("#pronamic-pay-form input[type=submit]").removeAttr("disabled");
       $("#pronamic-pay-form input[type=submit]").css("background", "#ff7271");
     }else{
       $("#pronamic-pay-form input[type=submit]").attr("disabled", "disabled");
       $("#pronamic-pay-form input[type=submit]").css("background", "#cccccc");
     }
});

// Zoekveld aan
$('.search-toggle').click( function() {
  $('header.home').toggleClass("searching");
  $(this).toggleClass("icon-search");
  $(this).toggleClass("icon-close");
});

// Menu knop mobile
$('header.home nav').bind( "click", toggleMenu);

function toggleMenu() {
  $('header.home').toggleClass("has-menu");
  // $(this).unbind( "click", toggleMenu);
}

</script>

<!-- <script src="js/jquery.fitvids.js"></script> -->
<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".page .page-content").fitVids();
  });
</script>


<div class="overlay"></div>
<div id="video-modal" class="modal">

    <a href="#" class="closeBtn">SLUIT VIDEO X</a>
  <div class="responsive-container">
    <iframe width="100%" height="" frameborder="0" class="video"></iframe> <!-- 853 x 480 -->
  </div>
</div>

<div class="pinterest-frame">
  <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
</div>

</html>
