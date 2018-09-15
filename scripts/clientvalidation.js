$(document).ready(function(){

  $("#mainForm").on("submit", function(){
    var formValid = true;

    var fullNameValid = $("#fullName").prop("validity").valid;
    if(fullNameValid) {
      $("fullNameError").hide();
    } else {
      $("#fullNameError").show();
      formValid = false;
    }

    if($("#email").prop("validity").valueMissing){
      $("#emailErrorNoEmail").show();
      formValid = false;
    } else {
      $("#emailErrorNoEmail").hide();
    }
    if($("#email").prop("validity").typeMismatch){
      $("#emailErrorInvalEmail").show();
      formValid = false;
    } else {
      $("#emailErrorInvalEmail").hide();
    }

    var messageValid = $("#message").prop("validity").valid;
    if(messageValid) {
      $("messageError").hide();
    } else {
      $("messageError").show();
      formValid = false;
    }

    return formValid;
  });
});
