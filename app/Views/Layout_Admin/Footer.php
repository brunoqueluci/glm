
<footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="">GLM - Gerenciamento de Lojas Maçônicas</a>.</strong>
    All rights reserved.
    <!-- 
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div>
-->
  </footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/') ?>js/adminlte.js"></script>

<script src="<?php echo base_url('assets/') ?>js/pages/dashboard3.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url('assets/') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>


<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/') ?>js/pages/dashboard2.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- <script src="<?php echo base_url('assets/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
 -->
<script src="<?php echo base_url('assets/') ?>plugins/select2/js/select2.full.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/toastr/toastr.min.js"></script>
</body>
</html>




<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [ "csv", "excel", "pdf", "print"]
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


<div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Usuario - </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                 <!-- form start -->
                 <form id="form_usuario_session" action="/usuarios/update" method="post">
                 <input type="hidden" name="id" value=""/>  
                    <div class="card-body">
                      <div class='row'>
                        <div class="form-group col-6">
                          <label for="nome">Nome</label>
                          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="">
                        </div>
                        <div class="form-group col-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="" >
                          </div>
                      </div>
                     
                      <div class="row">
                          <div class="form-group col-6">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="">
                          </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                <label>Nível</label>
                                <select name="nivel" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="null">Selecione....</option>
                                    <option  value="1">Administrador</option>
                                    <option  value="2">Padrão</option>
                                </select>
                                </div>
                          </div>
                      </div>
                        
                </div>
                      
                     
                    <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success" onclick="enviarFormulario()">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>


<script>
  function enviarFormulario() {
      var form = document.getElementById("form_usuario_session");
      form.submit();

  }

  
 
</script>

<?php $mensagem = session()->getFlashdata('mensagem'); ?>

<?php if(!empty($mensagem)) { ?>
  <script>
     var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
          icon: "<?php echo $mensagem['type'] ?>",
          title: "<?php echo $mensagem['mensagem'] ?>"
      })
  </script>
<?php }?>
