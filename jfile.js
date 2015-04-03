$(document).ready(function(){
  $(".drp").change(function(){
      var id=$(this).val();
      var dataString = 'id='+ id;

    $.ajax({url:"ajax_dropDown.php",data:dataString, success:function(result){
      $("#div1").html(result);
    }});
  });
});