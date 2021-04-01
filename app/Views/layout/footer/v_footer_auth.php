</div>
<!-- /#page-top -->

<!-- BS Admin 2 JavaScript -->
<script src="<?= base_url(); ?>/template/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/template/js/sb-admin-2.min.js"></script>
<script src="<?= base_url(); ?>/template/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/template/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/template/js/demo/datatables-demo.js"></script>


<!-- JQuery JavaScript-->
<script src="<?= base_url(); ?>/template/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Local Script | Alert timeout-->
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 2000)
</script>

</body>

</html>