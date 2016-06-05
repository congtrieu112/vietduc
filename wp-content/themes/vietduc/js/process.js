$(function() {
    var data = $(".carousel-inner .active .carousel-caption").html();
    $(".vd-caption").html(data);
    $('.carousel').carousel({
        interval: false
    })
    $('.carousel').on('slide.bs.carousel', function () {
        var data = $(".carousel-inner .active .carousel-caption").html();
        $(".vd-caption").html(data);
    });
    //alert("ok");


    $(".vd-submit-form").click(function(){
        event.preventDefault();
        var name = $("#username").val();
        var  email = $("#email").val();
        var phone = $("#phone").val();
        var message = $("#message").val();
        var url = ROOT_AJAX;
        var data = {name:name,email:email,phone:phone,message:message,action:'sentmail'};
        var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
        var re_phone = /[0-9]{10,15}/igm;
        if(name==""){
            alert('vui lòng nhập họ tên');
            $("#username").focus();
            return false;
        }
        if (email == '' || !re.test(email))
        {
            alert('Email không đúng.');
            $("#email").focus();
            return false;
        }
        if(phone==""||!re_phone.test(phone)){
            alert("vui lòng nhập phone chính xác");
            $("#phone").focus();
            return false;
        }
        if(message==""){
            alert("vui lòng nhập nội dung");
            $("#message").focus();
            return false;
        }



        $.post(url,data,function(e){
            if(e){
                alert("Gửi tin thành công");
                document.getElementById("sentmail").reset();
            }
        });

    });


});
