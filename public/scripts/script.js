$(document).ready(function() {

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('.view-img img').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#upload").change(function() {
    readURL(this);
  });

  $('.buttonImage').on('click', function() {
    $('#upload').trigger('click');
    
  });
});