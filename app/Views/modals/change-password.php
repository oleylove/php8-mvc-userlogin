<div class="modal fade" id="modal-change-password" tabindex="-1" role="dialog" aria-labelledby="modal-change-password"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">

                    <div class="card-header pb-0">
                        <div class="row justify-content-between">
                            <div class="col">
                                <h3 class="font-weight-bolder text-info text-gradient">Change Password</h3>
                                <p class="mb-0">Enter your password to Change</p>
                            </div>
                            <div class="col col-auto">
                                <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="ni ni-button-power"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form role="form text-left" id="form-change-password" method="post" enctype="multipart/form-data">
                            <label>Old Password :</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="old_password" id="old_password"
                                    aria-label="old_password" aria-describedby="old_password-addon" required>
                            </div>
                            <label>New Password :</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="new_password" id="new_password"
                                    aria-label="new_password" aria-describedby="new_password-addon" required>
                            </div>
                            <label>Confirm Password :</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                                    aria-label="confirm_password" aria-describedby="confirm_password-addon" required>
                            </div>
                            <div class="text-center">
                                <input type="hidden" class="d-none" name="baesurl" id="baesurl" value="<?= BASEURL ?>">
                                <button type="submit" id="submit-change-password" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">
                                Change
                            </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>