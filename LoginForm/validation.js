$(function() {
  $("form[name='registration']").validate({
    
    rules: {
      
      name: "required",
      email: {
        required: true,
        email: true
      },
      password_1: {
        required: true,
        minlength: 5
      },
      password_2: {
        required: true,
        minlength: 5,
        equalTo:"#password_1"
      },
     
      
    },
    messages: {
      name: "Please enter your name",
      password_1: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      password_2: {
        required: "Please re-enter password",        
        equalTo: "Password do not match!"
      },
      email: "Please enter a valid email address",
      
    },
    
    submitHandler: function(form) {
      form.submit();
    }
  });
});

