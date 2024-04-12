
<?php echo$this->include('Layout_Admin/Header') ?>

<div class="wrapper">

  <?php echo$this->include('Layout_Admin/Navbar') ?>

  <!-- Main Sidebar Container -->

  <?php echo$this->include('Layout_Admin/Sidebar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php echo$this->include('Layout_Admin/Breadcrump') ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form id="form_usuario" action="/usuarios/deletar" method="post">
                <input type="hidden" name="id" value="<?php echo (isset($usuario) ? $usuario->id : '' )?>"/>        
                <div class="card card-default">
                        <div class="card-body">
                            <div class="modal-header">
                                <h4 class="modal-title"> Deseja Excluir o Usuario ( <?php echo (isset($usuario) ? $usuario->nome : '' )?> )</h4>  
                            </div>
                            <input type="hidden" name="id" value="<?php echo (isset($usuario) ? $usuario->id : '' )?>"/>                            
                                <div class="modal-footer justify-content-between">
                                    <a href="/admin/usuarios" class="btn btn-danger">Cancelar</a >
                                    <button type="submit" class="btn btn-success">Excluir</button>
                                </div>
                        </div>
                    </div>
            </form>
           
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php echo$this->include('Layout_Admin/Footer') ?>


  <?php echo $this->include('Usuario/modals_usuario')  ?>


