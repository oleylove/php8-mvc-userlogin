<div class="modal fade" id="modal-sing-in" tabindex="-1" role="dialog" aria-labelledby="modal-sing-in"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">

                    <div class="card-header pb-0">
                        <div class="row justify-content-between">
                            <div class="col">
                                <h3 class="font-weight-bolder text-info text-gradient">Welcome</h3>
                                <p class="mb-0">Enter your en or email and password to sign in</p>
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
                        <form role="form text-left" action="<?= htmlspecialchars(BASEURL.'/auth/signin') ?>"
                            method="post" enctype="multipart/form-data">
                            <label>EN Or Email :</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="username" id="username"
                                    aria-label="username" aria-describedby="username-addon" required>
                            </div>
                            <label>Password</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" id="password"
                                    aria-label="Password" aria-describedby="password-addon" required>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign
                                    in</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <p class="mb-4 text-sm mx-auto">
                            Don't have an account?
                            <a href="javascript:;" class="text-info text-gradient font-weight-bold"
                                data-bs-toggle="modal" data-bs-target="#modal-sing-up">
                                Sign up
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>