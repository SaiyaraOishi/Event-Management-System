<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h1>Confirm Booking </h1>



{{--                <form class="form-horizontal form-label-left" method="POST" action="{{ route('order_booking') }}">--}}

<form class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="name" class="form-control" placeholder="" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact No. </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="text" pattern="[+]?\d*" name="contact" class="form-control" placeholder="" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="email" name="email" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="institution" class="form-control" placeholder="" required="required">
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



