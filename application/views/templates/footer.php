</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
	<strong>Copyright &copy; <?= date('Y') ?> <a href="#"></a></strong> | All rights reserved.
</footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<script src="<?php echo base_url() ?>assets/node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/vendor/lte/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/vendor/lte/') ?>dist/js/adminlte.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/vendor/lte/') ?>bower_components/chart.js/Chart.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/vendor/lte/') ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- nestablejs -->
<script src="<?php echo base_url('assets/node_modules/nestable2/dist/jquery.nestable.min.js') ?>"></script>
<!-- iconpicker -->
<script src="<?php echo base_url('assets/node_modules/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.min.js') ?>"></script>

<?php 
if ($judul != "Dashboard"):
?>
<!-- custom js -->
<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bulk_delete.js') ?>"></script>
<!-- datatable -->
<script src="<?php echo base_url('assets/js/datatable/user.js') ?>"></script>
<?php 
endif;
?>
</body>
</html>
