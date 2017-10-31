var slideIndex = 0;
var con=true;
function slideto(n) {
    var i;
    var x = document.getElementsByClassName("slideItem");
    var y = document.getElementsByClassName("item");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < y.length; i++) {
        y[i].classList.remove("w3-red");
    }
    slideIndex=n;
    y[slideIndex-1].classList.add("w3-red");
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    con=false;
}
$(function (){
    var items=document.getElementsByClassName("size");
    for(var i=0;i<items.length;i++){
        // items[i].hide();
        // alert(items[i]);
    }
    var max=0;
    var r=$("#readmore").height();
    $(".size").each(function () {
       var temp=$(this).height();
       if(temp>=max){
           max=temp;
       }
    });
    $(".size").height(max+r);
    function slide() {
        if(con==false)return;
        var i;
        var x = document.getElementsByClassName("slideItem");
        var y = document.getElementsByClassName("item");
        if(x.length!= 0 && y.length!= 0) {
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < y.length; i++) {
                y[i].classList.remove("w3-red");
            }
            slideIndex++;
            if (slideIndex > x.length) {
                slideIndex = 1
            }
            x[slideIndex - 1].style.display = "block";
            y[slideIndex - 1].classList.add("w3-red");
            setTimeout(slide, 1000);
        }
    }
    slide();
});