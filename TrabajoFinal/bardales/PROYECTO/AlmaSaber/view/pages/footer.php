
  <!-- pie del sistema  -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
      <strong>Copyright &copy; 2016 <a href="http://www.uch.edu.pe/" target="_blank">Universidad de Ciencias y Humanidades</a>.</strong>
  </footer>
  
  
  <div class="control-sidebar-bg"></div>
  
  
</div>
<!--fi del contenedor-->

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="plugins/knob/jquery.knob.js"></script>
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<!--<script src="plugins/morris/morris.js"></script>-->
<!--<script src="dist/js/pages/dashboard.js"></script>-->
<script src="dist/js/demo.js"></script>
<script type="text/javascript" src="bootstrap/js/usuario.js"></script>
<script type="text/javascript" src="bootstrap/js/docente.js"></script>
<script type="text/javascript" src="bootstrap/js/curso.js"></script>
<script type="text/javascript" src="bootstrap/js/grado.js"></script>
<script type="text/javascript" src="bootstrap/js/principal.js"></script>
<script type="text/javascript" src="bootstrap/js/matricula.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

</body>
</html>