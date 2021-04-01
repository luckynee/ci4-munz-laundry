</div>
<!-- /.container-fluid -->

</div>
<!-- /Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Munz Laundry 2021</span>
    </div>
  </div>
</footer>
<!-- /Footer -->

</div>
<!-- /Content Wrapper -->

</div>
<!-- /Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

</div>
<!-- /#page-top -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Apakah anda yakin ingin logout?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>

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