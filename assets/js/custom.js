$(document).ready(function(){
  $("#del").click(function(e){
      e.preventDefault;
    if (!confirm("Are you sure you want to delete report")){
      return false;
    }
  });

  var i=1;
  $('#add').click(function(){
   i++;
   $('#dynamic_field').append('<div class="col" id="row'+i+'"><div class="form-group" style="display:flex"><input type="text" name="addmore[][items]" class="form-control" style="border-radius:0;" placeholder="Add equipment"/> <button type="button" style="border-radius:0px;" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div>');
  });
  $(document).on('click','.btn_remove', function(){
    var button_id = $(this).attr("id");
    $('#row'+button_id+'').remove();
  });
});