<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong><a href="">skuycode</a>.</strong>
    All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= site_url('') ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= site_url('') ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?= site_url('') ?>assets/admin/dist/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= site_url('') ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= site_url('') ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= site_url('') ?>assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= site_url('') ?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= site_url('') ?>assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= site_url('') ?>assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= site_url('') ?>assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?= site_url('') ?>assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= site_url('') ?>assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= site_url('') ?>assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= site_url('') ?>assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= site_url('') ?>assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>

</html>