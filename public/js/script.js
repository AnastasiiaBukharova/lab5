
if(localStorage.getItem("value") == "color_grey")
{
    $('head').append('<link rel="stylesheet" type="text/css" href="css/color-grey.css">');
}
else {
    $('head').append('<link rel="stylesheet" type="text/css" href="css/color-violet.css">');
}

$(".change").click(function(){
value = $(".select_color option:selected").val();
if(value == "Серый")
{
  $('head').append('<link rel="stylesheet" type="text/css" href="css/color-grey.css">');
  localStorage.setItem("value", "color_grey");
}
else{
  $('head').append('<link rel="stylesheet" type="text/css" href="css/color-violet.css">');
  localStorage.setItem("value", "color_violet");
}
});

//модальное окно
$(".modal-button").bind('click', function(){
    $(".modal-window").fadeIn(500);
});
//закрыть модальное окно
$(".close-modal").bind('click', function(){
  $(".modal-window").fadeOut(500);
});

//get json
$(".jsonclass").click(function(){

  $.ajax({
      url: "data.json",
      dataType: "json",
      success: function(data) {
          for(var i=0; i<data.info.length; i++)
          {
              $('.jsoncontent').append('<p>'+ data.info[i].name + ": " + data.info[i].value + '</p>');
          }
  }
  });
});

