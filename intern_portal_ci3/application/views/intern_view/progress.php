<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="card ">
            <div class="card-body">
                <!-- SmartWizard html -->
                <div id="smartwizard">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#step-1"> <strong>Step 1</strong>
                                <br>Intern Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#step-2"> <strong>Step 2</strong>
                                <br>Verification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#step-3"> <strong>Step 3</strong>
                                <br>Onboarding</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1"></br>
                            <h5>Step 1 Update Information</h5></br>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" href="#Personal" id="personal-tab" role="tab" data-toggle="pill">Personal Information</a></li>
                                        <?php
                                        $li = "";
                                        if ($USER_DATA->col_step_prog == 0) {
                                            $li .= ' <li class="nav-item"><a class="nav-link disabled" href="#Intern" id="internship-tab" role="tab" data-toggle="pill">Internship Details</a></li>';
                                            $li .= ' <li class="nav-item"><a class="nav-link disabled" href="#Schedule" id="schedule-tab" role="tab" data-toggle="pill">Schedule</a></li>';
                                            $li .= ' <li class="nav-item"><a class="nav-link disabled" href="#Essay" id="essay-tab" role="tab" data-toggle="pill">Essay</a></li>';
                                            $li .= ' <li class="nav-item"><a class="nav-link disabled" href="#Requirement" id="requirements-tab" role="tab" data-toggle="pill">Requirements</a></li>';
                                        }
                                        if ($USER_DATA->col_step_prog == 1) {
                                            $li .= ' <li class="nav-item"><a class="nav-link" href="#Intern" id="internship-tab" role="tab" data-toggle="pill">Internship Details</a></li>';
                                            $li .= ' <li class="nav-item"><a class="nav-link" href="#Schedule" id="schedule-tab" role="tab" data-toggle="pill">Schedule</a></li>';
                                            $li .= ' <li class="nav-item"><a class="nav-link" href="#Essay" id="essay-tab" role="tab" data-toggle="pill">Essay</a></li>';
                                            $li .= ' <li class="nav-item"><a class="nav-link" href="#Requirement" id="requirements-tab" role="tab" data-toggle="pill">Requirements</a></li>';
                                        }
                                        ?>
                                        <?= $li; ?>
                                    </ul>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-four-tabContent">
                                            <!-- ======================================REQUIREMENTS====================================== -->
                                            <div class="tab-pane fade" id="Requirement" role="tabpanel" aria-labelledby="requirements-tab">
                                                <div class="row">
                                                    <div class="col-lg-7 col-md-7">
                                                        <div class="card card-primary card-outline" style="padding: 1.5rem;">
                                                            <div class="card-header">
                                                                <h3 class="card-title">
                                                                    Download Files
                                                                </h3>
                                                            </div>
                                                            <div class="card-body box-profile">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 my_download">
                                                                        <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>
                                                                        <div class="mailbox-attachment-info">
                                                                            <a href="download_company_profile" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> 2021-Company-Profile-v2.pdf</a>
                                                                            <span class="mailbox-attachment-size clearfix mt-1">
                                                                                <span>5,205 KB</span>
                                                                                <a href="<?= base_url() ?>download_company_profile" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 my_download">
                                                                        <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>
                                                                        <div class="mailbox-attachment-info">
                                                                            <a href="download_internship_program" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Internship-Program-2021.pdf</a>
                                                                            <span class="mailbox-attachment-size clearfix mt-1">
                                                                                <span>653 KB</span>
                                                                                <a href="<?= base_url() ?>download_internship_program" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 my_download">
                                                                        <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>
                                                                        <div class="mailbox-attachment-info">
                                                                            <a href="download_agreement" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Non-Disclosure-agreement.pdf</a>
                                                                            <span class="mailbox-attachment-size clearfix mt-1">
                                                                                <span>247 KB</span>
                                                                                <a href="<?= base_url() ?>download_agreement" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="card card-primary card-outline" style="padding: 1.5rem;">
                                                            <div class="card-header">
                                                                <h3 class="card-title">
                                                                    Upload Files
                                                                </h3>
                                                            </div>
                                                            <div class="card-body box-profile">
                                                                <form class="form" action="<?php base_url(); ?>update_requirements" method="post" id="quickForm_requirements" enctype="multipart/form-data">
                                                                    <!-- accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" -->
                                                                    <br>
                                                                    <input type="hidden" name="INTR_ID_UPLOAD" class="INTR_ID_UPLOAD" id="INTR_ID_UPLOAD" value="<?= $user_id ?>">
                                                                    <input type="hidden" name="INTR_FNAME" class="INTR_FNAME" id="INTR_FNAME" value="<?= $USER_DATA->col_last_name ?>_<?= $USER_DATA->col_frst_name ?>">

                                                                    <div class="row">
                                                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                                                            <h7>Waiver:</h7>
                                                                        </div>
                                                                        <div class="col-lg-7 col-md-12 col-sm-12 my_padding">
                                                                            <div class="form-group">
                                                                                <div class="custom-file">
                                                                                    <input type="file" class="custom-file-input waiver_attachment" name="waiver_attachment" id="waiver_attachment" accept="application/pdf" />
                                                                                    <!-- accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" -->
                                                                                    <label class="custom-file-label" name="waiver" id="waiver" for="waiver_attachment">Choose file</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><br>
                                                                    <div class="row">
                                                                        <div class="col-lg-5 col-md-12 col-sm-12 ">
                                                                            <h7>Resume/CV:</h7>
                                                                        </div>
                                                                        <div class="col-lg-7 col-md-12 col-sm-12 my_padding">
                                                                            <div class="form-group">
                                                                                <div class="custom-file">
                                                                                    <input type="file" class="custom-file-input" name="resume_attachment" id="resume_attachment"  accept="application/pdf" />
                                                                                    <label class="custom-file-label" name="resume" id="resume" for="resume_attachment">Choose file</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><br>
                                                                    <div class="row">
                                                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                                                            <h7>Recommendation/<br>Endorsement Letter:</h7>
                                                                        </div>
                                                                        <div class="col-lg-7 col-md-12 col-sm-12 my_padding">
                                                                            <div class="form-group">
                                                                                <div class="custom-file">
                                                                                    <input type="file" class="custom-file-input" name="endorsement_attachment" id="endorsement_attachment"  accept="application/pdf" />
                                                                                    <label class="custom-file-label" name="recommendation" id="recommendation" for="endorsement_attachment">Choose file</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><br>
                                                                    <div class="row">
                                                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                                                            <h7>Non-Disclosure Agreement :</h7>
                                                                        </div>

                                                                        <div class="col-lg-7 col-md-12 col-sm-12 my_padding">
                                                                            <div class="form-group">
                                                                                <div class="custom-file">
                                                                                    <input type="file" class="custom-file-input" name="agreement_attachment" id="agreement_attachment"  accept="application/pdf" />
                                                                                    <label class="custom-file-label" name="agreement" id="agreement" for="agreement_attachment">Choose file</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><br>

                                                                    <div class="form-footer bg-white BTN_REQUIREMENTS">
                                                                        <div class="float-right">
                                                                            <a class="btn btn-secondary BTN_BACK_REQU">Back</a>
                                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ======================================ESSAY====================================== -->
                                            <div class="tab-pane fade" id="Essay"  role="tabpanel" aria-labelledby="essay-tab">
                                                <div class="col-lg-8 col-md-12">
                                                    <div class="row">
                                                        <div class="card card-primary card-outline" style="padding: 1.5rem;">
                                                            <div class="card-header active text-muted">
                                                                Question(Essay): Why do you want to apply for internship in Erovoutika?
                                                            </div>
                                                            <div class="card-body">
                                                                <form class="form" id="quickForm_essay" action="<?= base_url(); ?>internview/update_essay" method="get">
                                                                    <div class="col-lg-12 col-sm-12 col-md-12 mb-5">
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">Answer:</span>
                                                                            </div>
                                                                            <textarea name="essay" id="essay" class="form-control" placeholder="Write Here..."><?= $USER_DATA->col_esay_ansr ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                                        <div class="input-group mb-4 justify-content-end BTN_ESSAY">
                                                                            <div class="float-right">
                                                                                <a class="btn btn-secondary BTN_BACK_ESAY">Back</a>
                                                                                <button type="submit" class="btn btn-primary BTN_NEXT_ESAY">Next</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ======================================SCHEDULE====================================== -->
                                            <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="schedule-tab">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-12 col-sm-12">
                                                        <div class="card card-primary card-outline">
                                                            <div class="card-body box-profile table-responsive">
                                                                <form class="form" id="quickForm_schedule" action="<?= base_url(); ?>internview/update_schedule" method="get">
                                                                    <?php
                                                                    $schedule = explode("/", $USER_DATA->col_sche_day);
                                                                    ?>
                                                                    <table class="table table-hover text-nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Day</th>
                                                                                <th>Whole day<br>
                                                                                    <h6 class="text-muted">(8:00 AM-5:00 PM)</h6>
                                                                                </th>
                                                                                <th>Half day<br>
                                                                                    <h6 class="text-muted">(8:00 AM-12:00 NN)</h6>
                                                                                </th>
                                                                                <th>Half day<br>
                                                                                    <h6 class="text-muted">(1:00 PM-5:00 PM)</h6>
                                                                                </th>
                                                                                <th>No Work<br>
                                                                                    <h6 class="text-muted">(Vacant)</h6>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td data-label="#">1.</td>
                                                                                <td data-label="Day">Monday</td>
                                                                                <td data-label="Whole day(8:00 AM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r0" id="radioMondayWhole" value="Monday - 8:00 AM-5:00 PM/" <?= (in_array("Monday - 8:00 AM-5:00 PM", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioMondayWhole"></label>
                                                                                    </div>
                                                                                    <input type="hidden" id="Monday_val" value="0" />
                                                                                </td>
                                                                                <td data-label="Half day(8:00 AM-12:00 NN)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r0" id="radioMondayHalfAm" value="Monday - 8:00 AM-12:00 NN/" <?= (in_array("Monday - 8:00 AM-12:00 NN", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioMondayHalfAm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Half day(1:00 PM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r0" id="radioMondayHalfPm" value="Monday - 1:00 PM-5:00 PM/" <?= (in_array("Monday - 1:00 PM-5:00 PM", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioMondayHalfPm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="No Work(Vacant)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r0" id="radioMondayNoWork" value="Monday - No Work/" <?= (in_array("Monday - No Work", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioMondayNoWork"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td data-label="#">2.</td>
                                                                                <td data-label="Day">Tuesday</td>
                                                                                <td data-label="Whole day(8:00 AM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r2" id="radioTuesdayWhole" value="Tuesday - 8:00 AM-5:00 PM/" <?= (in_array("Tuesday - 8:00 AM-5:00 PM", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioTuesdayWhole"></label>
                                                                                    </div>
                                                                                    <input type="hidden" id="Tuesday_val" value="0" />
                                                                                </td>
                                                                                <td data-label="Half day(8:00 AM-12:00 NN)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r2" id="radioTuesdayHalfAm" value="Tuesday - 8:00 AM-12:00 NN/" <?= (in_array("Tuesday - 8:00 AM-12:00 NN", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioTuesdayHalfAm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Half day(1:00 PM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r2" id="radioTuesdayHalPm" value="Tuesday - 1:00 PM-5:00 PM/" <?= (in_array("Tuesday - 1:00 PM-5:00 PM", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioTuesdayHalPm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="No Work(Vacant)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r2" id="radioTuesdayNoWork" value="Tuesday - No Work/" <?= (in_array("Tuesday - No Work", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioTuesdayNoWork"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td data-label="#">3.</td>
                                                                                <td data-label="Day">Wednesday</td>
                                                                                <td data-label="Whole day(8:00 AM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r3" id="radioWednesdayWhole" value="Wednesday - 8:00 AM-5:00 PM/" <?= (in_array("Wednesday - 8:00 AM-5:00 PM", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioWednesdayWhole"></label>
                                                                                    </div>
                                                                                    <input type="hidden" id="Wednesday_val" value="0" />
                                                                                </td>
                                                                                <td data-label="Half day(8:00 AM-12:00 NN)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r3" id="radioWednesdayHalfAm" value="Wednesday - 8:00 AM-12:00 NN/" <?= (in_array("Wednesday - 8:00 AM-12:00 NN", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioWednesdayHalfAm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Half day(1:00 PM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r3" id="radioWednesdayHalPm" value="Wednesday - 1:00 PM-5:00 PM/" <?= (in_array("Wednesday - 1:00 PM-5:00 PM", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioWednesdayHalPm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="No Work(Vacant)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r3" id="radioWednesdayNoWork" value="Wednesday - No Work/" <?= (in_array("Wednesday - No Work", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioWednesdayNoWork"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td data-label="#">4.</td>
                                                                                <td data-label="Day">Thursday</td>
                                                                                <td data-label="Whole day(8:00 AM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r4" id="radioThursdayWhole" value="Thursday - 8:00 AM-5:00 PM/" <?= (in_array("Thursday - 8:00 AM-5:00 PM", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioThursdayWhole"></label>
                                                                                    </div>
                                                                                    <input type="hidden" id="Thursday_val" value="0" />
                                                                                </td>
                                                                                <td data-label="Half day(8:00 AM-12:00 NN)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r4" id="radioThursdayHalfAm" value="Thursday - 8:00 AM-12:00 NN/" <?= (in_array("Thursday - 8:00 AM-12:00 NN", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioThursdayHalfAm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Half day(1:00 PM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r4" id="radioThursdayHalPm" value="Thursday - 1:00 PM-5:00 PM/" <?= (in_array("Thursday - 1:00 PM-5:00 PM", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioThursdayHalPm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="No Work(Vacant)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r4" id="radioThursdayNoWork" value="Thursday - No Work/" <?= (in_array("Thursday - No Work", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioThursdayNoWork"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td data-label="#">5.</td>
                                                                                <td data-label="Day">Friday</td>
                                                                                <td data-label="Whole day(8:00 AM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r5" id="radioFridayWhole" value="Friday - 8:00 AM-5:00 PM/" <?= (in_array("Friday - 8:00 AM-5:00 PM", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioFridayWhole"></label>
                                                                                    </div>
                                                                                    <input type="hidden" id="Friday_val" value="0" />
                                                                                </td>
                                                                                <td data-label="Half day(8:00 AM-12:00 NN)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r5" id="radioFridayHalfAm" value="Friday - 8:00 AM-12:00 NN/" <?= (in_array("Friday - 8:00 AM-12:00 NN", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioFridayHalfAm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Half day(1:00 PM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r5" id="radioFridayHalPm" value="Friday - 1:00 PM-5:00 PM/" <?= (in_array("Friday - 1:00 PM-5:00 PM", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioFridayHalPm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="No Work(Vacant)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r5" id="radioFridayNoWork" value="Friday - No Work/" <?= (in_array("Friday - No Work", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioFridayNoWork"></label>
                                                                                    </div>
                                                                                </td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td data-label="#">6.</td>
                                                                                <td data-label="Day">Saturday</td>
                                                                                <td data-label="Whole day(8:00 AM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r6" id="radioSaturdayWhole" value="Saturday - 8:00 AM-5:00 PM/" <?= (in_array("Saturday - 8:00 AM-5:00 PM", $schedule)) ? 'checked' : 'disable' ?> />
                                                                                        <label for="radioSaturdayWhole"></label>
                                                                                    </div>
                                                                                    <input type="hidden" id="Saturday_val" value="0" />
                                                                                </td>
                                                                                <td data-label="Half day(8:00 AM-12:00 NN)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r6" id="radioSaturdayHalfAm" value="Saturday - 8:00 AM-12:00 NN/" <?= (in_array("Saturday - 8:00 AM-12:00 NN", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioSaturdayHalfAm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Half day(1:00 PM-5:00 PM)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r6" id="radioSaturdayHalPm" value="Saturday - 1:00 PM-5:00 PM/" <?= (in_array("Saturday - 1:00 PM-5:00 PM", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioSaturdayHalPm"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="No Work(Vacant)">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" name="r6" id="radioSaturdayNoWork" value="Saturday - No Work/" <?= (in_array("Saturday - No Work", $schedule)) ? 'checked' : 'disable'; ?> />
                                                                                        <label for="radioSaturdayNoWork"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                                        <div class="input-group mb-4 justify-content-end BTN_SCHEDULE">
                                                                            <div class="float-right">
                                                                                <a class="btn btn-secondary BTN_BACK_SCHE">Back</a>
                                                                                <button type="submit" class="btn btn-primary BTN_NEXT_SCHE" name="BTN_NEXT_SCHE" id="BTN_NEXT_SCHE">Next</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                                        <div class="card card-primary card-outline" style="padding: 1.5rem;">
                                                            <div class="card-body box-profile">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 mb-3">
                                                                        <label for="">Status:</label>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 mb-3 STATUS">
                                                                        <small class="badge badge-warning"><i class="fa fa-exclamation-triangle"></i> EMPTY</small>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 mb-3">
                                                                        <label>Hours:</label>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 mb-3">
                                                                        <label class="credited_work_hours" name="credited_work_hours" id="credited_work_hours"> 0</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 mb-3">
                                                                    <h6><small><em>(Note: <br>1. Max working hours per week must not exceed to 40 hours<br>
                                                                                2. Minimum working hours per week must not below 24 hours)
                                                                            </em></small></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ======================================INTERNSHIP INFORMATION====================================== -->
                                            <div class="tab-pane fade" id="Intern" role="tabpanel" aria-labelledby="intern-tab">
                                                <form class="form" id="quickForm_internship" action="<?= base_url(); ?>internview/update_internship" method="post">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-12">
                                                            <div class="card card-primary card-outline" style="padding: 1.5rem;">
                                                                <div class="card-body box-profile">
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                                            <label for="" class="mb-2">School Name</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fa fa-building"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control INF_SCHL" name="INF_SCHL" id="INF_SCHL" placeholder="Name of School/Institution" value="<?= $USER_DATA->col_scho_name?>">
                                                                                <input type="hidden" name="INF_USER_ID_INTR" class="INF_USER_ID_INTR" id="INF_USER_ID_INTR" value="<?= $user_id ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                                            <label for="" class="mb-2">School Contact</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control INF_SCON" name="INF_SCON" id="INF_SCON" placeholder="Eg: 09123456789" value="<?= $USER_DATA->col_schl_cont ?>" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-sm-6">
                                                                            <label for="" class="mb-2">Adviser Name</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control INF_ADVS" name="INF_ADVS" id="INF_ADVS" placeholder="Intern/OJT Adviser Name" value="<?= $USER_DATA->col_advs_name ?>" onkeypress="return isLetterKey(event)">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-sm-6">
                                                                            <label for="" class="mb-2">Adviser Contact</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control INF_ACON" name="INF_ACON" id="INF_ACON" placeholder="Eg: 09123456789" value="<?= $USER_DATA->col_advs_cont?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-sm-6">
                                                                            <label for="" class="mb-2">Course/Program</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                                                                                </div>
                                                                                <select class="form-control SELC_COUR" name="SELC_COUR" id="SELC_COUR" required>
                                                                                    <option selected disabled hidden>
                                                                                        <p class="text-muted">Choose...</p>
                                                                                    </option>
                                                                                    <?php
                                                                                    $option = "";
                                                                                    if ($USER_DATA->col_intr_cour == 'BSIT') {
                                                                                        $option .= "<option selected>BSIT</option>";
                                                                                        $option .= "<option>BSCpE</option>";
                                                                                        $option .= "<option>BSCS</option>";
                                                                                    }
                                                                                    if ($USER_DATA->col_intr_cour == 'BSCpE') {
                                                                                        $option .= "<option selected>BSCpE</option>";
                                                                                        $option .= "<option>BSIT</option>";
                                                                                        $option .= "<option>BSCS</option>";
                                                                                    }
                                                                                    if ($USER_DATA->col_intr_cour == 'BSCS') {
                                                                                        $option .= "<option selected>BSCS</option>";
                                                                                        $option .= "<option>BSIT</option>";
                                                                                        $option .= "<option>BSCpE</option>";
                                                                                    }
                                                                                    if ($USER_DATA->col_intr_cour == '') {
                                                                                        $option .= "<option>BSCS</option>";
                                                                                        $option .= "<option>BSIT</option>";
                                                                                        $option .= "<option>BSCpE</option>";
                                                                                    }
                                                                                    ?>
                                                                                    <?php echo $option; ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                                            <label for="" class="mb-2">Hours to Rendered</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control INF_HOUR" name="INF_HOUR" id="INF_HOUR" placeholder="0" value="<?= $USER_DATA->col_totl_hour?>" onkeypress="return isNumberKey(event)" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-sm-12 ">
                                                                        <div class="input-group mb-4 justify-content-end BTN_INTERNSHIP">
                                                                            <div class="float-right">
                                                                                <a class="btn btn-secondary BTN_BACK_INTR">Back</a>
                                                                                <button type="submit" class="btn btn-primary BTN_NEXT_INTR">Next</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- ======================================PERSONAL INFORMATION====================================== -->
                                            <div class="tab-pane fade show active" id="Personal" role="tabpanel" aria-labelledby="personal-tab">
                                                <form class="form" id="quickForm_personal" action="<?= base_url(); ?>internview/update_personal" method="post" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="card card-primary card-outline">
                                                                <div class="card-body box-profile ">
                                                                    <div class="text-center">
                                                                        <img src="<?= base_url(); ?>intern_photo/<?= ($USER_DATA->col_imag_name == TRUE) ? $USER_DATA->col_imag_name : 'default-profile.png' ?>" id="preview" class="img-fluid rounded-circle" alt="User profile picture">
                                                                    </div>
                                                                    <h3 class="profile-username text-center">
                                                                        <!-- <input type="hidden" name="INF_USER_ID_IMG" class="INF_USER_ID_IMG" id="INF_USER_ID_IMG" value="<?= $user_id ?>"> -->
                                                                    </h3>
                                                                    <p class="text-muted text-center">Profile Picture</p>
                                                                    <div class="input-group mb-4">
                                                                        <input type="file" name="img" id="img" class="file file_input" accept="image/*">
                                                                        <input type="text" class="form-control img_filename" disabled placeholder="Upload" name="img_filename" id="img_filename" value="<?= $USER_DATA->col_imag_name ?>">
                                                                        <div class="input-group-append">
                                                                            <button type="button" class="browse btn btn-secondary">Browse...</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9">
                                                            <div class="card card-primary card-outline" style="padding: 1.5rem;">
                                                                <div class="card-body box-profile">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                                            <input type="hidden" name="INF_USER_ID" class="INF_USER_ID" id="INF_USER_ID" value="<?= $user_id ?>">
                                                                            <label for="" class="mb-2">Last Name</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control INF_LAST" name="INF_LAST" id="INF_LAST" placeholder="Lastname" value="<?= $USER_DATA->col_last_name ?>" onkeypress="return isLetterKey(event)">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                                            <label for="" class="mb-2">First Name</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                </div>
                                                                                <input type="text" class="form-control INF_FRST" name="INF_FRST" id="INF_FRST" placeholder="Firstname" value="<?= $USER_DATA->col_frst_name ?>" onkeypress="return isLetterKey(event)">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                                            <label for="" class="mb-2">Middle Name</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                </div>
                                                                                <input type="text" class="form-control INF_MDLE" name="INF_MDLE" id="INF_MDLE" placeholder="Middlename" value="<?= $USER_DATA->col_midl_name ?>" onkeypress="return isLetterKey(event)">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <label for="" class="mb-2">Address</label>
                                                                    <div class="input-group mb-4">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control INF_ADDR" name="INF_ADDR" id="INF_ADDR" placeholder="Address" value="<?= $USER_DATA->col_curr_addr ?>">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-sm-6">
                                                                            <label for="" class="mb-2">Email</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                                </div>
                                                                                <input type="email" class="form-control INF_EMAI" name="INF_EMAI" id="INF_EMAI" placeholder="Email" value="<?= $USER_DATA->col_emai_addr?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-sm-6">

                                                                            <label for="" class="mb-2">Contact</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                                                </div>
                                                                                <input class="form-control INF_CONT" name="INF_CONT" id="INF_CONT" placeholder="Eg: 09123456789" value="<?= $USER_DATA->col_cell_numb ?>" type="text">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-sm-6">

                                                                            <label for="" class="mb-2">Birthday</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fa fa-birthday-cake"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control INF_BRTH" name="INF_BRTH" id="INF_BRTH" placeholder="Birthday" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask required value="<?= $USER_DATA->col_birt_date ?>">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6 col-sm-6">
                                                                            <label for="" class="mb-2">Gender</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fa fa-transgender"></i></span>
                                                                                </div>
                                                                                <select class="form-control SELC_GNDR" name="SELC_GNDR" id="SELC_GNDR" required>
                                                                                    <option value="" selected disabled hidden>Choose...</option>
                                                                                    <?php
                                                                                    $option = "";
                                                                                    if ($USER_DATA->col_intr_gndr == 'Male') {
                                                                                        $option .= "<option selected>Male</option>";
                                                                                        $option .= "<option>Female</option>";
                                                                                    }
                                                                                    if ($USER_DATA->col_intr_gndr == 'Female') {
                                                                                        $option .= "<option selected>Male</option>";
                                                                                        $option .= "<option>Female</option>";
                                                                                    }
                                                                                    if ($USER_DATA->col_intr_gndr == '') {
                                                                                        $option .= "<option value='' selected disabled hidden>Choose...</option>";
                                                                                        $option .= "<option>Male</option>";
                                                                                        $option .= "<option>Female</option>";
                                                                                    }
                                                                                    ?>
                                                                                    <?= $option; ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                                            <label for="" class="mb-2">Skills</label>
                                                                            <div class="input-group mb-4 select2-blue">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-code"></i></span>
                                                                                    <!-- <select class="form-control select2 SELC_SKLL" name="SELC_SKLL[]" id="SELC_SKLL" data-placeholder="Select your skills..." multiple="multiple" data-dropdown-css-class="select2-purple" style="width:100%px;" required> -->
                                                                                    <select class="select2 form-control SELC_SKLL" name="SELC_SKLL[]" id="SELC_SKLL" multiple="multiple" data-placeholder="Choose..." style="width: 100%;" required>
                                                                                        <?php
                                                                                        $skill = explode(" ", $USER_DATA->col_intr_skil);
                                                                                        $num = count($skill) - 1;
                                                                                        for ($i = 0; $i < $num; $i++) {
                                                                                            echo '<option selected  hidden>' . $skill[$i] . ' </option>';
                                                                                            echo '<option id="' . $skill[$i] . '" disabled hidden></option>';
                                                                                        }
                                                                                        ?>
                                                                                        <option id="C++" name="C++" value="C++">C++ </option>
                                                                                        <option id="Python" value="Python">Python </option>
                                                                                        <option id="C#" value="C#">C# </option>
                                                                                        <option id="VB.NET" value="VB.NET">VB.NET </option>
                                                                                        <option id="PHP" value="PHP">PHP </option>
                                                                                        <option id="HTML5" value="HTML5">HTML5 </option>
                                                                                        <option id="CSS3" value="CSS3">CSS3 </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12 col-sm-12 ">
                                                                            <div class="input-group mb-4 justify-content-end BTN_PERSONAL">
                                                                                <div class="float-right">
                                                                                    <input type="hidden" class="skill_set" id="skill_set" name="skill_set" value="<?= $USER_DATA->col_intr_skil ?>">
                                                                                    <button type="submit" class="btn btn-primary BTN_NEXT_INFO">Next</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END UPDATE INFORMATION -->
                        </div>

                        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2"></br>
                            <h5>Step 2 Verification</h5>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="card card-primary card-outline">
                                        <div class="card-body" style="padding: 5rem;">
                                            <div class="form-group clearfix">

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 mb-3">
                                                        <label for="">
                                                            Date Submitted:
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 mb-3">
                                                        <label for="" id="date_submitted" name="date_submitted">
                                                            <?= $USER_DATA->col_date_sbmt ?>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 mb-3">
                                                        <label for="">
                                                            Status:
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 mb-3">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="radio" name="r1" id="radioForChecking" <?= ($USER_DATA->col_user_stat == 'PENDING') ? 'checked' : 'disabled'; ?>>
                                                            <label for="radioForChecking">
                                                                For Checking
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 mb-3">
                                                        <label for="">
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 mb-3">
                                                        <div class="icheck-success d-inline">
                                                            <input type="radio" name="r1" id="radioForApproval" <?= ($USER_DATA->col_user_stat == 'FOR INTERVIEW' || $USER_DATA->col_user_stat == 'RESCHEDULE') ? 'checked' : 'disabled'; ?>>
                                                            <label for="radioForApproval">
                                                                For Interview
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 mb-3">

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 mb-3">
                                                        <div class="icheck-danger d-inline">
                                                            <input type="radio" name="r1" id="radioForRejected" <?= ($USER_DATA->col_user_stat == 'REJECTED' || $USER_DATA->col_user_stat == 'FAILED') ? 'checked' : 'disabled'; ?>>
                                                            <label for="radioForRejected">
                                                                Rejected
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 mb-3">

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 mb-3">
                                                        <div class="icheck-warning d-inline">
                                                            <input type="radio" name="r1" id="radioForQuotaLimit" <?= ($USER_DATA->col_user_stat == 'QUOTA LIMIT') ? 'checked' : 'disabled'; ?>>
                                                            <label for="radioForQuotaLimit">
                                                                Quota Limit
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 mb-3" id="comment_section">
                                                        <label for="">
                                                            Comment:
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 mb-3" id="comment_content">
                                                        <label for="" id="status_reason" name="status_reason">
                                                            <?php if ($USER_DATA->col_user_stat == 'REJECTED') {
                                                                echo "<span class='badge bg-danger'>" . $USER_DATA->col_reje_reas . "</span>";
                                                            } else if ($USER_DATA->col_user_stat == 'QUOTA LIMIT') {
                                                                echo "<span class='badge bg-warning'>" . $USER_DATA->col_reje_reas . "</span>";
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3"></br>
                            <h5>Step 3 Onboarding</h5>
                            <br>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card card-primary card-outline">
                                        <div class="card-body" style="padding: 5rem;">
                                            <div class="container" style="padding: 2em; text-align: left;" id="interview_invitation">
                                                <h6 class="active">Subject: <label class="text-muted">Invitation to an Interview</label>
                                                </h6><br>

                                                <p>Dear <label class="active"><?= $USER_DATA->col_frst_name . ' ' . $USER_DATA->col_last_name ?></label>,<br>
                                                    Thank you for submitting an online application for an internship at Erovoutika Robotics and Automation Solution.<br>
                                                    We have looked over your application and would like to invite you for a virtual interview
                                                    <label class="active">@ <?= $USER_DATA->col_date_inte; ?>.</label><br>
                                                    If you have any difficulties to attend the interview, feel free to email us here <a href="https://www.erovoutika.ph">https://www.erovoutika.ph.</a><br>
                                                    <br>
                                                    Best,<br>
                                                </p>
                                                <label class="active"><?= $USER_DATA->col_inte_name; ?></label>
                                                <p class="text-muted active">HR TEAM</p>
                                                Erovoutika International Corporation<br>
                                                Unit 217, Guadalupe Commercial<br>
                                                Complex, EDSA, Guadalupe Nuevo,<br>
                                                Makati City 02 83701811<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>