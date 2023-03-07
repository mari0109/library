$(document).ready(function() {
  $('#library').DataTable({
    searching: false
  });
});

$(document).ready(function() {
  $("#newForm").validate({
    
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      code : {
        required: true,
        minlength: 3
      },
      type: {
        required: true
       
      },
      title: {
        required: true
      }
    },
    messages : {
      code: {
        required: "This field is required",
        minlength: "Code should be at least 3 digits"
      },
      type: {
        required: "This field is required"
      },
      title: {
        required: "This field is required"
      }
    }
  });
});