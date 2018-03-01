
<script>
    function setEdit(id,menu,href){
        document.getElementById('editMenu_id').value=id;
        document.getElementById('editMenu').value=menu;
        document.getElementById('editHref').value=href;
        document.getElementById('edit_modal').style.display='block';
    }
    function showmsg(x) {
        document.getElementById('list_pacat').value=x;
        document.getElementById('add_modal').style.display='block';
    }
    function setDelete(x) {
        document.getElementById('menu_id').value=x;
        document.getElementById('delete_modal').style.display='block';
    }
$(function(){
    function ctable(ar,pa){
        var x='<ul>';
        var count=0;
        for(var i=0;i<ar.length;i++){
            if(ar[i].parent==pa) {
count++;
                x += '<li><a class="w3-blue w3-btn w3-round plus" href="'+ar[i].href+'"> ' + ar[i].menu +'</a><a class="w3-yellow w3-btn w3-round plus" onclick="showmsg('+ar[i].id
                    +')" pa="'+ar[i].parent+'">+</a>'+'<a class="w3-red w3-btn w3-round plus" onclick="setDelete('+ar[i].id
                    +')">حذف </a>'+'<a class="w3-green w3-btn w3-round plus" onclick="setEdit('+ar[i].id+",'"+ar[i].menu+"','"+ar[i].href
                    +'\')">تغییر</a>'+ ctable(ar, ar[i].id) + '</li>';
            }
        }
        x+='</ul>';
        if(count>0)
        return x;
        else return '';
    }
    function checkAdult(obje) {
        if(obje.id>0) {
            return obje;
        }
    }
    var obj = JSON.parse('<?= json_encode($data) ?>');
    var menus=obj.filter(checkAdult);
    var x='';
    for (i in menus) {
        x += menus[i].menu;
    }
    document.getElementById("demo").innerHTML =ctable(menus,0);

    $('li[pa=""],li[pa="0"]').last().each(function(e) {
		var pa=$(this).attr('pa');
		$(this).after('<li id="a"><form id="z" action="" method="post" style="">'+'<input type="hidden" name="pa" value="'+pa+'">'+'<input name="cat" type="text" class="w3-padding w3-round w3-border" placeholder="گروه اصلی"><button style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" name="add_row" class="add">افزودن</button></form></li>');
    });
$('.add_list_a').click(function(e) {
    var c=$(this).attr('pa');
	$('#list_pacat').val(c);
});
});
</script>

  <div class="w3-modal" id="add_modal">
      <!-- Modal content-->
      <div class="modal-content center" style="max-width: 800px">
        <div class="modal-header">
          <button class="close" onclick="document.getElementById('add_modal').style.display='none';">&times;</button>
          <h4 class="modal-title">افزودن به زیر گروه</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="">
            <input type="hidden" name="parent" id="list_pacat" placeholder="parent">
            <input class="form-control" name="menu" placeholder="نام">
            <input class="form-control w3-margin-top w3-margin-bottom" name="href" placeholder="href">
            <button type="submit" name="submit" class="btn btn-default">افزودن</button>
            <button type="button" onmousedown="return false;" onclick="document.getElementById('add_modal').style.display='none';" class="btn btn-default">لغو</button>
            </form>
        </div>
      </div>

  </div>
<div class="w3-modal" id="delete_modal">
    <!-- Modal content-->
    <div class="modal-content center" style="max-width: 800px">
        <div class="modal-header">
            <button class="close" onclick="document.getElementById('delete_modal').style.display='none';">&times;</button>
            <h4 class="modal-title">حذف شود؟</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="">
                <input type="hidden" name="id" id="menu_id" placeholder="id">
                <button type="submit" name="delete" class="btn btn-default">حذف</button>
                <button type="button" onmousedown="return false;" onclick="document.getElementById('delete_modal').style.display='none';" class="btn btn-default">لغو</button>
            </form>
        </div>
    </div>

</div>
<div class="w3-modal" id="edit_modal">
    <!-- Modal content-->
    <div class="modal-content center" style="max-width: 800px">
        <div class="modal-header">
            <button class="close" onclick="document.getElementById('edit_modal').style.display='none';">&times;</button>
            <h4 class="modal-title">تغییر کند؟</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="">
                <input type="hidden" name="id" id="editMenu_id" placeholder="id">
                <input class="form-control" id="editMenu" name="menu" placeholder="نام">
                <input class="form-control w3-margin-top w3-margin-bottom" id="editHref" name="href" placeholder="href">
                <button type="submit" name="edit" class="btn btn-default">تغییر</button>
                <button type="button" onmousedown="return false;" onclick="document.getElementById('edit_modal').style.display='none';" class="btn btn-default">لغو</button>
            </form>
        </div>
    </div>

</div>
<div class="w3-container w3- w3-card-2" style="min-height: 400px;margin: 15px;padding: 50px;">
    <p id="demo"></p>
</div>
