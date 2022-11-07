$(document).ready(function () {
    $("#login").click(function (event) {
    
        var email= $("#email").val();
        var password=$('#password').val();
  
  if(email!='' && password!=''){
      $.ajax({
        type: "POST",
        url: "login.php",
        data: {email:email,password:password},
        cache: false,
        success:function(data){
          if(data=='no'){
            alert("wrong data");
          }
          
          else{
            alert("success");
          }


        }
      
        
      })
      event.preventDefault();
    }
    else{
      alert("both fields required");
    }
});
 });