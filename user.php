<?php

include 'header.php';

include 'sidebar.php';

?>
<style>
#show {

width: 150px;
height: 150px;
border: solid 1px #744547;
border-radius: 50%;
object-fit: cover;



}





</style>

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
                                            <h5>USERS</h5>
                                          
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                            <button class="btn btn-info mt-2 float-right" id="Addnew">ADD NEW USER</button>
                                                <table class="table" id="usertable">
                                                    <thead>
                                                        
                                                    </thead>
                                                    <tbody>
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal" tabindex="-1" role="dialog" id="usermodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="userform">
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
    <label for="">username</label>
    <input type="text" name="username" id="username" class="form-control">
</div>
</div>
<div class="col-sm-12">
<div class="form-group mt-3">
<label for="">password</label>
<input type="password" name="password" id="password" class="form-control"> 
</div>
</div>
<div class="col-sm-12">
<div class="form-group mt-3">
<label for="">image</label>
    <input type="file" name="image" id="image" class="form-control">
</div>
</div>

</div>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-12">
<div class="form-group  justifty-content-center">
<img id="show">
</div>
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
<script src="../js/users.js"></script>