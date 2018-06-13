$(function(){  

    $(document.body).on("keyup","#password",function(){
        $.get("jquery/passajax/get.php",{
            password:$(this).val()
        },function(data){
			$("#pass_status").html(data);
        });
        
    });
});  