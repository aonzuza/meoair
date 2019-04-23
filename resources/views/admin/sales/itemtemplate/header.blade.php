<!-- Modal -->
<div class="modal fade" id="headerTemplate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Header</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="form-group">
            <label for="usr">หัวข้อ:</label>
            <input type="text" class="form-control" id="header-template-val">
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="createHeaderRow()" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
