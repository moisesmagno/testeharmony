$(document).ready(function(){
    
    //EXIBE E OCULTA OS LINKS DOS MENU RESPONSIVO. 
    $("#ocultar").click(function(event){
      event.preventDefault();
      $("#capaefectos").hide("slow");
      $( ".bt_ocultar" ).removeClass( "bt_ocultar_block", 1000);
      $( ".bt_mostrar" ).removeClass( "bt_mostrar_none", 1000);
    });

    $("#mostrar").click(function(event){
      event.preventDefault();
      $("#capaefectos").show(500);
      $( ".bt_mostrar" ).addClass( "bt_mostrar_none", 1000);
      $( ".bt_ocultar" ).addClass( "bt_ocultar_block", 1000);
    });//FIM - EXIBE E OCULTA OS LINKS DOS MENU RESPONSIVO. 
    
    
    //LINKS DO SAIBA MAIS DESKTOP
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
    
    //Links do saiba mais responsivo
    $('.accordion_link_resp1').click(function(){
        $(this).parent().find('div.accordion1').slideToggle("slow");
    });
    $('.accordion_link_resp2').click(function(){
        $(this).parent().find('div.accordion2').slideToggle("slow");
    });
    $('.accordion_link_resp3').click(function(){
        $(this).parent().find('div.accordion3').slideToggle("slow");
    });
    $('.accordion_link_resp4').click(function(){
        $(this).parent().find('div.accordion4').slideToggle("slow");
    });
    $('.accordion_link_resp5').click(function(){
        $(this).parent().find('div.accordion5').slideToggle("slow");
    });
    $('.accordion_link_resp6').click(function(){
        $(this).parent().find('div.accordion6').slideToggle("slow");
    });
    $('.accordion_link_resp7').click(function(){
        $(this).parent().find('div.accordion7').slideToggle("slow");
    });
});

