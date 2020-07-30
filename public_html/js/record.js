$(function(){

  $(".artist").click(function(){
    $(".artist").removeClass("selection");
    $(this).addClass("selection");
    $("#direction").text("press the button below!").css("color","blue");
    //$_POST["answer"]
    $("#answer").val($(this).data("id"));
  });

  $("#btn").click(function(){
    if($("#answer").val()===""){
      alert("choose one!");
    }else{
      $("form").submit();
    }
  });
});
