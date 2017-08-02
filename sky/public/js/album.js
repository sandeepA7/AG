    var csrf=$('Input#csrf_token').val();
    $('#album_save').click(function(){ 
       $.ajax({
          headers: {"X-CSRF-Token": csrf},
          type: 'POST',
          url: "multiple_upload",
          success: function(data) {
               $("p").text(data); 
          }
      });
   });
 