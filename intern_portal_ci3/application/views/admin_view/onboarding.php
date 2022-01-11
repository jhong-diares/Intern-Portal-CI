<!-- Modal VIEW DETAILS-->
<div class="modal fade" id="view_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Intern Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" id="intern_photo" src="" alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center" id="intern_name"></h3>
                                <p class="text-muted text-center" style="font-weight: 600;">Student</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                     Personal Information
                                </h3>
                            </div>
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-4">Name:</dt>
                                    <dd class="col-sm-8 mb-3" id="intern_name_2"></dd>
                                    <dt class="col-sm-4">Address:</dt>
                                    <dd class="col-sm-8 mb-3" id="intern_address"></dd>
                                    <dt class="col-sm-4">Email:</dt>
                                    <dd class="col-sm-8 mb-3" id="intern_email"></dd>
                                    <dt class="col-sm-4">Contact:</dt>
                                    <dd class="col-sm-8 mb-3" id="intern_contact"></dd>
                                    <dt class="col-sm-4">Birthday:</dt>
                                    <dd class="col-sm-8 mb-3" id="intern_bday"></dd>
                                    <dt class="col-sm-4">Gender:</dt>
                                    <dd class="col-sm-8 mb-3" id="intern_gender"></dd>
                                    <dt class="col-sm-4">Proficiency:</dt>
                                    <dd class="col-sm-8 mb-3" id="intern_skillset"></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Internship Details
                                </h3>
                            </div>
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-4">Course: </dt>
                                    <dd class="col-sm-8 mb-3" id="intern_course"></dd>
                                    <dt class="col-sm-4">School Name: </dt>
                                    <dd class="col-sm-8 mb-3" id="intern_schoolname"></dd>
                                    <dt class="col-sm-4">Contact: </dt>
                                    <dd class="col-sm-8 mb-3" id="intern_schoolcontact"></dd>
                                    <dt class="col-sm-4">OJT Adviser: </dt>
                                    <dd class="col-sm-8 mb-3" id="intern_advisername"></dd>
                                    <dt class="col-sm-4">Contact: </dt>
                                    <dd class="col-sm-8 mb-3" id="intern_advisercontact"></dd>
                                    <dt class="col-sm-4">Hours to Complete: </dt>
                                    <dd class="col-sm-8 mb-3" id="intern_hours"></dd>
                                    <dt class="col-sm-4">Schedule: </dt>
                                    <dd class="col-sm-8 mb-3" id="intern_schedule_onboarding"></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Attachment Files
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <dl>
                                    <dt>Resume/CV:</dt>
                                    <a href="<?= base_url()?>Adminview/download_requirements/" id="download_resume" value=""><dd class="text-primary mb-3" id="intern_resume"></dd></a>
                                    <dt>Recommendation Letter:</dt>
                                    <a href="<?= base_url()?>Adminview/download_requirements/" id="download_recommendation" value=""><dd class="text-primary mb-3" id="intern_recommendation"></dd></a>
                                    <dt>Waiver:</dt>
                                    <a href="<?= base_url()?>Adminview/download_requirements/" id="download_waiver" value=""><dd class="text-primary mb-3" id="intern_waiver"></dd></a>
                                    <dt>Agreement Letter:</dt>
                                    <a href="<?= base_url()?>Adminview/download_requirements/" id="download_agreement" value=""><dd class="text-primary mb-3" id="intern_agreement"></dd></a>
                                </dl>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Essay
                                </h3>
                            </div>
                            <div class="card-body">
                                <p id="intern_essay"></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal VIEW FAILED-->
<div class="modal fade" id="view_failed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Failed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of Failed Interview</h3>
                                <div class="card-tools">
                                    <ul class="pagination pagination-sm float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body add-notice">
                                <table class="table table-striped no-data-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Interview Schedule</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_failed" url="<?= base_url() ?>Adminview/display_failed">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal VIEW RESCHEDULE-->
<div class="modal fade" id="view_reschedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Reschedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of Reschedule Interview</h3>
                                <div class="card-tools">
                                    <ul class="pagination pagination-sm float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body add-notice">
                                <table class="table table-striped no-data-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>To Interview Schedule</th>
                                            <th>From Interview Schedule</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_reschedule" url="<?= base_url() ?>Adminview/display_reschedule">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal VIEW FOR INTERVIEW-->
<div class="modal fade" id="view_for_interview_onboarding" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">For Interview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of For Interview</h3>
                                <div class="card-tools">
                                    <ul class="pagination pagination-sm float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body add-notice">
                                <table class="table table-striped no-data-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Date Submitted</th>
                                            <th>Name</th>
                                            <th>Interview Schedule</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_for_interview_onboarding" url="<?= base_url() ?>Adminview/display_for_interview">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal VIEW FOR INTERVIEW-->
<div class="modal fade" id="view_hired_intern" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hired</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of Hired Intern</h3>
                                <div class="card-tools">
                                    <ul class="pagination pagination-sm float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body add-notice">
                                <table class="table table-striped no-data-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Date Hired</th>
                                            <th>Name</th>
                                            <th>Hired By</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_hired_intern" url="<?= base_url() ?>Adminview/display_hired_intern">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Card Outline -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <!-- <div class="card card-primary card-outline"><br> -->
        <div class="container-fluid" id="summary_onboarding" url="<?= base_url() ?>Adminview/total_onboarding">
            <div class="row ml-4 mr-4 mb-2">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3 id="for_interview_id">0</h3>
                            <p>For Interview</p>
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
                            <h3 id="hired_intern_id">0</h3>
                            <p>Hired Intern</p>
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
                            <h3 id="rescheduled_id">0</h3>
                            <p>Rescheduled</p>
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
                            <h3 id="failed_id">0</h3>
                            <p>Failed</p>
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
                <h3 class="card-title">Onboarding Application</h3>
            </div>
            <div class="card-body table-responsive">
                <table id="tbl_onboarding" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="col-2">Interview Schedule</th>
                            <th class="col-3">Full Name</th>
                            <th class="col-1 text-center">View</th>
                            <th class="col-3 text-center">Action</th>
                            <th class="col-2 text-center">Status</th>
                        </tr>
                    </thead>
                    <!-- <tbody >

                            </tbody> -->
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
</div>