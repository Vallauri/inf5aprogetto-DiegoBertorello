$(document).ready(function(){
    $("#alertEmail").hide();
    $("#alertSubject").hide();
    $("#alertText").hide();
    $("#success").hide();
});


$("#send").on('click', function(){
    email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
    if($("#address").val().length == 0 || !email_regex.test($("#address").val())){
        $("#alertEmail").show();
        $("#alertSubject").hide();
        $("#alertText").hide();
    }else if($("#object").val().length == 0){
        $("#alertEmail").hide();
        $("#alertSubject").show();
        $("#alertText").hide();
    }else if($("#email").val().length == 0){
        $("#alertEmail").hide();
        $("#alertSubject").hide();
        $("#alertText").show();
    }else{
        $.ajax({
            type: "POST",
            url: './sendEmail.php',
            data:{
                address: $("#address").val(),
                subject: $("#object").val(),
                text: $("#email").val()
            },
            success: function(data){
                $("#alertEmail").hide();
                $("#alertSubject").hide();
                $("#alertText").hide();
                $("#success").show();
                $("#address").val('');
                $("#object").val('');
                $("#email").val('');
            }
        });
    }
});