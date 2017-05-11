$(function () {
    $(document).on("keyup", "input#userName", function () {

        $('.errors').html('');
    });
    $(document).on("keyup", "input#password", function () {
 $('.errors').html('');

    });
 

});
		$(function () {

    $("#login_button").click(function () {
        
var data = $("form#login-form").serialize();
var username = $("#userName").val();
 var password = $("#password").val();
 if (username == '')
        {
            $('#errors').html('Enter UserName');
            $("#userName").focus();

            return false;
        }

        if (password == '')
        {
            $('#errors').html('Enter your password');
            $("#password").focus();

            return false;
        }
        else{
          
$.ajax({
type : 'POST',
url : 'login_check.php',
data : data,
beforeSend: function(){
$("#errors").fadeOut();
$("#login_button").html('Please wait..');
},
success : function(response){

if(response==1){
$("#login_button").html('Signing In ...');
 window.location.href = "index.php";
} 

else{
$("#login_button").html('Sign in');
$("#usererror").html(response);
}


}
});
}
return false;
});
});