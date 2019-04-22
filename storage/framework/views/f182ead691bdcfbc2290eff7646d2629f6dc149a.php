<!-- Modal -->
<div class="modal fade" id="templateTwoEditor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Template 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="exampleFormControlTextarea1">ข้อความ:</label>
          <textarea class="form-control rounded-0 ckeditor" name="editor2"  id="edit-itemplate2-text" rows="10"></textarea>

        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">รูปภาพ:</label>
          <textarea class="form-control rounded-0" id="edit-template2-image" rows="5"></textarea>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" id="btn-templatetwo-up"     class="btn btn-primary" data-elementid=""    onclick="moveUp(this)" data-dismiss="modal">Move Up</button>
        <button type="button" id="btn-templatetwo-down"   class="btn btn-primary" data-elementid=""  onclick="moveDown(this)" data-dismiss="modal">Move Down</button>
        <button type="button" id="btn-templatetwo-edit"   class="btn btn-primary" data-elementid=""  onclick="editeTemplateTwo(this)" data-dismiss="modal">Edit</button>
        <button type="button" id="btn-templatetwo-delete" class="btn btn-danger" data-elementid="" onclick="deleteContainer(this)" data-dismiss="modal">Delete</button>

      </div>
    </div>
  </div>
</div>

<?php /* C:\xampp\htdocs\meoair\resources\views/admin/sales/itemtemplate/templateTwoEditor.blade.php */ ?>