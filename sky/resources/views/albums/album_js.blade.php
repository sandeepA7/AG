 <script type="text/javascript">
  // var csrf=$('Input#csrf_token').val();
  // var formData = new FormData();
  // var form = document.forms.namedItem("album_form"); // high importance!, here you need change "yourformname" with the name of your form
  // var formdata = new FormData(form);
  //   $('#album_save').click(function(){ 
  //      $.ajax({
  //         headers: {"X-CSRF-Token": csrf},
  //         type: 'POST', 
  //         data:form,
  //         url: "multiple_upload",
  //         success: function(data) {
  //          }
  //     });
  //  });

// $(document).ready(function() { 
//             // bind 'myForm' and provide a simple callback function 
//             $('#myForm').ajaxForm(function() { 
//                 alert("Thank you for your comment!"); 
//             }); 
//  }); 


// $(document).ready(function() 
// { 
//   $('#album_save').on('click', function() 
//   { 
//     $("#preview").html('');
//     $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
//     $("#upload_form").ajaxForm(
//     {
//     target: '#preview'
//     }).submit();
//   });
// }); 



// var form = document.forms.namedItem("album_form");  
// var formdata = new FormData(); // high importance!
// $('#album_save').click(function(){ 
//   var csrf=$('Input#csrf_token').val();
//   $.ajax({
//     async: true,
//     headers: {"X-CSRF-Token": csrf},
//     type: "POST",
//     // dataType: "json", 
//     contentType: false, 
//     url: 'multiple_upload', 
//     data: formdata, 
//     processData: false, 
//     success: function (data) {
//       console.log(data);
//         //do thing with data....

//     },
//     timeout: 10000
//   });
// });



// $('#album_save').click(function(){ 
//   var options = { 
//                 beforeSubmit:  showRequest,
//     success:       showResponse,
//     dataType: 'json' 
//         }; 
//   $('body').delegate('#image','change', function(){
//     $('#upload').ajaxForm(options).submit();      
//   }); 
// });   
// function showRequest(formData, jqForm, options) { 
//   $("#validation-errors").hide().empty();
//   $("#output").css('display','none');
//     return true; 
// } 
// function showResponse(response, statusText, xhr, $form)  { 
//   if(response.success == false)
//   {
//     var arr = response.errors;
//     $.each(arr, function(index, value)
//     {
//       if (value.length != 0)
//       {
//         $("#validation-errors").append('<div class="alert alert-error"><strong>'+ value +'</strong><div>');
//       }
//     });
//     $("#validation-errors").show();
//   } else {
//      $("#output").html("<img src='"+response.file+"' />");
//      $("#output").css('display','block');
//   }
// }




 // var csrf=$('Input#csrf_token').val();
 //  var formData = new FormData();
 //  var form = document.forms.namedItem("album_form"); // high importance!, here you need change "yourformname" with the name of your form
 //  var formdata = new FormData(form);
 //    $('#album_save').click(function(){ 
 //      $('#image').fileupload({
 //         headers: {"X-CSRF-Token": csrf},
 //          type: 'POST', 
 //        dataType: 'json', 
 //        url: "multiple_upload",
 //        done: function (e, data) {
 //            console.log(data);
 //        }
 //    });
   

 //   });

 

 
 
// $(document).ready(function() {
 
//   //Dropzone.js Options - Upload an image via AJAX.
//   Dropzone.options.myDropzone = {
//     uploadMultiple: false,
//     // previewTemplate: '',
//     addRemoveLinks: false,
//     // maxFiles: 1,
//     dictDefaultMessage: '',
//     init: function() {
//       this.on("addedfile", function(file) {
//         // console.log('addedfile...');
//       });
//       this.on("thumbnail", function(file, dataUrl) {
//         // console.log('thumbnail...');
//         $('.dz-image-preview').hide();
//         $('.dz-file-preview').hide();
//       });
//       this.on("success", function(file, res) {
//         console.log('upload success...');
//         $('#img-thumb').attr('src', res.path);
//         $('input[name="pic_url"]').val(res.path);
//       });
//     }
//   };
//   var myDropzone = new Dropzone("#my-dropzone");
 
//   $('#album_save').on('click', function(e) {
//     e.preventDefault();
//      url: "multiple_upload",
//     //trigger file upload select
//     $("#my-dropzone").trigger('click');
//   });
 
// });
 
// //we want to manually init the dropzone.
// Dropzone.autoDiscover = false;


// $('#album_save').click(function(){ 

//  var csrf=$('Input#csrf_token').val();
  
//   var form = document.querySelector('form');
//   var request= new XMLHttpRequest();
//   form.addEventListener('submit',function(e)){
//    e.preventDefault();
//    var formData = new FormData(form);
//    request.open('post','submit');
//    request.send(formData);
//    },false);
// });




// $("#album_save").on("click", function (e) {
//         var inp = document.getElementById('images');
//         image_name=[];
//         for (var i = 0; i < inp.files.length; ++i) {
//           var s= inp.files.item(i).name;
//           image_name.push(s);
//          }
//         var file_data = $("#images").prop("files")[0]; 
//         var csrf=$('Input#csrf_token').val();
//         var form_data = new FormData();                  // Creating object of FormData class
//         form_data.append("name", image_name)
//         form_data.append("file",file_data);
//         form_data.append("size",file_data['size']);
//                        // Adding extra parameters to form_data
//         $.ajax({
//           headers: {"X-CSRF-Token": csrf},
//             url: 'albummainimage',
//             dataType: 'script',
//             cache: false,
//             contentType: false,
//             processData: false,
//             data: form_data,
//             type: 'post',
//             success: function (data) {
//               alert(data);
//             }
//         })
//     })


$("#album_save").on("click", function (e) {
  var inp = document.getElementById('images');
        image_name=[];
        file_orig=[];
        for (var i = 0; i < inp.files.length; ++i) {
          var s= inp.files.item(i).name;
          image_name.push(s);
         }
   var file_data = $("#images").prop("files")[0]; 
   var filedata = document.getElementById("images"),
            formdata = false;
    if (window.FormData) {
        formdata = new FormData();
    }
    // var i = 0, len = filedata.files.length, img, reader, file;

    for (i=0; i < filedata.files.length; i++) {
        file = filedata.files[i];
        if (window.FileReader) {
            reader = new FileReader();
            reader.onloadend = function(e) {
                // showUploadedItem(e.target.result, file.fileName);
            };
            reader.readAsDataURL(file);
        }
        file_orig.push(file);
        console.log(file);
        if (formdata) {
            formdata.append("file", file_orig);
        }

        formdata.append("name", image_name)
        // formdata.append("file",file_data);
        formdata.append("size",file_data['size']);
    }



        
        // var file_data = $("#images").prop("files")[0]; 
        var csrf=$('Input#csrf_token').val();
        // var form_data = new FormData();                  // Creating object of FormData class
        // form_data.append("name", image_name)
        // form_data.append("file",file_data);
        // form_data.append("size",file_data['size']);
                       // Adding extra parameters to form_data
        $.ajax({
          headers: {"X-CSRF-Token": csrf},
            url: 'albummainimage',
            dataType: 'script',
            cache: false,
            contentType: false,
            processData: false,
            data: formdata,
            type: 'post',
            success: function (data) {
              alert(data);
            }
        })
    })


 </script>

