<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body box-profile" style="padding: 1.5rem;">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url(); ?>intern_photo/<?php echo ($USER_DATA->col_imag_name == TRUE) ? $USER_DATA->col_imag_name : 'default-profile.png' ?>" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center"><?= $USER_DATA->col_frst_name ?> <?= $USER_DATA->col_last_name ?></h3>
                <p class="text-muted text-center" style="font-weight:600;">Intern</p>
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Date Hired</b> <a class="float-right"><?= $USER_DATA->col_star_date ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Group</b> <a class="float-right">--</a>
                    </li>
                    <li class="list-group-item">
                        <b>Hours Rendered</b> <a class="float-right">--</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Attachment Files
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="padding: 1.5rem;">
                <dl>
                    <dt>Resume/CV:</dt>
                    <a href="<?= base_url() ?>Internview/download_requirements/" id="download_resume" value="<?= ($USER_DATA->col_reqm_resm == 'Choose file' ? 'N/A' : $USER_DATA->col_reqm_resm) ?>">
                        <dd class="text-primary mb-3"><?= ($USER_DATA->col_reqm_resm == 'Choose file' ? 'N/A' : $USER_DATA->col_reqm_resm) ?></dd>
                    </a>
                    <dt>Recommendation Letter:</dt>
                    <a href="<?= base_url() ?>Internview/download_requirements/" id="download_recommendation" value="<?= ($USER_DATA->col_reqm_endo == 'Choose file' ? 'N/A' : $USER_DATA->col_reqm_endo) ?>">
                        <dd class="text-primary mb-3"><?= ($USER_DATA->col_reqm_endo == 'Choose file' ? 'N/A' : $USER_DATA->col_reqm_endo) ?></dd>
                    </a>
                    <dt>Waiver:</dt>
                    <a href="<?= base_url() ?>Internview/download_requirements/" id="download_waiver" value="<?= ($USER_DATA->col_reqm_waiv == 'Choose file' ? 'N/A' : $USER_DATA->col_reqm_waiv) ?>">
                        <dd class="text-primary mb-3"><?= ($USER_DATA->col_reqm_waiv == 'Choose file' ? 'N/A' : $USER_DATA->col_reqm_waiv) ?></dd>
                    </a>
                    <dt>Agreement Letter:</dt>
                    <a href="<?= base_url() ?>Internview/download_requirements/" id="download_agreement" value="<?= ($USER_DATA->col_reqm_agre == 'Choose file' ? 'N/A' : $USER_DATA->col_reqm_agre) ?>">
                        <dd class="text-primary mb-3"><?= ($USER_DATA->col_reqm_agre == 'Choose file' ? 'N/A' : $USER_DATA->col_reqm_agre) ?></dd>
                    </a>
                </dl>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Registered Account</h3>
            </div>
            <div class="card-body" style="padding: 1.5rem;">
                <dl class="row">
                    <dt class="col-sm-4">Email:</dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_emai_addr ?></dd>
                    <dt class="col-sm-4">Password:</dt>
                    <dd class="col-sm-8 mb-3"><?= md5($USER_DATA->col_user_pass) ?></dd>
                    <dt class="col-sm-4">Date Created:</dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_acnt_crea ?></dd>
                </dl>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <!-- <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12"> -->
                <h3 class="card-title">Personal Information</h3>
                <!-- </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 float-right">
                        <a class="btn btn-primary text-white mr-2 float-right">
                            <i class="fas fa-pen mr-1 p-1"></i><span style="margin-top: -10px !important;"> Edit </span>
                        </a>
                    </div>
                </div> -->
            </div>
            <div class="card-body" style="padding: 1.5rem;">
                <dl class="row">
                    <dt class="col-sm-4">Name:</dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_frst_name ?> <?= $USER_DATA->col_midl_name ?> <?= $USER_DATA->col_last_name ?></dd>
                    <dt class="col-sm-4">Address:</dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_curr_addr ?></dd>
                    <dt class="col-sm-4">Email:</dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_emai_addr ?></dd>
                    <dt class="col-sm-4">Contact:</dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_cell_numb ?></dd>
                    <dt class="col-sm-4">Birthday:</dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_birt_date ?></dd>
                    <dt class="col-sm-4">Gender:</dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_intr_gndr ?></dd>
                    <dt class="col-sm-4">Proficiency:</dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_intr_skil ?></dd>
                </dl>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Internship Details
                </h3>
            </div>
            <div class="card-body" style="padding: 1.5rem;">
                <dl class="row">
                    <dt class="col-sm-4">Course: </dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_intr_cour ?></dd>
                    <dt class="col-sm-4">School Name: </dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_scho_name ?></dd>
                    <dt class="col-sm-4">Contact: </dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_schl_cont ?></dd>
                    <dt class="col-sm-4">OJT Adviser: </dt>
                    <dd class="col-sm-8 mb-3">Mr/Ms: <?= $USER_DATA->col_advs_name ?></dd>
                    <dt class="col-sm-4">Contact: </dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_advs_cont ?></dd>
                    <dt class="col-sm-4">Hours to Complete: </dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_totl_hour ?></dd>
                    <dt class="col-sm-4">Schedule: </dt>
                    <dd class="col-sm-8 mb-3">
                        <?php
                        $schedule = explode("/", $USER_DATA->col_sche_day);
                        $count = count($schedule) - 1;
                        for ($i = 0; $i < $count; $i++) {
                            echo $schedule[$i] . '<br>';
                        }
                        ?>
                    </dd>
                    <dt class="col-sm-4">Credited Working Hours: </dt>
                    <dd class="col-sm-8 mb-3"><?= $USER_DATA->col_work_hour . ' Hours' ?></dd>
                </dl>
            </div>
        </div>
    </div>