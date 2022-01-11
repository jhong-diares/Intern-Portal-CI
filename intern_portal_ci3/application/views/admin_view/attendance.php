<div class="row">
    <div class="col-lg-12 col-md-12">
        <!-- <div class="card card-primary card-outline"><br> -->
        <div class="container-fluid">
            <div class="row ml-4 mr-4 mb-2">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3 id="not_in_shift_id">0</h3>
                            <p>Not yet in Shift</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="" id="list_for_interview_onboarding" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 id="in_shift_id">0</h3>
                            <p>In Shift</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="" id="list_hired_intern" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 id="finished_shift_id">0</h3>
                            <p>Finished Shift</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-calendar"></i>
                        </div>
                        <a href="" id="list_reschedule" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3 id="reset_day_">0</h3>
                            <p>Reset Day</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-close-circled"></i>
                        </div>
                        <a href="" id="list_failed" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row ml-2 mr-2">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="d-flex justify-content-end">
                            <div style="display:relative;">
                                <button type="button" class="btn btn-block-no-width btn-primary btn-re" id="prev"><i class="fas fa-angle-left"></i> Prev</button>
                                <button type="button" class="btn btn-block-no-width btn-primary btn-re" id="today">Today</button>
                                <button type="button" class="btn btn-block-no-width btn-primary btn-re" id="day_next">Next <i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table id="tbl_attendance" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="col-2">Date</th>
                            <th class="col-3">Full Name</th>
                            <th class="col-2 text-center">Time In</th>
                            <th class="col-2 text-center">Time Out</th>
                        </tr>
                    </thead>

                </table>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>