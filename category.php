<?php

include 'header.php';

include 'sidebar.php';

?>


 <div class="pcoded-main-container">

        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                            <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>category</h5>
                                            
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                            <button class="btn btn-info mt-2 float-right" id="Addnew">ADD NEW transiaction</button>
                                                <table class="table" id="categorytable">
                                                    <thead>
                                                        
                                                    </thead>
                                                    <tbody>
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal" tabindex="-1" role="dialog" id="categorymodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="categoryform">
     <input type="hidden" name="update_id" id="update_id">
          <div class="row">
              <div class="col-sm-12">
              <div class="alert alert-success d-none" role="alert">
  
</div>
<div class="alert alert-danger d-none" role="alert">
  
</div>
              </div>

              
              <div class="col-sm-12">
<div class="form-group mt-3">
    <label for="">name</label>
    <input type="text" name="name" id="name" class="form-control">
</div>
</div>

<div class="col-sm-12">
<div class="form-group mt-3 ">
<label for="">icon</label>
    <input type="text" name="icon" id="icon" class="form-control">
</div>
</div>
<div class="col-sm-12">
<div class="form-group mt-3">
<label for="">role</label>
    <select name="role" id="role" class="form-control">
    <option value="dashboard">dashboard</option>
<option value="subscriber">subscriber</option>
<option value="superadmin">superadmin</option>
<option value="Students">Students</option>





    </select>
</div>

</div>
 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>


                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>





<?php

include 'footer.php';



?>
<script src="../js/category.js"></script>