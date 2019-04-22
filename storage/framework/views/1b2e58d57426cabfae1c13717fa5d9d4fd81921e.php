<!-- Modal -->
<div class="modal fade" id="headerEditorTemplate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Header Editor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="form-group">
            <label for="usr">หัวข้อ:</label>
            <input type="text" class="form-control" id="header-editor-input">
        </div>


      </div>
      <div class="modal-footer">

        <button type="button" id="btn-header-up" class="btn btn-primary" data-elementid=""    onclick="moveUp(this)" data-dismiss="modal">Move Up</button>
        <button type="button" id="btn-header-down" class="btn btn-primary" data-elementid=""  onclick="moveDown(this)" data-dismiss="modal">Move Down</button>
        <button type="button" id="btn-header-edit" class="btn btn-primary" data-elementid=""  onclick="editHeader()" data-dismiss="modal">Edit</button>
        <button type="button" id="btn-header-delete" class="btn btn-danger" data-elementid="" onclick="deleteContainer(this)" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>

<?php /* C:\xampp\htdocs\meoair\resources\views/admin/sales/itemtemplate/headerEditor.blade.php */ ?>