$(document).ready(function() {

    
    function Emailvalidation(isEmail) {
    var partten = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (partten.test(isEmail)) {
        return true;
    } else {
        return false;
    }
}

    $(document).on('ready',function() {
            $(document).on('click','#submit',function() {

            if ($("#name").val() == '') {
                
                $("#name-errormsg").html("Name is required");
                $("#name-errormsg").show();
                $('#submit').attr('disabled', true);
            
            
            } else{
                $('#submit').attr('disabled', false);
                $("#Fname-errormsg").hide();
            
            }

            if ($("#password").val() == '') {
                $("#password-errormsg").html("password is required");
                $("#password-errormsg").show();
                $("#submit").attr("disabled", true);
                } else {
                    $("#submit").attr("disabled", false);
                    $("#password-errormsg").hide();
                }
                if ($("#Email").val() == '') {
                    $("#Email-errormsg").html("Email is required");
                    $("#Email-errormsg").show();
                    $('#submit').attr('disabled', true);
                
                } 
                else{
                    
                    $("#Email-errormsg").hide();
                    $('#submit').attr('disabled', false);
                }
                $(document).focusout('#Email',function () {
                    var isEmail = $("#Email").val();
                    if ($.trim(isEmail).length == 0) {
                        $("Email-errormsg").html("Kindly enter valid email");
                        $("Email-errormsg").show();
                        $("submit").attr("disabled", true);
                
                    } else if (Emailvalidation(isEmail)){
                        $("Email-errormsg").hide();
                        $("submit").attr("disabled", false);
                
                
                    } 
                    else {
                        $("Email-errormsg").html("Invalid email");
                        $("Email-errormsg").show();
                        $("submit").attr("disabled", true);
                
                    }
                });
                if ($("#Phone").val() == '') {
                    $("#Phone-errormsg").html("Phone number is required");
                    $("#Phone-errormsg").show();
                    $('#submit').attr('disabled', true);
                    $('#submit').attr('disabled', true);
                
                } 
                else{
                    $("#Phone-errormsg").hide();
                    $('#submit').attr('disabled', false);
                }
                if ($("#addcheck").val() == '') {
                    $("#addcheck-errormsg").html("address is required");
                    $("#addcheck-errormsg").show();
                    $('#submit').attr('disabled', true);
                
                } 
                else{
                    $("#birthday-errormsg").hide();
                    $('#submit').attr('disabled', false);
                }
                if ($("#birthday").val() == '') {
                    $("#birthday-errormsg").html("birthday is required");
                    $("#birthday-errormsg").show();
                    $('#submit').attr('disabled', true);
                
                } 
                else{
                    $("#birthday-errormsg").hide();
                    $('#submit').attr('disabled', false);
                }

                $(document).on('#addcheck','click',function(){
                var checkbox = $("#addcheck").prop("checked");
                
                if (checkbox === true) {
                    $("#addrsline").css({"display": ""});
                }else{
                    $("#addcheck-errormsg").text("address is required");
                    $("#addrsline").css({"display": "none"});
                }
            });
            
            $(document).on('#addcheck','click',function(){
                var checkbox = $("#addcheck").prop("checked");
                
                if (checkbox === true) {
                    $("#addrsline").css({"display": ""});
                }else{
                    $("#addcheck-errormsg").text("address is required");
                    $("#addrsline").css({"display": "none"});
                }
            });
        });
    });
});