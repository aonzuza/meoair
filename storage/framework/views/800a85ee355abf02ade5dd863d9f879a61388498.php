<!-- Modal -->
<div class="modal fade" id="getlink-template" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="getlink-header-template">
          I am  a header
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="exampleFormControlTextarea1">คัดลอกลิงค์:</label>
          <input type="text" class="form-control" id="txt-sale-link">
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="copyText()" data-dismiss="modal">Copy</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php /* C:\xampp\htdocs\meoair\resources\views/admin/sales/itemtemplate/getlink.blade.php */ ?>