    $(function(){
        $('#carrusel div:gt(0)').hide();
        setInterval(function(){
          $('#carrusel div:first-child').fadeOut(0)
             .next('div').fadeIn(1000)
             .end().appendTo('#carrusel');}, 4000);
    });
