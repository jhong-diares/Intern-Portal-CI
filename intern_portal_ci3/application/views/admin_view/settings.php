<!-- Modal VIEW FOR CREATE ACCOUNT-->
<div class="modal fade" id="view_create_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create New Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="quickFormReg" action="<?= base_url() ?>Adminview/create_account">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="" class="mb-2">Last Name</label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control lastname" name="lastname" id="lastname" placeholder="Lastname" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="" class="mb-2">First Name</label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control firstname" name="firstname" id="firstname" placeholder="Firstname" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="" class="mb-2">Account Type:</label>
                                <div class="input-group mb-4 select2-blue">
                                    <select class="form-control account_type" name="account_type" id="account_type" required>
                                        <option value="" selected disabled hidden>Choose...</option>
                                        <option>ADMIN</option>
                                        <option>ADVISER</option>
                                        <option>HR</option>
                                        <option>INTERN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <label for="" class="mb-2">Username</label>
                                <div class="input-group mb-4">
                                    <input type="email" class="form-control username" name="username" id="username" placeholder="Email" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="" class="mb-2">Password</label>
                                    <div class="input-group mb-4">
                                        <input type="password" class="form-control password" name="password" id="password" placeholder="Password" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="" class="mb-2">Confirm Password</label>
                                    <div class="input-group mb-4">
                                        <input type="password" class="form-control confirm_password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="create_new">Create Account</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal VIEW FOR INTERN PROFILE-->
<div class="modal" id="view_intern_profile" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Search Intern</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal VIEW FOR INTERVIEW INVITATION-->
<div class="modal" id="view_interview_invitation" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Search Intern</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <a class="list-group-item list-group-item-action" href="" id="create_account"><i class="fas fa-user-plus mr-3"></i>Create New Account</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <a class="list-group-item list-group-item-action" href="" id="edit_profile"><i class="fas fa-user-edit mr-3"></i>Intern Profile</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <a class="list-group-item list-group-item-action" href="" id="edit_invitation"><i class="fas fa-envelope mr-3"></i>Interview Invitation</a>
                </div>
            </div>
        </div>
    </div>
</div>