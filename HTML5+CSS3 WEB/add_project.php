<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Enter Project Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        <label data-error="wrong" data-success="right" for="orangeForm-name">Project Image</label>
          <input type="file" id="orangeForm-name" class="form-control validate">
        </div>
        <div class="md-form mb-5">
        <label data-error="wrong" data-success="right" for="orangeForm-email">Project Name</label>

        <input type="text" id="orangeForm-email" class="form-control validate">
        </div>

        <div class="md-form mb-4">
        <label data-error="wrong" data-success="right" for="orangeForm-pass">Description</label>
          <textarea name="Description" id="orangeForm-pass" class="form-control validate" cols="30" rows="10"></textarea>
        </div>
        <div class="md-form mb-5">
        <label data-error="wrong" data-success="right" for="orangeForm-email">Project link</label>

        <input type="text" id="orangeForm-email" class="form-control validate">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button  class="btn btn-primary" style = "color:black;">Done</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <button type="button" class="btn btn-primary" style = "color:black;"><a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm"><i class="fa fa-plus"></i>Add New Project</a></button>
</div>