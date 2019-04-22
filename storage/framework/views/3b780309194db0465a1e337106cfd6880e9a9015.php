<!-- Modal -->
<div class="modal fade" id="paragraphTemplate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Paragraph</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="exampleFormControlTextarea1">ข้อความ:</label>
          
          <textarea class="form-control rounded-0 ckeditor" name="editor1"  id="paragraph-template-input" rows="10"></textarea>

        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="createParagrah()" data-dismiss="modal">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php /* C:\xampp\htdocs\meoair\resources\views/admin/sales/itemtemplate/paragraph.blade.php */ ?>