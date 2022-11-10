
<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog modal-xl">
      <!-- Add New Product Modal content-->
      <div class="modal-content">
         <div class="modal-header bg-color">
            <h4>Add New Product</h4>
            <button type="button" class="close saveClose" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
         </div>
         <div class="modal-body">
          <div class="alert alert-success d-none" role="alert"></div>
            <div class="row">
               <div class="col-lg-8">
                  <div class="container">
                     <form action="#" id="dataForm" enctype="multipart/form-data">
                        <div class="form-group">
                           <label for="email">Product Name:</label>
                           <input type="text" class="form-control" id="pro_name" placeholder="Enter product name" name="pro_name">
                        </div>
                        <div class="form-group">
                           <label for="pwd">Product Price:</label>
                           <input type="number" class="form-control" id="pro_price" placeholder="Enter product price" name="pro_price">
                        </div>
                        <div class="form-group">
                           <label for="pwd">Product Thumbinal Image:</label>
                           <input type="file" class="form-control" id="thumbinal_image" placeholder="Enter product thumbinal image" name="thumbinal_image">
                           <small class="text-danger">Except only JPG,PNG</small>
                        </div>
                        <div class="form-group">
                           <label for="pwd">Product Description:</label>
                           <textarea class="form-control" id="pro_description" placeholder="Enter product description" name="pro_description"></textarea>
                        </div>
                  </div>
               </div>
               <div class="col-lg-4 row" style="height: 300px; overflow-y: scroll;">
               <div class="form-group">

               <label for="pwd">Product Images:</label>
               <input type="file" class="form-control" id="pro_images" name="pro_images[]" accept="image/png, image/gif, image/jpeg" multiple />
               <small class="text-danger">Except only JPG,PNG</small>
               </div>
               </div>
            </div>
         </div>
         <center><button type="button" onclick="submitProductForm();" class="btn btn-primary mb-3"><i class="fa fa-floppy-o" aria-hidden="true"></i> Submit</button></center>
         </form>
      </div>
   </div>
</div>

<!-- Update Product Modal content-->
<div class="modal fade" id="updateModal" role="dialog">
   <div class="modal-dialog modal-xl">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header bg-color">
            <h4>Update Product</h4>
            <button type="button" class="close updateClose" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
         </div>
         <div class="modal-body">
          <div class="alert alert-success d-none" role="alert"></div>
            <div class="row">
               <div class="col-lg-8">
                  <div class="container">
                     <form action="#" id="updateDataForm" enctype="multipart/form-data">
                        <div class="form-group">
                           <label for="email">Product Name:</label>
                           <input type="text" class="form-control pro_name_update" id="pro_name" placeholder="Enter product name" name="pro_name">
                        </div>
                        <input type="hidden" class="pro_image_id" name="pro_image_id" value="">
                        <input type="hidden" class="pro_id" name="pro_id" value="">
                        <div class="form-group">
                           <label for="pwd">Product Price:</label>
                           <input type="number" class="form-control pro_price_update" id="pro_price" placeholder="Enter product price" name="pro_price">
                        </div>
                        <div class="form-group">
                           <label for="pwd">Product Thumbinal Image:</label><small class="text-danger">Except only JPG,PNG</small>
                           <input type="file"  class="form-control" id="thumbinal_image" placeholder="Enter product thumbinal image" name="thumbinal_image">
                           <div class="thumbPreview mt-3"></div>
                           
                        </div>
                        <div class="form-group">
                           <label for="pwd">Product Description:</label>
                           <textarea class="form-control pro_description_update" id="pro_description" placeholder="Enter product description" name="pro_description"></textarea>
                        </div>
                  </div>
               </div>
               <div class="col-lg-4 row" style="height: 300px; overflow-y: scroll;">
               <div class="form-group">
               <label for="pwd">Product Images:</label>
               <input type="file" class="form-control" id="pro_images" name="pro_images[]" accept=".jpeg,.jpg,.gif,.png" multiple />
               <small class="text-danger">Except only JPG,PNG</small>
               </div>
               <div class="allImagesData row"></div>
               </div>
            </div>
         </div>
         <center><button type="button" onclick="updateProductForm();" class="btn btn-primary mb-3"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button></center>
         </form>
      </div>
   </div>
</div>

<!-- Delete Product Modal content-->
<div id="dltModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <div class="alert alert-success d-none dltMsg" role="alert"></div>
        <div class="row dltDiv">
          
          <input type="hidden" class="product_id" value="">
          <h4 class="text-center">Are You Sure You Want To Delete This Record?</h4>
          <div class="col-sm-6"><button onclick="dltRecord();" type="button" class="btn btn-lg btn-primary float-right"><i class="fa fa-check" aria-hidden="true"></i> Yes</button></div>
          <div class="col-sm-6"><button data-dismiss="modal" type="button" class="btn btn-lg btn-primary dltBtn"><i class="fa fa-times" aria-hidden="true"></i> No</button></div>
        </div>
      </div>
      
    </div>

  </div>
</div>

<!-- View Product Modal content-->
<div id="viewModal" class="modal fade bd-example-modal-xl" role="dialog">
  <div class="modal-dialog modal-xl">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4>Product Detail</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <div class="container">
   
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">
            
            <div class="preview-pic tab-content">
              
            </div>
            <ul class="preview-thumbnail nav nav-tabs">
              
            </ul>
            
          </div>
          <div class="details col-md-6">
            <h3 class="product-title">men's shoes fashion</h3>
            
            <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
            <h4 class="price">current price: <span>$180</span></h4>
            
          </div>
        </div>
      </div>
    
  </div>
      
    </div>

  </div>
</div>
<script>
  const base_url = $('.base_url').val();
   $(document).ready(function () {
     
     // update product form validation
      $("#updateDataForm").validate({
          rules: {
              pro_name: {
                  required: true,
                  minlength: 3,
              },
              pro_price: {
                  required: true 
              },
              pro_description: {
                  required: true
              },
              thumbinal_image: {
                  extension: "jpg,png"
                  
              }
          },
          messages: {
              pro_name: {
                  required: "Enter Product Name",
                  minlength: "Product Name should be at least 3 characters long" // <-- removed underscore
              },
              pro_price: {
                  required: "Enter Product Price"
              },
              pro_description: {
                  required: "Enter Product Description"
              }
          },
          submitHandler: function (form) { // after validation data submit
              var formData = new FormData(form);
              var files = $('#pro_images')[0].files;
              var error = '';
              for(var count = 0; count<files.length; count++)
              {
                 var name = files[count].name;
                 var extension = name.split('.').pop().toLowerCase();
                 if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                   {
                     error += "Invalid " + count + " Image File"
                   }
                 else
                    {
                     
                  }
              }
              $.ajax({
                 url:base_url+"product-update",
                 type:'POST',
                 data:formData,
                 cache:false,
                 contentType: false,
                 processData: false,
                 beforeSend:function(){
                   $('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
                  },
                success:function(data){
                  var response = JSON.parse(data);
                  
                  if (response.status===1) {
                  $('.alert').html('Product Update Successfully!!');
                  }else{
                   $('.alert').html('Some error Please Try Again!!');
                }
                   setTimeout(function() { $(".alert").addClass("d-none");
                      $(".imageRemove").html('');
                      $("hr").remove();
                      $(".updateClose").trigger("click");
                   }, 3000);
                  $(".alert").removeClass("d-none");
                  $("#dataForm").trigger('reset');
                  $('#dt-product').DataTable().ajax.reload();
                }
            })
          }
      });

    $("#dataForm").validate({
          rules: {
              pro_name: {
                  required: true,
                  minlength: 3,
              },
              pro_price: {
                  required: true 
              },
              pro_description: {
                  required: true
              },
              thumbinal_image: {
                  required: true,
                  extension: "jpg,png"
                  
              }
          },
          messages: {
              pro_name: {
                  required: "Enter Product Name",
                  minlength: "Product Name should be at least 3 characters long" // <-- removed underscore
              },
              pro_price: {
                  required: "Enter Product Price"
              },
              pro_description: {
                  required: "Enter Product Description"
              },
              thumbinal_image: {
                  required: "Select Product Thumbinal Images"
              }
          },
          submitHandler: function (form) { // after validation data submit
              var formData = new FormData(form);
              var files = $('#pro_images')[0].files;
              var error = '';
              for(var count = 0; count<files.length; count++)
              {
                 var name = files[count].name;
                 var extension = name.split('.').pop().toLowerCase();
                 if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                   {
                     error += "Invalid " + count + " Image File";

                   }
                 else
                    {
                     
                  }
              }
              $.ajax({
                 url:base_url+"product-insert",
                 type:'POST',
                 data:formData,
                 cache:false,
                 contentType: false,
                 processData: false,
                 beforeSend:function(){
                   $('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
                  },
                success:function(data){
                  var response = JSON.parse(data);
                  
                  if (response.status===1) {
                  $('.alert').html('Product Save Successfully!!');
                  }else{
                   $('.alert').html('Some error Please Try Again!!');
                }
                   setTimeout(function() { $(".alert").addClass("d-none");
                      $(".imageRemove").html('');
                      $("hr").remove();

                   }, 3000);
                  $(".alert").removeClass("d-none");
                  $("#dataForm").trigger('reset');
                  $('#dt-product').DataTable().ajax.reload();
                }
            })
          }
      });
   
   });
   
     $(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
      $("#pro_images").on("change", function(e) {
        var files = e.target.files,
          filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
          var f = files[i]
          var fileReader = new FileReader();
          fileReader.onload = (function(e) {
            var file = e.target;
            $("<span class=\"col-sm-6 imageRemove\">" +
              "<img class=\"w-100 p-3\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
              "<br/><span class=\"btn btn-danger mb-2 mt-2 remove\">Remove image</span>" +
              "</span><hr>").insertAfter("#pro_images");
            $(".remove").click(function(){
              $(this).parent(".imageRemove").remove();
            });
            
          });
          fileReader.readAsDataURL(f);
        }
        
      });
    } else {
      alert("Your browser doesn't support")
    }
   });

     function submitProductForm() {
       $("#dataForm").submit();
    }

    function updateProductForm() {
       $("#updateDataForm").submit();
    }
    
    function getIdForDlt(id){
      $('.product_id').val(id);
    }
    function dltRecord(){
         var product_id = $('.product_id').val();
          $.ajax({
                 url:base_url+"product-delete",
                 type:'POST',
                 data:{"product_id":product_id},
                 
                 beforeSend:function(){
                   $('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
                  },
                success:function(data){
                  var response = JSON.parse(data);
                  
                  if (response.status===1) {
                  $('.dltMsg').html('Product Delete Successfully!!');
                  
                  }else{
                   $('.dltMsg').html('Some error Please Try Again!!');
                }
                   setTimeout(function() { $(".alert").addClass("d-none");
                    $(".dltBtn").trigger("click");
                   }, 3000);
                  $(".dltMsg").removeClass("d-none");
                  
                  $('#dt-product').DataTable().ajax.reload();
                }
            })
    }

    function productView(product_id){
          $.ajax({
                 url:base_url+"product-view",
                 type:'POST',
                 data:{"product_id":product_id},
                 
                 beforeSend:function(){
                   $('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
                  },
                success:function(data){
                  var response = JSON.parse(data);
                  $('.product-title').html(response.productDetail.pro_name);
                  $('.product-description').html(response.productDetail.pro_description);
                  $('.price span').html(response.productDetail.pro_price);
                  var images = response.productImages.length+1;
                  var firstTab="";
                  var secondTab="";
                  for (var i = 0; i <images ; i++) {
                    if (i==0) {
                     firstTab += '<div class="tab-pane active" id="pic-'+i+'"><img src="'+base_url+'assets/productImages/'+response.productDetail.thumbinal_image+'" /></div></div>';
                     secondTab += '<li class="active"><a data-target="#pic-'+i+'" data-toggle="tab"><img src="'+base_url+'assets/productImages/'+response.productDetail.thumbinal_image+'" /></a></li>';

                  }else{
                    firstTab += '<div class="tab-pane" id="pic-'+i+'"><img src="'+base_url+'assets/productImages/'+response.productImages[i-1].pro_images+'" /></div></div>';
                    
                    secondTab += '<li><a data-target="#pic-'+i+'" data-toggle="tab"><img src="'+base_url+'assets/productImages/'+response.productImages[i-1].pro_images+'" /></a></li>';
                   }
                   
                  }
                  
                  $('.tab-content').html(firstTab);
                  $('.nav-tabs').html(secondTab);
                }
            })
    }

    function productEdit(product_id){
      $('.allImagesData').html('');
      $.ajax({
                 url:base_url+"product-view",
                 type:'POST',
                 data:{"product_id":product_id},
                 
                 beforeSend:function(){
                   $('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
                  },
                success:function(data){
                  var response = JSON.parse(data);
                  $('.pro_id').val(response.productDetail.pro_id);
                  $('.pro_name_update').val(response.productDetail.pro_name);
                  $('.pro_description_update').val(response.productDetail.pro_description);
                  $('.pro_price_update').val(response.productDetail.pro_price);
                  var thumbinal = '<img class="img-responsive" src="'+base_url+'assets/productImages/'+response.productDetail.thumbinal_image+'" />';
                  $('.thumbPreview').html(thumbinal);
                  var allImages="";
                  for (var i = 0; i < response.productImages.length; i++) {
                    allImages += '<div class="col-sm-12 mt-3 mb-3"><img src="'+base_url+'assets/productImages/'+response.productImages[i].pro_images+'" /></div><button type="button" onclick=removeImg('+response.productImages[i].pro_image_id+') class="btn btn-danger mt-3 mb-3 removeImgFileId'+response.productImages[i].pro_image_id+'">For Remove Click</button><hr>';
                    
                  }
                  $('.allImagesData').html(allImages);
                }
            })
    }
     var imgIds = [];
    function removeImg(pro_image_id){
      if(jQuery.inArray(pro_image_id,imgIds) == -1){
         $('.removeImgFileId'+pro_image_id).attr("onclick","unselect("+pro_image_id+")");
         $('.removeImgFileId'+pro_image_id).html('Selected (For Unselect Click Again)');
         $('.removeImgFileId'+pro_image_id).toggleClass('btn-danger btn-success');
         imgIds.push(pro_image_id);
       };
       var allIds = imgIds.toString();
       $('.pro_image_id').val(allIds);
    }

    function unselect(pro_image_id){
      $('.removeImgFileId'+pro_image_id).attr("onclick","removeImg("+pro_image_id+")");
         $('.removeImgFileId'+pro_image_id).html('For Remove Click');
         $('.removeImgFileId'+pro_image_id).toggleClass('btn-success btn-danger');
         imgIds = jQuery.grep(imgIds, function(value) {
         return value != pro_image_id;
         });
        var allIds = imgIds.toString();
        $('.pro_image_id').val(allIds);
        
    }

    

    

    
</script>