
/* SLIDE TO UNLOCK */

    $(function() {
        $("#unlock .drag").draggable({
            axis: 'x',
            containment: 'parent',
            drag: function(event, ui) {

                $('#unlock .content .drop').addClass('active');

                if (ui.position.left > 105) {
                    
                    $('#unlock .content .drop').addClass('hover');
                    
                }

            },
            stop: function(event, ui) {
                if (ui.position.left < 105) {
                    $(this).animate({
                        left: 0
                    })
                    $('#unlock .content .drop').removeClass('hover');
                    $('#unlock .content .drop').removeClass('active');
                    
                } else {
                    $(this).animate({
                        left: 0 
                    })
                    $('#unlock .content .drop').removeClass('hover');
                    $('#unlock .content .drop').removeClass('active');
                    
                    // // UNLOCK
                    // $('#unlock').addClass('unlock');
                    // $('#home').addClass('unlock');
                    $('html, body').animate({
                        scrollTop: $("#sobre").offset().top
                    }, 2000);                    

                }
            }
        });
    });




    $(function() {
        $("#unlock2 .drag").draggable({
            axis: 'x',
            containment: 'parent',
            drag: function(event, ui) {

                $('#unlock2 .content .drop').addClass('active');

                if (ui.position.left > 105) {
                    
                    $('#unlock2 .content .drop').addClass('hover');
                    
                }

            },
            stop: function(event, ui) {
                if (ui.position.left < 105) {
                    $(this).animate({
                        left: 0
                    })
                    $('#unlock2 .content .drop').removeClass('hover');
                    $('#unlock2 .content .drop').removeClass('active');
                    
                } else {
                    $(this).animate({
                        left: 0 
                    })
                    $('#unlock2 .content .drop').removeClass('hover');
                    $('#unlock2 .content .drop').removeClass('active');
                    
                    window.location.href = "http://sh-pro30.teste.website/~mciadi12/#sobre";               

                }
            }
        });
    });    

/* END SLIDE TO UNLOCK */

// $('.restart').click(function(){
//  $('#unlock').removeClass('unlock');
//     $('#home').removeClass('unlock');
// })







    if (window.matchMedia("(min-width:400px)").matches) {
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 390 ) { // check if user scrolled more than 50 from top of the browser 
          // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
          $(".home nav").addClass("bg-black");
          $(".page-id-325 nav").addClass("bg-black");







        } else {


        $(".home nav").removeClass("bg-black");
        $(".page-id-325 nav").removeClass("bg-black");




        }
      });
    });}





     $('.link-full[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
      targetOffset = $(id).offset().top;
      
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});  


     $('.botao a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
      targetOffset = $(id).offset().top;
      
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});   

      $('.links a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
      targetOffset = $(id).offset().top;
      
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});       



      $('.nav-link[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
      targetOffset = $(id).offset().top;
      
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});       

 




// timeline

$(window).on("load", function() {
  var dateWidth = $(".date").width(),
    activeDate = 0,
    noDates = $(".date").length;
  
  function changeDate(a) {
    if (a < 0) {
      activeDate = 0;
      return;
    }

    if (a > noDates - 1) {
      activeDate = noDates - 1;
      return;
    }

    $(".date")
      .removeClass("active sibling");
    
    $(".date:nth-child(" + (a + 1) + ")")
      .addClass("active");

    $(".date.active")
      .prev("div")
      .addClass("sibling");

    $(".dates-wrap").css(
      "transform",
      "translateX(" + -dateWidth * a + "px)"
    );
  }
  
  $(".date").on('click', function(){
     var chosen = $(this).index();
    
    if (chosen === activeDate) {
      return;
    }
    
    activeDate = chosen;
    changeDate(activeDate);
  });

  $(".controls").on("click", function() {
    var direction = parseInt($(this).attr("data-direction"), 10);

    activeDate += direction;  
    changeDate(activeDate);

  });
});



$(document).ready(function(){
  $("#categoria-btn").click(function(){
    $(".categorias").toggleClass("aparece");
     $(this).toggleClass("rodar");
  });
});

$('.link-full').click (function(){
  $('video').trigger('play');
  $('#menu2').toggleClass('active');
  $('nav.navbar').toggleClass('ativo');
  $('#menu2').toggleClass('open')

   $('body').toggleClass('fixar-body');
  $('.menu-pri').toggleClass('transp');  
  setTimeout(function() {
      $(".bullet").toggleClass('diminui');
  },600);   
  setTimeout(function() {
      $(".x").toggleClass('aumentar');
  },500);  
  setTimeout(function() {
      $(".ul").toggleClass('subir-ul');
  },600);  
});
$('.toggle-menu').click (function(){
  $('video').trigger('play');
  $('#menu2').toggleClass('active');
  $('nav.navbar').toggleClass('ativo');
  $('#menu2').toggleClass('open')

   $('body').toggleClass('fixar-body');
  $('.menu-pri').toggleClass('transp');  
  setTimeout(function() {
      $(".bullet").toggleClass('diminui');
  },600);   
  setTimeout(function() {
      $(".x").toggleClass('aumentar');
  },500);  
  setTimeout(function() {
      $(".ul").toggleClass('subir-ul');
  },600);         
});





// projetos





