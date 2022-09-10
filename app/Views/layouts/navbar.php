<nav class="navbar navbar-main navbar-expand-lg px-0 mx-2 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">

            <h6 class="font-weight-bolder mb-0"><?= $data['page'].$data['subpage'] ?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                </div>
            </div>
            <ul class="navbar-nav justify-content-end">

                <li class="nav-item d-xl-none px-3 ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="ni ni-bullet-list-67 cursor-pointer"></i>
                        </div>
                    </a>
                </li>

                <li class="nav-item pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                        <i class="ni ni-circle-08 me-sm-1 text-success cursor-pointer"></i>
                        <span class="d-sm-inline d-none text-success">Online</span>
                    </a>
                </li>


                <li class="nav-item dropdown px-2 pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ni ni-bell-55 cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                        aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="<?= ASSET ?>images/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New message</span> from Laur
                                        </h6>
                                        <p class="text-xs text-secondary mb-0 ">
                                            <i class="fa fa-clock me-1"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="<?= ASSET ?>images/small-logos/logo-spotify.svg"
                                            class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New album</span> by Travis Scott
                                        </h6>
                                        <p class="text-xs text-secondary mb-0 ">
                                            <i class="fa fa-clock me-1"></i>
                                            1 day
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>credit-card</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(453.000000, 454.000000)">
                                                            <path class="color-background"
                                                                d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                opacity="0.593633743"></path>
                                                            <path class="color-background"
                                                                d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            Payment successfully completed
                                        </h6>
                                        <p class="text-xs text-secondary mb-0 ">
                                            <i class="fa fa-clock me-1"></i>
                                            2 days
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ni ni-settings-gear-65 cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end px-1 py-1 me-sm-n2"
                        aria-labelledby="dropdownMenuButton">

                        <li class="mb-1">
                            <a class="dropdown-item border-radius-md"
                                href="<?= htmlspecialchars(BASEURL) ?>">
                                <div class="d-flex py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">Home</span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="dropdown-item border-radius-md"
                                href="<?= htmlspecialchars(BASEURL.'/users/show/'.$_SESSION['id']) ?>">
                                <div class="d-flex py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">Profile</span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">Another action</span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="dropdown-item border-radius-md" href="javascript:;" data-bs-toggle="modal"
                                data-bs-target="#modal-change-password">
                                <div class="d-flex py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">Change Password</span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="mb-1">
                            <a class="dropdown-item border-radius-md switch-trigger background-color"
                                href="javascript:void(0)">
                                <div class="d-flex py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">Sidebar Colors</span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="badge-colors my-2 text-start">
                                    <span data-color="primary" onclick="sidebarColor(this)"
                                        class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary active"></span>
                                    <span data-color="dark" onclick="sidebarColor(this)"
                                        class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-dark"></span>
                                    <span data-color="info" onclick="sidebarColor(this)"
                                        class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info"></span>
                                    <span data-color="success" onclick="sidebarColor(this)"
                                        class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-success"></span>
                                    <span data-color="warning" onclick="sidebarColor(this)"
                                        class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning"></span>
                                    <span data-color="danger" onclick="sidebarColor(this)"
                                        class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger"></span>
                                </div>
                            </a>
                        </li>
                        <hr class="horizontal dark my-1">
                        <li class="mb-1">
                            <a class="dropdown-item border-radius-md"
                                href="<?= htmlspecialchars(BASEURL.'/auth/logout') ?>">
                                <div class="d-flex py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                        <i class="ni ni-button-power text-danger me-sm-1 px-0"></i>
                                            <span class="font-weight-bold text-danger">Logout</span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php require_once MODAL.'change-password.php'; ?>