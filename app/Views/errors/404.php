


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= ASSET ?>/images/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= ASSET ?>/images/favicon.png">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= ASSET ?>/soft-ui/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= ASSET ?>/soft-ui/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= ASSET ?>/soft-ui/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= ASSET ?>/soft-ui/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />

    <style>
    .bg-welcome {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-clip: padding-box;
        background-size: 100% 100%;
    }
    </style>
</head>
<body class="g-sidenav-show bg-welcome" style="background-image: url('<?= ASSET ?>images/errors/bg-404.jpg');">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder text-white mb-0">PROCESS DEVELOPMENT</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="<?= htmlspecialchars(BASEURL) ?>" class="nav-link text-body font-weight-bold px-3">
                                <i class="fas fa-home text-white px-1"></i>
                                <span class="d-sm-inline d-none text-white">Home</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <?php 
              if (isset($_GET['login']) && $_GET['login'] == 'failed') {
                echo '
                  <div class="row justify-content-end">
                      <div class="col-md-8">
                          <div class="alert alert-primary">
                              <button type="button" aria-hidden="true" class="close" data-dismiss="alert"
                                  aria-label="Close">
                                  <i class="tim-icons icon-simple-remove"></i>
                              </button>
                              <span><b> Login failed : </b><br>Invalid password or username</span>
                          </div>
                      </div>
                  </div>
                ';
              }
            ?>

            <!-- Modal Sign In-->
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
                                                <i class="fas fa-times-circle"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-body">
                                    <form role="form text-left" action="<?= htmlspecialchars(BASEURL.'/auth/signin') ?>" method="post"
                                        enctype="multipart/form-data">
                                        <label>EN Or Email :</label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" name="username" id="username" placeholder="Email"
                                                aria-label="Email" aria-describedby="email-addon" required>
                                        </div>
                                        <label>Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Password" name="password" id="password"
                                                aria-label="Password" aria-describedby="password-addon" required>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign
                                            up</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal Sign Up-->
            <div class="modal fade" id="modal-sing-up" tabindex="-1" role="dialog" aria-labelledby="modal-sing-up-label"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-sing-up-label">modal-sing-up</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!--   Core JS Files   -->
    <script src="<?= ASSET ?>/soft-ui/js/core/popper.min.js"></script>
    <script src="<?= ASSET ?>/soft-ui/js/core/bootstrap.min.js"></script>
    <script src="<?= ASSET ?>/soft-ui/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= ASSET ?>/soft-ui/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="<?= ASSET ?>/soft-ui/js/plugins/buttons.js"></script>

    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= ASSET ?>/soft-ui/js/soft-ui-dashboard.min.js?v=1.0.6"></script>

    <script type="text/javascript">
    window.onload = function() {
        ModalLoginShow();
    };

    function ModalLoginShow() {
        if (<?= (isset($_GET['logged']));?>) {
            $("#modal-sing-in").modal('show');
        }
    }
    </script>
</body>

</html>