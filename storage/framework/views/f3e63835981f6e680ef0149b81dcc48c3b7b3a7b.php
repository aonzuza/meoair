<?php $__env->startSection('content'); ?>



<div class="sales-index-wrapper">


<div class="container">
  <div class="row">
      <div class="col-12">

        <div class="text-right py-4">

                <button class="btn  btn-outline-warning" data-toggle="modal" data-target="#create-page-template">
                  + New Page
                </button>

        </div>

      </div>
  </div>
  <div class="row">
    <div class="col-12">


    <table class="sales-page-table">
      <th>No.</th>
      <th>Title</th>
      <th>Create Date</th>
      <th>Last Update</th>
      <th>Options</th>

      <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td>
                <?php echo e((($sales->currentPage() - 1 ) * $sales->perPage() ) + $loop->iteration); ?>

          </td>
          <td> <?php echo e($sale->title); ?></td>
          <td> <?php echo e($sale->created_at); ?></td>
          <td> <?php echo e($sale->updated_at); ?></td>
          <td>

              <button class="btn btn-sm btn-outline-success btn-getlink" data-title="<?php echo e($sale->title); ?>" data-pageid="<?php echo e($sale->pageID); ?>">
                Link
              </button>
              <a class="sale-page-button-link" href="<?php echo e(asset('admin/sales/'.$sale->pageID.'/edit')); ?>" >
                <button class="btn btn-sm btn-outline-primary">
                  Edit
                </button>
              </a>
              <a sale-page-button-link href="<?php echo e(asset('admin/sales/'.$sale->pageID.'/delete')); ?>" onclick="return confirm('Are you sure you want to delete <?php echo e($sale->title); ?>?')">
                   <button class="btn btn-sm btn-outline-danger">
                     Delete
                   </button>
              </a>
          </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


    <div class="d-flex my-4">
         <div class="mx-auto">
             <?php echo e($sales->links("pagination::bootstrap-4")); ?>

         </div>
     </div>

    </div>
  </div>
</div>


</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.sales.itemtemplate.createpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sales.itemtemplate.getlink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('script'); ?>

<script type="text/javascript">

function copyText(){

 var text =  $('#txt-sale-link').select();
 document.execCommand("copy");
}


function createPage(){

  var title = $('#txt-page-name').val();


  $.post( "<?php echo e(asset('api/admin/sales/create')); ?>", {
                      title: title
        }).done(function(response){
              document.location.reload(true);
        });

}

$('.btn-getlink').click(function(){

      var pageID = $(this).data('pageid');
      var title = $(this).data('title');
      //getlink-template
      //txt-sale-link
      $("#getlink-template").modal();

      var link = '<?php echo e(asset('sales/show')); ?>' + '/' + pageID;
      $('#txt-sale-link').val(link);

      $('#getlink-header-template').html(title);
});




</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\meoair\resources\views/admin/sales/index.blade.php */ ?>