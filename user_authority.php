<?php

include 'header.php';

include 'sidebar.php';

?>
<style>
fieldset.authority-border{


    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow: 0px 0px 0px 0px #000;
             box-shadow: 0px 0px 0px 0px #000;
}
legend.authority-border{

width: inherit;
padding:0 10px;
border-bottom:none;

}
input[type=checkbox]{
    transform: scale(1.5);
}
#all_authority{
    transform: scale(1.5);
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
                                            <h5>USER AUTHORITY</h5>
                                            
                                        </div>
                                        <div class="card-block table-border-style">
                                        
                                        <form id="userform">
                                        <div class="row" >
                                        <div class="col-sm-12">
              <div class="alert alert-success d-none" role="alert">
  
</div>
<div class="alert alert-danger d-none" role="alert">
  
</div>
              </div>
    
    <div class="col-sm-12">
<select name="user_id" id="user_id" class="form-control m-3">

</select>


</div>


    
</div>

<div class="row">
    <div class="col-sm-12">
        <fieldset class="authority-border">
<legend class="authority-border">
    <input type="checkbox" name="all_authority" id="all_authority" style="margin-right:10px; !important">
    All Authorities
</legend>
<div class="row" id="authorityarea">

</div>
        </fieldset>
    </div>
</div>
<button type="submit" class="btn btn-info m-3 " id="submit">authorize user</button>
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
<script src="../js/user_authority.js"></script>