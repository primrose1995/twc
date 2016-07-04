$(function() {
    var $form_inputs = $('form input');
    var $rainbow_and_border = $('.rain, .border');
    /* Used to provide loping animations in fallback mode */
    $form_inputs.bind('focus', function() {
        $rainbow_and_border.addClass('end').removeClass('unfocus start');
    });
    $form_inputs.bind('blur', function() {
        $rainbow_and_border.addClass('unfocus start').removeClass('end');
    });
    $form_inputs.first().delay(800).queue(function() {
        $(this).focus();
    });
});

$(function() {
    // run the currently selected effect
    function runEffect() {
        // get effect type from
        var selectedEffect = $("#effectTypes").val();

        // most effect types need no options passed by default
        var options = {};
        // some effects have required parameters


        // run the effect
        $("#effect").effect(selectedEffect, options, 500, callback);
    }
    ;

    // callback function to bring a hidden box back
    function callback() {
        setTimeout(function() {
            $("#effect").removeAttr("style").hide().fadeIn();
        }, 1000);
    }
    ;

    function MakeRequest() {
        var xmlHttp = getXMLHttp();
        var user = document.LoginForm.user.value;
        var pass = document.LoginForm.password.value;

        xmlHttp.open("GET", "./LoginController.php?action=connectAccount&user=" + user + "&pass=" + pass, true);
        xmlHttp.send(null);

        xmlHttp.onreadystatechange = function() {
            if (xmlHttp.readyState == 4) {
                HandleResponse(xmlHttp.responseText);
            }
        }
    }

    function getXMLHttp() {
        var xmlHttp;

        try {                      //Firefox, Opera 8.0+, Safari
            xmlHttp = new XMLHttpRequest();
        } catch (e) {                //Internet Explorer
            try {
                xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    alert("Your browser does not support AJAX!")
                    return false;
                }
            }
        }
        return xmlHttp;
    }


    function HandleResponse(response) {
        if (response == 'successful'){
            document.all.effectTypes.value="bounce";
            runEffect();
            setTimeout("window.location.href='../Main/MainController.php?action=ShowMainPage'",1000);
        }
        else
            runEffect();
    }

    // set effect from select menu value
    $("#loginButton").click(function() {
        MakeRequest();
    });

});
$(function(){
    $("#user").keyup(function(event){
        if(event.keyCode == 13){
            $("#button").click();
        }
    })
});

$(function(){
    $("#pass").keyup(function(event){
        if(event.keyCode == 13){
            $("#button").click();
        }
    })
});

function ShowSignUpPage(){
    location = "./LoginController.php?action=ShowSignUpPage";
}