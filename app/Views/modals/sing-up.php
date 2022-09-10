<div class="modal fade" id="modal-sing-up" tabindex="-1" role="dialog" aria-labelledby="modal-sing-up"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">

                    <div class="card-header pb-0">
                        <div class="row justify-content-between">
                            <div class="col">
                                <h3 class="font-weight-bolder text-info text-gradient">Welcome</h3>
                                <p class="mb-0">Enter your information to sign up</p>
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
                        <form role="form text-left" method="post" id="form-sign-up" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col">
                                    <label>Employee ID :</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" name="id" id="id"
                                            placeholder="200xxxxx" required />
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Email :</label>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="name@example.com" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>First Name :</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="firstname" id="firstname"
                                            placeholder="First Name" required />
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Last Name :</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="lastname" id="lastname"
                                            placeholder="Last Name" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Mobile :</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="088xxxxxxx" required />
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Position :</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="position" id="position"
                                            placeholder="Position" required />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Ext. :</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="ext" id="ext" placeholder="2402">
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Shortcut :</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="shortcut" id="shortcut"
                                            placeholder="#80509">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <label>Password:</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="password" required />
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Confirm Password:</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="confirm_password"
                                            id="confirm_password" placeholder="confirm password" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Picture :</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="photo" id="photo">
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" id="submit-sign-up"
                                    class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">
                                    Sign up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>