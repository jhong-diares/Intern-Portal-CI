<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body" style="padding: 1.5rem;">
                <div class="row justify-content-center align-items-center mb-0">
                    <div class="col-lg-6 col-md-6 mb-3 justify-content-center align-items-center">
                        <time class="icon getDate">
                            <em id="today"></em>
                            <strong id="month"></strong>
                            <span id="day"></span>
                            <input type="hidden" id="year" />
                        </time>
                    </div>
                    <input type="hidden" id="intern_id" value="<?= $USER_DATA->id ?>"/>
                    <input type="hidden" id="lastname" value="<?= $USER_DATA->col_last_name ?>"/>
                    <input type="hidden" id="firstname" value="<?= $USER_DATA->col_frst_name ?>"/>
                    <input type="hidden" id="middlename" value="<?= $USER_DATA->col_midl_name ?>"/>
                    <div class="col-lg-6 col-md-6 mb-1 c time">
                        <span class="clock2" id="hours">00</span><span class="clock2" id="minutes">00</span><span class="clock2" id="seconds">00</span><br>
                        <span class="clock2" id="phase">00</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row justify-content-center align-items-center mb-1">
                            <button type="submit" class="btn btn-success TimeIn" name="TimeIn" id="TimeIn" url="<?= base_url() ?>Internview/insert_attendance"> Time In </button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row justify-content-center align-items-center mb-1">
                            <button type="submit" class="btn btn-danger TimeOut" name="TimeOut" id="TimeOut" url="<?= base_url() ?>Internview/update_attendance">Time Out</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Date Time Record</h3>
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
                                    <th>Date</th>
                                    <th>Time In</th>
                                    <th>Time Out</th>
                                </tr>
                            </thead>
                            <tbody id="tbl_attendance" url="<?= base_url() ?>Internview/display_attendance">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>