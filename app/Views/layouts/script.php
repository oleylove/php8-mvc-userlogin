  <!--   Core JS Files   -->
  <script type="text/javascript" src="<?= ASSET ?>soft-ui/js/core/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="<?= ASSET ?>soft-ui/js/core/popper.min.js"></script>
  <script type="text/javascript" src="<?= ASSET ?>soft-ui/js/core/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= ASSET ?>soft-ui/js/plugins/perfect-scrollbar.min.js"></script>
  <script type="text/javascript" src="<?= ASSET ?>soft-ui/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script type="text/javascript" async defer src="<?= ASSET ?>soft-ui/soft-ui/js/plugins/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script type="text/javascript" src="<?= ASSET ?>soft-ui/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
  
  <script type="text/javascript" src="<?= ASSET ?>soft-ui/js/plugins/chartjs.min.js"></script>

  <script type="text/javascript" src="<?= ASSET ?>javascript/change-password.js"></script>


  <script type="text/javascript">
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>