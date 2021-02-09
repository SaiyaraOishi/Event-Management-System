<link rel="stylesheet" href="../frontend/style3.css">

<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h1>Registration<br><small>Service Provider</small> </h1>

 <div class="container">
                <form action="spregister" method="POST" class="form-horizontal form-label-left">

                    @csrf


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="spname" class="form-control" placeholder="Enter Name" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact No. </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="text" pattern="[+]?\d*" name="spcontact" class="form-control" placeholder="Contact Number" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="email" name="spemail" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Service Type </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="sptype" class="form-control" placeholder="ServiceType" required="required">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Office Address </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="officeaddress" class="form-control" placeholder="Enter office Address" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="password" name="sppassword" class="form-control" placeholder="Enter Password" required="required">
                        </div>
                    </div>


                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-success">Confirm</button>
                        </div>
                    </div>
                </form>
 </div>

            </div>
        </div>
    </div>


</div>


