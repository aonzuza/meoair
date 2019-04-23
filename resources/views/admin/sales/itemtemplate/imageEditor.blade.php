<!-- Modal -->
<div class="modal fade" id="imageEditor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



        <div class="form-group">
          <label for="exampleFormControlTextarea1">Place Image Code Here:</label>
          <textarea class="form-control rounded-0" id="edit-image-input" rows="10"></textarea>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" id="btn-image-up"     class="btn btn-primary" data-elementid=""    onclick="moveUp(this)" data-dismiss="modal">Move Up</button>
        <button type="button" id="btn-image-down"   class="btn btn-primary" data-elementid=""  onclick="moveDown(this)" data-dismiss="modal">Move Down</button>
        <button type="button" id="btn-image-edit"   class="btn btn-primary" data-elementid=""  onclick="editeImage(this)" data-dismiss="modal">Edit</button>
        <button type="button" id="btn-image-delete" class="btn btn-danger" data-elementid="" onclick="deleteContainer(this)" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>
