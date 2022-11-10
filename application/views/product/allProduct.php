<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/additional-methods.js"></script> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
      <script src="<?php echo base_url(); ?>assets/js/common.js"></script>
   </head>
   <body>
      <input type="hidden" class="base_url" value="<?php echo base_url(); ?>">
      <div class="container">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel-heading">
               <div class="row">
                  <div class="col-md-10">
                     <button type="button" name="add" data-toggle="modal" data-target="#myModal" id="addProduct" class="btn btn-primary btn-xs mt-3 mb-3"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</button>
                  </div>
                  <div class="col-md-2 pull-left"></div>
               </div>
            </div>
            <table id="dt-product" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Product Image</th>
                     <th>Product Name</th>
                     <th>Price</th>
                     <th>View</th>
                     <th>Edit</th>
                     <th>Delete</th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </body>
</html>