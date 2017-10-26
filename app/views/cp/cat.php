<script>
$(function(){
function ale(){
	alert('dd');
}
    $('li[pa=""],li[pa="0"]').last().each(function(e) {
		var pa=$(this).attr('pa');
		$(this).after('<li id="a"><form id="z" action="" method="post" style="">'+'<input type="hidden" name="pa" value="'+pa+'">'+'<input name="cat" type="text" placeholder="گروه اصلی"><button style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" name="add_row" class="add">افزودن</button></form></li>');
    });
	
	

$('.add_list_a').click(function(e) {
    var c=$(this).attr('pa');
	$('#list_pacat').val(c);
	
});

		
});

//
</script>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">افزودن به زیر گروه</h4>
        </div>
        <div class="modal-body">
<form method="post" action="">
<input type="hidden" name="pa_cat" id="list_pacat">
<input name="cat" placeholder="نام زیر گروه">
<button name="add_list" class="btn btn-default">افزودن</button>
<button type="button" class="btn btn-default" data-dismiss="modal">لغو</button>
</form>
        </div>
      </div>
      
    </div>
  </div>
<div class="w3-container w3- w3-card-2" style="min-height: 400px;margin: 15px;padding: 50px;">
  <?= $data ?>
</div>
