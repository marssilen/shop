<?php require_once ('../../app/config/path.php');?>
//alert("jquery loaded");
$(function(){
    var ci=$('#card_image');
    var zi=$('#zoom_image');
    var zdiv=$("#zoom_div");
    var cih=ci.height();
    var ciw=ci.width();
    zdiv.css({height:2*cih,width:2*ciw});
    zi.css({height:4*cih,width:4*ciw});
    ci.mouseenter(function() {
        zdiv.show();
    }).mouseleave(function() {
        zdiv.hide();
    });
    ci.on('mousemove',function (event) {
        var rect =this.getBoundingClientRect();
        var x = event.clientX-rect.left;
        var y = event.clientY-rect.top;
        var top=0;
        var left=0;
        if((-4*x)<(-2*rect.width))
        {
            left= -2*rect.width;
        }else{
            left= -4 * x;
        }
        if((-4*y)<(-2*rect.height)){
            top= -2*rect.height;
        }else {
            top= -4 * y;
        }
        zi.css({top: top, left: left});
    });
//    alert("jquery loaded");
    $('#buy_btn').on('click',buy);
    $('#fav_btn').on('click',fav);
    $('#login_btn').on('click',login);
    function ajax(url,data){
        $.post(url,data,function(da){
            msg(da,1);
        }).done(function(){
            msg("done",1)
        }).fail(function(){
            msg("fail",2);
        });
    }
    function msg(message,type){
        var msg_obj = jQuery.parseJSON(message);
        if( msg_obj.st === "please login" ){
            $("#loginbox").show();
        }
        if( msg_obj.st === "added to basket" ){
            show_mesage("به سبد خرید اضافه شد");
            $('#basketItems').html(msg_obj.tedad);
        }
        if( msg_obj.st === "added to favorites" ){
            show_mesage("به لیست علاقه مندی ها اضافه شد");
        }
        if( msg_obj.st === "logged" ){
            $.ajax({url: "<?=URL?>ajax/header", success: function(result){
                $("#l_header").html(result);
                $("#loginbox").hide();
            }});
        }

    }
    function login(){
        var data=$('#login_form').serialize();
        url='<?=URL?>login/run';
        ajax(url,data);
    }
    function buy(){
        var data=$('#form').serialize();
        url='<?=URL.'page/'?>sf';
        ajax(url,data);
    }
    function fav(){
        var data=$('#form').serialize();
        url='<?=URL.'page/'?>add_to_favorite';
        ajax(url,data);
    }
    function show_mesage(msg) {
        $('#message').text(msg);
        $('#msg').show();
    }
});
