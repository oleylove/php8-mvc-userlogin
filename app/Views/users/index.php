    <?php require_once LAYOUT.'head.php'; ?>
    <!-- CSS Files DataTables Bootstrap 5-->
    <link rel="stylesheet" type="text/css" href="<?= ASSET ?>datatable/css/dataTables.bootstrap5.css" />
    <link rel="stylesheet" type="text/css" href="<?= ASSET ?>datatable/css/responsive.bootstrap5.css" />

</head>

<body class="g-sidenav-show  bg-gray-100">
  <?php require_once LAYOUT.'sidenav.php'; ?>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <?php require_once LAYOUT.'navbar.php'; ?>

        <div class="container-fluid py-1">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Datatable Users</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0 display"  id="datatable-users" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                                Author</th>
                                            <th
                                                class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">
                                                Function</th>
                                            <th
                                                class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">
                                                Contact</th>
                                            <th
                                                class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                                Update</th>
                                            <th
                                                class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                                View</th>
                                            </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once LAYOUT.'footer.php'; ?>
        </div>

        
    </main>

    <?php require_once LAYOUT.'script.php'; ?>


    <!-- JS Files DataTables Bootstrap 5 -->
    <script type="text/javascript" src="<?= ASSET ?>datatable/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?= ASSET ?>datatable/js/dataTables.bootstrap5.js"></script>
    <script type="text/javascript" src="<?= ASSET ?>datatable/js/dataTables.responsive.js"></script>
    <script type="text/javascript" src="<?= ASSET ?>datatable/js/responsive.bootstrap5.js"></script>

    <script>
    $(document).ready(function() {
        var dataUsers = JSON.parse('<?= json_encode($data['users']) ?>');
        var table2 = $('#datatable-users').DataTable({
            data: dataUsers,
            lengthChange: true,
            lengthMenu: [
                [ 5, 10, 20, 30,40,50, -1 ],
                [ "5","10","20","30","40","50", "All" ]
            ],
            info: false,
            paging: true,
            searching: true,
            pagingType: "first_last_numbers",
            order: [],
            pageLength: 5,
            columns: [{
                    data: null,
                    render: function(data, type, row, meta) {
                        return'<div class="d-flex px-2 py-1">'+
                        '<div><img src="<?= ASSET ?>' + data.photo + '"class="avatar avatar-sm me-3" alt="user1"></div>'+
                        '<div class="d-flex flex-column justify-content-center"><h6 class="mb-0 text-sm">' + data.id + '</h6>'+
                        '<p class="text-xs text-secondary mb-0">' + data.firstname + ' ' + data.lastname + '</p></div></div> ';
                    }
                },
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return'<p class="text-xs font-weight-bold mb-0 text-capitalize">' + data.email + '</p>'+
                        '<p class="text-xs text-secondary mb-0 text-capitalize">' + data.level + '</p>';
                    }

                },
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return'<p class="text-xs font-weight-bold mb-0">' + data.phone + '</p>'+
                        '<p class="text-xs text-secondary mb-0">' + data.ext + ' ' + data.shortcut +'</p>';
                    }

                },
                {
                    data: null, "className": "text-center",
                    // "sClass": "center"
                    render: function(data, type, row, meta) {
                        return'<span class="text-secondary text-xs font-weight-bold">' + data.update_at +'</span>';
                    }

                },

                {
                    data: null,
                    "className": "text-center",
                    render: function(data, type, row, meta) {
                        return '<a class"text-center text-success" href="<?= htmlspecialchars(BASEURL.'/users/show/') ?>'+data.id+'"><i class="ni ni-badge"></i></a>';
                    }
                }
            ],
        });

    });
    </script>

</body>

</html>