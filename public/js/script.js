$(document).ready(function(){
    $(".dropdown-menu a").click(function(){
        var selected_dome_id = $(this).attr("data-dome-id");
        $.ajax({
            url: "get_dome_data.php",
            method: "POST",
            data: { dome_id : selected_dome_id },
            success: function(response){
                $(".btn.btn-success.dropdown-toggle").html(response);
            }
        });
    });
});