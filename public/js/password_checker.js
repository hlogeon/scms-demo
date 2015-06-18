/**
 * Created by hlogeon on 6/6/15.
 */
$(document).ready(function(){
    var password = $('#password');
    password.keyup(function(){
        var re = /[0-9]/;
        var numeric = $('#numeric');
        var lowercase = $("#lowercase");
        var uppercase = $("#uppercase");
        var minLength = $("#length");
        if(!re.test(password.val())) {
            numeric.addClass('wrong');
            password.focus();
        } else{
            numeric.removeClass('wrong');
        }
        re = /[a-z]/;
        if(!re.test(password.val())) {
            lowercase.addClass("wrong");
            password.focus();
        } else{
            lowercase.removeClass("wrong");
        }
        re = /[A-Z]/;
        if(!re.test(password.val())) {
            uppercase.addClass('wrong');
            password.focus();
        } else{
            uppercase.removeClass('wrong');
        }
        if(password.val().length < 8){
            minLength.addClass("wrong");
        } else{
            minLength.removeClass("wrong");
        }
        return true;
    });
});
