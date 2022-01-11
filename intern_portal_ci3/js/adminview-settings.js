// START CREATE ACCOUNT SETTINGS
$(document).on("click", "#create_account", function (e) {
    e.preventDefault();
    $('#view_create_account').modal('show');
    ShowHiredIntern()
});
// END CREATE ACCOUNT SETTINGS

// START EDIT PROFILE
$(document).on("click", "#edit_profile", function (e) {
    e.preventDefault();
    $('#view_intern_profile').modal('show');
});
// END EDIT PROFILE


// START INTERVIEW INVITATION
$(document).on("click", "#edit_invitation", function (e) {
    e.preventDefault();
    $('#view_interview_invitation').modal('show');
});
// END INTERVIEW INVITATION