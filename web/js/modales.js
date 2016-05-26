$(function() {

  var modal = $(".modal-content");

/*********************************************/
  var loginPopUp = $(".loginPopUp");

  $("#logIn").click(function(){
    $(loginPopUp).show("slow");
  });

  $(".close").click(function(){
    $(loginPopUp).hide(200);
  });

  $(document).mouseup(function (e)
  {
    if (!modal.is(e.target) && modal.has(e.target).length === 0) // ... nor a descendant of the container
    {
        loginPopUp.hide(200);
    }
  });
/***********************************************/
var registerPopUp = $(".registerPopUp");

  $("#register").click(function(){
    $(registerPopUp).show("slow");
  });

  $(".close").click(function(){
    $(registerPopUp).hide(200);
  });

  $(document).mouseup(function (e)
  {
    if (!modal.is(e.target) && modal.has(e.target).length === 0) // ... nor a descendant of the container
    {
        registerPopUp.hide(200);
    }
  });
});
