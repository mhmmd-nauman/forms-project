<?php //include 'partials/gold.php'; ?>
<script type="text/javascript">
$(document).ready(function(){
 // OtherExpForm
   $("#OtherExpForm").on("submit", function(event) {
    event.preventDefault();

    $.ajax({
        url: "ajax/update_other_exp.php",
        type: "post",
        data: $(this).serialize(),
        success: function(d) {
            $('#display_message').html(d);
            $('.alert').removeClass("alert-danger");
            $('.alert').addClass("alert-success").show();
           
        }
    });

return ;
});
 
 
  $("#CollectibleForm").on("submit", function(event) {
    event.preventDefault();

    $.ajax({
        url: "ajax/update_collectables.php",
        type: "post",
        data: $(this).serialize(),
        success: function(d) {
            $('#display_message_collectable').html(d);
            $('.alert').removeClass("alert-danger");
            $('.alert').addClass("alert-success").show();
           
        }
    });

return ;
}); 
 //SpotPricesForm   
 $("#SpotPricesForm").on("submit", function(event) {
    event.preventDefault();

    $.ajax({
        url: "ajax/update_spot_prices.php",
        type: "post",
        data: $(this).serialize(),
        success: function(d) {
            $('#display_message').html(d);
            $('.alert').removeClass("alert-danger");
            $('.alert').addClass("alert-success").show();
            setInterval(function(){ $('.alert').hide() }, 10000);
        }
    });

return ;
});  
    
$("#admissionSettingForm").on("submit", function(event) {
            event.preventDefault();

            $.ajax({
                url: "ajax/update_gold.php",
                type: "post",
                data: $(this).serialize(),
                success: function(d) {
                    $('#display_message').html(d);
                    $('.alert').removeClass("alert-danger");
                    $('.alert').addClass("alert-success").show();
                    setInterval(function(){ $('.alert').hide() }, 10000);
                }
            });

            return ;
            });
} );
</script>