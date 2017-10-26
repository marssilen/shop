
<br>


<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2 w3-round-large"><!--left images-->
<div class="w3-responsive">
    <script type="text/javascript">
       $(document).ready(function(){

       send_change("#province");
       $("#province").on("change",not);
       function not(){
           send_change("#city",false,this.value);
       }
       function send_change(sel,pro=true,name=""){
           var send_url='<?= URL ?>ajax/province';
           if(!pro){
              send_url='<?= URL ?>ajax/city/'+name;
            }
            $.ajax({
            url:send_url,
            type:'GET',
            dataType: 'json',
            success: function( json ) {
                $(sel).empty();
                $.each(json, function(i, value) {
                    $(sel).append($('<option>').text(i+' '+value).attr('value', i));
                });
            }
            });
       }

// $("#button").click(function(){
//      alert("ss");
//    $.getJSON("http://192.168.1.2/golbon/ajax/province", function(result){
//        $.each(result, function(i, field){
//            $("#div").append("<p>"+field + "</p>");
//        });
//    });
//});

    });
    </script>
    <style>
        .padding-16{
            padding: 16px;
        }
        .w3-input{
            margin-top: 16px;
            text-align: right;
            resize: none;
        }
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button
        {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number]{
            -moz-appearance: textfield;
        }
        .my_label{
            alignment-adjust:middle;
            float: right;
            margin-right:2px;
            font-weight: normal;
        }
        .right{
            float: right;
        }
        .margin-l{
            margin: 5px;
        }
        .margin-m{
            margin: 10px;
        }
        .w3-btn{
            text-align: center;
        }
        select{
            text-align: right;
        }

    </style>
    <!--<button id="button">click</button>-->
    <!--<div id="div"></div>-->
        <label class="my_label">نام و نام خانوادگی تحویل گیرنده</label>
        <p required name="name" id="name" class="w3-input w3-round w3-border w3-border-blue" type="text"><?= display($data['name']) ?></p>
        <label class="my_label">تلفن همراه</label>
        <p required name="c-phone" class="w3-input w3-round w3-border w3-border-blue" type="tel"><?= display($data['s_phone']) ?></p>
        <label class="my_label">تلفن ثابت</label>
        <p required name="s-phone" class="w3-input w3-round w3-border w3-border-blue" type="tel"><?= display($data['c_phone']) ?></p>
        <label class="my_label">آدرس پستی</label>
        <p required name="address" class="w3-input w3-round w3-border w3-border-blue"><?= display($data['address']) ?></p>
        <label class="my_label">کد پستی</label>
        <p required name="postal-code" class="w3-input w3-round w3-border w3-border-blue" type="number"><?= display($data['postal_code']) ?></p>


</div>

</div>
</div>
</div>
