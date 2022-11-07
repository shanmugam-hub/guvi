$(document).ready(function () {
    $("#signup").click(function (event) {
      var formData = {
        name: $("#name").val(),
        email: $("#email").val(),
        password:$('#password').val(),
        age: $('#age').val(),
        mobile:$('#mobile').val(),
      };
      //console.log(formData.name);
  
      $.ajax({
        type: "POST",
        url: "../php/signup.php",
        data: formData,
        cache: false,
        success:function(data){
          alert(data);
        },
        error:function(xhr,status,error){
          console.error(xhr);
        }
      
        
      }).done(function (data) {
        console.log(formdata);
      });
      event.preventDefault();
});
 });