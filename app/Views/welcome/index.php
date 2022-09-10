<?php require_once LAYOUT.'head.php'; ?>

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

<body class="g-sidenav-show bg-welcome" style="background-image: url('<?= ASSET ?>images/app/bg-welcome.webp');">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <a href="<?= BASEURL ?>">
                        <h6 class="font-weight-bolder text-white mb-0 text-uppercase">
                            php8 mvc userlog in
                        </h6>
                    </a>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <?php 
                            use App\Controllers\Auth;
                            if(Auth::isLogged()){
                                echo'
                                    <li class="nav-item d-flex align-items-center">
                                        <a href="'.htmlspecialchars(BASEURL.'/dashboard').'" class="nav-link text-body font-weight-bold px-3">
                                            <i class="ni ni-chart-bar-32 text-white me-sm-1 px-0"></i>
                                            <span class="d-sm-inline d-none text-white">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center">
                                        <a href="'.htmlspecialchars(BASEURL.'/users/show/'.$_SESSION['id']).'" class="nav-link text-body font-weight-bold px-3">
                                            <i class="ni ni-single-02 text-white  me-sm-1 px-0"></i>
                                            <span class="d-sm-inline d-none text-white">Profile</span>
                                        </a>
                                    </li> 
                                    <li class="nav-item d-flex align-items-center">
                                        <a href="'.htmlspecialchars(BASEURL.'/auth/logout').'" class="nav-link text-body font-weight-bold px-0">
                                            <i class="ni ni-button-power text-white me-sm-1 px-0"></i>
                                            <span class="d-sm-inline d-none text-white">Logout</span>
                                        </a>
                                    </li>  
                                ';
                            }else{
                                echo'
                                <li class="nav-item d-flex align-items-center">
                                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-3"
                                        data-bs-toggle="modal" data-bs-target="#modal-sing-in">
                                        <i class="ni ni-lock-circle-open text-white me-sm-1 px-0"></i>
                                        <span class="d-sm-inline d-none text-white">Sign In</span>
                                    </a>
                                </li>
                                <li class="nav-item d-flex align-items-center">
                                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-1"
                                        data-bs-toggle="modal" data-bs-target="#modal-sing-up">
                                        <i class="ni ni-spaceship text-white me-sm-1 px-0"></i>
                                        <span class="d-sm-inline d-none text-white">Sign Up</span>
                                    </a>
                                </li>  
                                ';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>





        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <?php 
              if (!Auth::isLogged() && isset($_GET['login']) && $_GET['login'] == 'failed') {
                echo '
                    <div class="row justify-content-end">
                        <div class="col-md-6">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">   
                                <span class="alert-icon"> <i class="fas fa-exclamation-circle"></i></span>
                                <span class="alert-text"><strong> Login failed :</strong><br> Invalid password or username</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                ';
              }
            ?>

            <!-- Modal Sign In-->
            <?php require_once MODAL.'sing-in.php'; ?>
            <!-- Modal Sign Up-->
            <?php require_once MODAL.'sing-up.php'; ?>


        </div>

    </main>

    <?php require_once LAYOUT.'script.php'; ?>

    <script type="text/javascript">
    window.onload = function() {
        ModalLoginShow();
    };

    function ModalLoginShow() {
        if (<?= (isset($_GET['logged']));?> || <?= (isset($_GET['signup']));?>) {
            $("#modal-sing-in").modal('show');
        }
    }
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        //check register upload image
        $("#photo").change(function() {
            try {
                var file = this.files[0];
                var fileType = file.type;
                var match = ["image/jpeg", "image/png"];
                if (!((fileType == match[0]) || (fileType == match[1]))) {
                    alert("Sorry, only JPG, JPEG, PNG files are allowed.");
                    $("#photo").val("");
                    return false;
                }
            } catch (error) {
                alert(error);
                $("#photo").val("");
                return false;
            }
        });
        //submit register
        $(".card-body").on("submit", "#form-sign-up", function(event) {
            event.preventDefault();
            let actionUrl = '<?= BASEURL.'/auth/signup' ?>';
            $("#submit-sign-up").attr("disabled", true);
            $.ajax({
                url: actionUrl,
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $("#submit-sign-up").attr("disabled", true);
                    $("#form-sign-up").css("opacity", ".5");
                },
                success: function(data) {
                    if (data == 'success') {
                        alert(
                            "Successful registration\r\nYou are registerd you can login now \r\n"
                            );
                        $("#form-sign-up")[0].reset();
                        $("#form-sign-up").css("opacity", "");
                        $("#submit-sign-up").removeAttr("disabled")
                        $("#modal-sing-up").modal("hide");
                        window.location.assign('<?= BASEURL.'/welcome?signup=true' ?>');
                    } else {
                        alert(data)
                        $("#form-sign-up").css("opacity", "");
                        $("#submit-sign-up").removeAttr("disabled")
                    }
                },
                error: function(jqXHR, textStatus, errorMessage, errorThrown) {
                    $("#form-sign-up").css("opacity", "");
                    $("#submit-sign-up").removeAttr("disabled")
                    alert(jqXHR + "\n" + textStatus + "\n" + errorMessage + "\n" +
                        errorThrown);
                },
            })

        });
    });
    </script>

</body>

</html>