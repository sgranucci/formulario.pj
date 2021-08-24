  <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>


  <script>
  AOS.init();
  </script>
  <script>
  $('header .container .open_menu').click(function() {
    $('header .container nav').css('left', '0');
  });

  $('header .container .close_menu').click(function() {
    $('header .container nav').css('left', '-100%');
  });

  
  </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
  $(".slider").slick({
    infinite: true,
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $('#ver-flujo').click(function() {
    $('.overlay-modal').css('display', 'flex');
  });

  $('.overlay-modal .modal button').click(function() {
    $('.overlay-modal').css('display', 'none');
  });
  </script>
  <script>
  $(document).ready(function() {
    let normal = ["icon1-mod2-home.png", "icon-home2.png", "icon2-mod2-cedears.png", "icon-home4.png",
      "icon2-mod2-home.png", "icon4-mod2-cedears.png", "icon-home7.png", "icon3-mod2-home.png",
      "icon4-mod2-acciones.png"
    ];

    let active = ["icon1-active-mod2-home.png", "icon-active-home2.png", "icon2-active-mod2-cedears.png",
      "icon-active-home4.png",
      "icon2-active-mod2-home.png", "icon4-active-mod2-cedears.png", "icon-active-home7.png",
      "icon3-active-mod2-home.png",
      "icon4-active-mod2-acciones.png"
    ];

    $('.home-mod2 ul li').each(function() {
      let li = $(this);

      $(li).hover(
        function() {
          let pos = $(this).attr('id').slice(-1);
          $(this).find('.icon img').attr("src", "https://www.sailinginversiones.com/images/" + active[pos]);
        },
        function() {
          if (!$(this).hasClass('active')) {
            let pos = $(this).attr('id').slice(-1);
            $(this).find('.icon img').attr("src", "https://www.sailinginversiones.com/images/" + normal[pos]);
          }
        }
      );

      // $(this).click(function() {
      //   $('.home-mod2 ul li').removeClass('active');
      //   $(li).addClass('active');

      //   $('.home-mod2 ul li').each(function(index) {
      //     $(this).find('.icon img').attr("src", "https://www.sailinginversiones.com/images/" + normal[index]);
      //   })
      //   let pos = $(this).attr('id').slice(-1);
      //   $(this).find('.icon img').attr("src", "https://www.sailinginversiones.com/images/" + active[pos]);
      // });
    })
  });
  </script>
  