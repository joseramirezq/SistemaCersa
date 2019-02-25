
<script src="vistas/vendors/js/vendor.bundle.base.js"></script>
<script src="vistas/vendors/js/vendor.bundle.addons.js"></script>
<script src="vistas/js/off-canvas.js"></script>
<script src="vistas/js/misc.js"></script>
<script src="vistas/js/chart.js"></script>
 
<script src="vistas/js2/js/lib/data-table/datatables.min.js"></script>
<script src="vistas/js2/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="vistas/js2/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="vistas/js2/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="vistas/js2/js/lib/data-table/jszip.min.js"></script>
<script src="vistas/js2/js/lib/data-table/vfs_fonts.js"></script>
<script src="vistas/js2/js/lib/data-table/buttons.html5.min.js"></script>
<script src="vistas/js2/js/lib/data-table/buttons.print.min.js"></script>
<script src="vistas/js2/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="vistas/js2/js/init/datatables-init.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#bootstrap-data-table-export').DataTable();
} );
</script>


<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vistas/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="vistas/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>

