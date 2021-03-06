<!-- LARGE MODAL -->
<div id="modal-add" class="modal fade">
<div class="modal-dialog modal-lg" role="document" style="width:500px;">
  <div class="modal-content tx-size-sm">
    <div class="modal-header pd-x-20">
      <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New Admin</h6>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form action="" data-url="/admin/user" id="form-add" method="POST" role="form" enctype= "multipart/form-data">
    
    <div class="modal-body pd-20">
    <h4 class=" lh-3 mg-b-20 tx-inverse hover-primary"></h4>
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name-add" id="name-add" class="form-control pd-y-12" placeholder="Your Name">
    </div>
    <div class="form-group">
      <label for="">Email</label>
	    <input type="email" name="email-add" id="email-add" class="form-control pd-y-12" placeholder="Your Email(*)">
	  </div>
    <div class="form-group">
      <label for="">Moblie</label>
      <input type="text" name="mobile-add" id="mobile-add" class="form-control pd-y-12" placeholder="Your Mobile">
    </div>

    
	  <div class="form-group">
      <label for="">Gender</label>
      <select class="form-control" id="gender-add">
        <option value="1" >Male</option>
        <option value="0" >Famale</option>
        <option value="-1">None</option>
      </select>
    </div>

	  <div class="form-group">
		  <label class="ckbox ckbox-success mg-t-15">
		    <input type="checkbox" checked="" id="status-add" name="status-add"><span>Kích Hoạt?</span>
		  </label>
	  </div>
	  <div class="form-group text-center">
      <label class="custom-file text-left">
        <input type="file" id="image-add" class="custom-file-input">
        <span class="custom-file-control"></span>
      </label>

	    {{-- <input type="file" class="form-control" id="image-add" placeholder="image" > --}}
      </br>
      <img id="uploadPreview" src="https://www.desasekargadung.com/main/img/noimg.png" width="50%" />
	  </div>
	  
    </div><!-- modal-body -->
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary tx-size-xs">Save changes</button>
      <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
    </div>
    </form>
  </div>
</div><!-- modal-dialog -->
</div><!-- modal -->