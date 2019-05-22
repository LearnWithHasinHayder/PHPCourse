;(function($){
    $(document).ready(function(){
        $("#login").on('click',function(){
            $("#form01 h3").html("Login");
            $("#action").val("login");
        });

        $("#register").on('click',function(){
            $("#form01 h3").html("Register");
            $("#action").val("register");
        });
    })
})(jQuery);