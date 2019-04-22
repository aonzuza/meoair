<!-- Modal -->
<div class="modal fade" id="paragraphEditor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Paragraph</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="exampleFormControlTextarea1">ข้อความ:</label>
          <!-- <textarea class="form-control rounded-0" id="text-template-val" rows="10"></textarea> -->
          <textarea class="form-control rounded-0 ckeditor" name="editor1"  id="edit-paragraph-input" rows="10"></textarea>

        </div>


      </div>
      <div class="modal-footer">

        <button type="button" id="btn-paragraph-up"     class="btn btn-primary" data-elementid=""    onclick="moveUp(this)" data-dismiss="modal">Move Up</button>
        <button type="button" id="btn-paragraph-down"   class="btn btn-primary" data-elementid=""  onclick="moveDown(this)" data-dismiss="modal">Move Down</button>
        <button type="button" id="btn-paragraph-edit"   class="btn btn-primary" data-elementid=""  onclick="editParagraph(this)" data-dismiss="modal">Edit</button>
        <button type="button" id="btn-paragraph-delete" class="btn btn-danger" data-elementid="" onclick="deleteContainer(this)" data-dismiss="modal">Delete</button>

      </div>
    </div>
  </div>
</div>

<?php /* C:\xampp\htdocs\meoair\resources\views/admin/sales/itemtemplate/paragraphEditor.blade.php */ ?>