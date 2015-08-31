<!-- jQuery 2.1.4 -->
<script src="<?php echo PLUGINS_PATH; ?>jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo PLUGINS_PATH; ?>jQuery/jquery-ui.min.js" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script type="text/javascript">$.widget.bridge('uibutton', $.ui.button);</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo SCRIPTS_PATH; ?>bootstrap/bootstrap.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="<?php echo SCRIPTS_PATH; ?>bootstrap/raphael-min.js" type="text/javascript"></script>
<script src="<?php echo PLUGINS_PATH; ?>morris/morris.min.js" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?php echo PLUGINS_PATH; ?>sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo PLUGINS_PATH; ?>jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="<?php echo PLUGINS_PATH; ?>jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo PLUGINS_PATH; ?>knob/jquery.knob.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo SCRIPTS_PATH; ?>bootstrap/moment.min.js" type="text/javascript"></script>

<script src="<?php echo PLUGINS_PATH; ?>daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo PLUGINS_PATH; ?>datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="<?php echo PLUGINS_PATH; ?>datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo PLUGINS_PATH; ?>datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<!-- InputMask -->
<script src="<?php echo PLUGINS_PATH; ?>input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="<?php echo PLUGINS_PATH; ?>input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="<?php echo PLUGINS_PATH; ?>input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo PLUGINS_PATH; ?>bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="<?php echo PLUGINS_PATH; ?>slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="<?php echo PLUGINS_PATH; ?>fastclick/fastclick.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo SCRIPTS_PATH; ?>dist/app.min.js" type="text/javascript"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo SCRIPTS_PATH; ?>dist/pages/dashboard.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo SCRIPTS_PATH; ?>dist/demo.js" type="text/javascript"></script>
<script src="<?php echo PLUGINS_PATH; ?>iCheck/icheck.min.js" type="text/javascript"></script>
<script>
	$(function() {
		$('input').iCheck({
			checkboxClass : 'icheckbox_square-blue',
			radioClass : 'iradio_square-blue',
			increaseArea : '20%' // optional
		});
	}); 
	$('.datepicker').datepicker({
	    format: 'dd-mm-yyyy',
	    autoclose: true,
	    todayBtn: "linked",
	    clearBtn: true,
	    todayHighlight: true,
	    toggleActive: true
	});
	//.datepicker("setDate", "0");
</script>
<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.2.0
        </div>
        <strong>Copyright &copy; 2015  </strong> All rights reserved.
        <p class="login-box-msg">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
      </footer>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

</body>
</html>
