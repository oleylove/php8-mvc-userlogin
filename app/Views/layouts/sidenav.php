<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a href="javascript:void(0)" class="navbar-brand m-0" id="">
            <div class="d-flex py-0">
                <div class="my-auto">
                    <img src="<?= ASSET. $_SESSION['photo'] ?>" class="avatar avatar-sm me-1" alt="main_logo">
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                        <span class="ms-1 font-weight-bold text-capitalize"><?= $_SESSION['fullName'] ?></span>
                    </h6>
                </div>
            </div>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= (isset($data['sidebarDashboard'])) ? ' active': '';  ?>"
                    href="<?= htmlspecialchars(BASEURL.'/dashboard') ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chart-bar-32 <?= (isset($data['sidebarDashboard'])) ? ' text-wite': ' text-dark';  ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link <?= (isset($data['sidebarUsers'])) ? ' active': '';  ?>"
                    href="<?= htmlspecialchars(BASEURL.'/users') ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 <?= (isset($data['sidebarUsers'])) ? ' text-wite': ' text-dark';  ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= (isset($data['sidebar_adhesives'])) ? ' active': '';  ?>"
                    href="<?= htmlspecialchars(BASEURL.'/adhesives') ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 <?= (isset($data['sidebar_adhesives'])) ? ' text-wite': ' text-dark';  ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">Adhesives</span>
                </a>
            </li>


            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= (isset($data['another_action'])) ? ' active': '';  ?>"
                    href="<?= htmlspecialchars(BASEURL.'/another_action') ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-spaceship <?= (isset($data['another_action'])) ? ' text-wite': ' text-dark';  ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">another action</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= (isset($data['another_action'])) ? ' active': '';  ?>"
                    href="<?= htmlspecialchars(BASEURL.'/another_action') ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-spaceship <?= (isset($data['another_action'])) ? ' text-wite': ' text-dark';  ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">another action</span>
                </a>
            </li>



        </ul>
    </div>
</aside>