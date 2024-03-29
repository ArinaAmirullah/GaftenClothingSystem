<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $__env->make('css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <style type="text/css">

.title {
    color:white; 
    padding-top: 25px; 
    font-size: 25px;
  }

label {
  display: inline-block;
  width:200px;

}

  </style>

  </head>
  <body>
  
    <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid page-body-wrapper">

    <div class="container" align="center">
    <h1 class="title">Add Product</h1><br>

    <?php if(session()->has('message')): ?>

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">x</button>

<?php echo e(session()->get('message')); ?>


</div>

    <?php endif; ?>

    <form action="<?php echo e(url('uploadproduct')); ?>" method="post" enctype="multipart/form-data">

    <?php echo csrf_field(); ?>

    <div style="padding:15px;">
      <label>Product title : </label>

      <input style="color:black;" type="text" name="title" placeholder="Give a product title" required="">
    </div><br>
    <div style="padding:15px;">
      <label>Price : </label>

      <input style="color:black;" type="number" name="price" placeholder="Give a price" required="">
    </div><br>
    <div style="padding:15px;">
      <label>Description : </label>

      <input style="color:black;" type="text" name="des" placeholder="Give a description" required="">
    </div><br>
    <div style="padding:15px;">
      <label>Quantity : </label>

      <input style="color:black;" type="text" name="quantity" placeholder="Product Quantity" required="">
    </div><br>

    <div style="padding:15px;">
   <input type="file" name="file">

   <div style="padding:15px;">
    <input class="btn btn-success" type="submit">
  
</form>
</div>


    </div>
</div>

    <?php echo $__env->make('script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>


<?php /**PATH /Users/nurulaziraamirullah/project/resources/views/product.blade.php ENDPATH**/ ?>