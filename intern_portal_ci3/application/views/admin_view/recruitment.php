<!-- Modal VIEW INTERN-->
<div class="modal fade" id="view_intern" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Intern Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form" id="quickForm_intern_details" method="post" action="<?= base_url() ?>Adminview/update_view_details" enctype="multipart/form-data">
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
                                    <ul class="list-group list-group-unbordered mb-3">

                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                         Personal Information
                                    </h3>
                                    <input type="hidden" id="intern_id">
                                </div>
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-4">Lastname:</dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control mb-3" id="intern_lastname" onkeypress="return isLetterKey(event)">
                                        </dd>
                                        <dt class="col-sm-4">Firstname:</dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control mb-3" id="intern_firstname" onkeypress="return isLetterKey(event)">
                                        </dd>
                                        <dt class="col-sm-4">Middlename:</dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control mb-3" id="intern_middlename" onkeypress="return isLetterKey(event)">
                                        </dd>
                                        <dt class="col-sm-4">Address:</dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_address">
                                        </dd>
                                        <dt class="col-sm-4">Email:</dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_email">
                                        </dd>
                                        <dt class="col-sm-4">Contact:</dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_contact">
                                        </dd>
                                        <dt class="col-sm-4">Birthday:</dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_bday">
                                        </dd>
                                        <dt class="col-sm-4">Gender:</dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_gender">
                                        </dd>
                                        <dt class="col-sm-4">Proficiency:</dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_skillset">
                                        </dd>
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
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_course">
                                        </dd>
                                        <dt class="col-sm-4">School Name: </dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_schoolname">
                                        </dd>
                                        <dt class="col-sm-4">Contact: </dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_schoolcontact">
                                        </dd>
                                        <dt class="col-sm-4">OJT Adviser: </dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_advisername">
                                        </dd>
                                        <dt class="col-sm-4">Contact: </dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_advisercontact">
                                        </dd>
                                        <dt class="col-sm-4">Hours to Complete: </dt>
                                        <dd class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="intern_hours">
                                        </dd>
                                        <dt class="col-sm-4">Schedule: </dt>
                                        <dd class="col-sm-8 mb-3" id="intern_schedule"></dd>
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
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <a href="<?= base_url() ?>Adminview/download_requirements/" id="download_resume" value="">
                                                    <dd class="text-primary mb-3" id="intern_resume"></dd>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="btn-group float-right">
                                                    <!-- ADD FILE -->
                                                    <span class="btn btn-success" id="btn_upload" onclick="getFileResume()">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                    <input type="file" id="add_file_resume" name="add_file_resume" accept="application/pdf" style="display: none;" />
                                                    <!-- DOWNLOAD FILE -->
                                                    <a href="<?= base_url() ?>Adminview/download_requirements/" id="download_resume_button" value="">
                                                        <span class="btn btn-primary">
                                                            <i class="fas fa-download"></i>
                                                        </span>
                                                    </a>
                                                    <!-- DELETE FILE -->
                                                    <span class="btn btn-danger" id="delete_resume_button" internId="" url="<?= base_url() ?>Adminview/delete_file" value="">
                                                        <i class="fas fa-times-circle"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <dt>Recommendation Letter:</dt>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <a href="<?= base_url() ?>Adminview/download_requirements/" id="download_recommendation" value="">
                                                    <dd class="text-primary mb-3" id="intern_recommendation"></dd>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="btn-group float-right">
                                                    <!-- ADD FILE -->
                                                    <span class="btn btn-success" id="btn_upload" onclick="getFileRecommendation()">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                    <input type="file" name="add_file_recommendation" id="add_file_recommendation" accept="application/pdf" style="display: none;">
                                                    <!-- DOWNLOAD FILE -->
                                                    <a href="<?= base_url() ?>Adminview/download_requirements/" id="download_recommendation_button" value="">
                                                        <span class="btn btn-primary">
                                                            <i class="fas fa-download"></i>
                                                        </span>
                                                    </a>
                                                    <!-- DELETE FILE -->
                                                    <span class="btn btn-danger" id="delete_recommendation_button" internId="" url="<?= base_url() ?>Adminview/delete_file" value="">
                                                        <i class="fas fa-times-circle"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <dt>Waiver:</dt>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <a href="<?= base_url() ?>Adminview/download_requirements/" id="download_waiver" value="">
                                                    <dd class="text-primary mb-3" id="intern_waiver"></dd>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="btn-group float-right">
                                                    <!-- ADD FILE -->
                                                    <span class="btn btn-success" id="btn_upload" onclick="getFileWaiver()">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                    <input type="file" name="add_file_waiver" id="add_file_waiver" accept="application/pdf" style="display: none;">
                                                    <!-- DOWNLOAD FILE -->
                                                    <a href="<?= base_url() ?>Adminview/download_requirements/" id="download_waiver_button" value="">
                                                        <span class="btn btn-primary">
                                                            <i class="fas fa-download"></i>
                                                        </span>
                                                    </a>
                                                    <!-- DELETE FILE -->
                                                    <span class="btn btn-danger" id="delete_waiver_button" internId="" url="<?= base_url() ?>Adminview/delete_file" value="">
                                                        <i class="fas fa-times-circle"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <dt>Agreement Letter:</dt>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <a href="<?= base_url() ?>Adminview/download_requirements/" id="download_agreement" value="">
                                                    <dd class="text-primary mb-3" id="intern_agreement"></dd>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="btn-group float-right">
                                                    <!-- ADD FILE -->
                                                    <span class="btn btn-success" id="btn_upload" onclick="getFileAgreement()">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                    <input type="file" name="add_file_agreement" id="add_file_agreement" accept="application/pdf" style="display: none;">
                                                    <!-- DOWNLOAD FILE -->
                                                    <a href="<?= base_url() ?>Adminview/download_requirements/" id="download_agreement_button" value="">
                                                        <span class="btn btn-primary">
                                                            <i class="fas fa-download"></i>
                                                        </span>
                                                    </a>
                                                    <!-- DELETE FILE -->
                                                    <span class="btn btn-danger" id="delete_agreement_button" internId="" url="<?= base_url() ?>Adminview/delete_file" value="">
                                                        <i class="fas fa-times-circle"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
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
                    <button type="submit" class="btn btn-success" id="update_view">Save Changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal VIEW REJECTED-->
<div class="modal fade" id="view_rejected" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Rejected</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of Rejected Request</h3>
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
                                            <th>Name</th>
                                            <th>Rejected By</th>
                                            <th>Reason</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_rejected" url="<?= base_url() ?>Adminview/display_rejected">
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

<!-- Modal VIEW QUOTA LIMIT-->
<div class="modal fade" id="view_quota_limit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Quota Limit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of Quota Limit</h3>
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
                                            <th>Name</th>
                                            <th>Limit By</th>
                                            <th>Reason</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_quota_limit" url="<?= base_url() ?>Adminview/display_quota_limit">
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
<div class="modal fade" id="view_for_interview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                    <tbody id="tbl_for_interview" url="<?= base_url() ?>Adminview/display_for_interview">
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

<!-- Modal VIEW PENDING REQUEST-->
<div class="modal fade" id="view_pending_request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pending Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of Pending Request</h3>
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
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_pending_request" url="<?= base_url() ?>Adminview/display_pending_request">
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

<div class="row">
    <div class="col-lg-12 col-md-12">
        <!-- <div class="card card-primary card-outline"><br> -->
        <div class="container-fluid" id="summary_request" url="<?= base_url() ?>Adminview/total_recruitment">
            <div class="row ml-4 mr-4 mb-2">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 id="pending_id">0</h3>
                            <p>Pending Request</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="" id="list_pending_request" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 id="accepted_id">0</h3>
                            <p>For Interview</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="" id="list_for_interview" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 id="quota_limited_id">0</h3>
                            <p>Quota Limited</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-warning"></i>
                        </div>
                        <a href="" id="list_quota_limit" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3 id="rejected_id">0</h3>
                            <p>Rejected</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-remove-circle"></i>
                        </div>
                        <a href="" id="list_rejected" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                <h3 class="card-title">Intern Application</h3>
            </div>
            <div class="card-body table-responsive">
                <table id="tbl_request" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="col-2">Date Submitted</th>
                            <th class="col-3">Full Name</th>
                            <th class="col-1 text-center">View</th>
                            <th class="col-3 text-center">Action</th>
                            <th class="col-2 text-center">Status</th>
                            <th class="col-1">Comment</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
</div>