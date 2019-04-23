<!-- Modal -->
<div class="modal fade" id="template2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="exampleFormControlTextarea1">ข้อความ:</label>
          <!-- <textarea class="form-control rounded-0" id="text-template2-val" rows="5"></textarea> -->
          <textarea class="form-control rounded-0 ckeditor" name="editor3"  id="text-template2-val" rows="10"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">รูปภาพ:</label>
          <textarea class="form-control rounded-0" id="img-template2-val" rows="5"></textarea>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="createTemplate2Row()" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
