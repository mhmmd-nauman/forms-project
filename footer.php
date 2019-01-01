<?php include 'partials/gold.php'; ?>
<script type="text/javascript">
$(document).ready(function(){
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