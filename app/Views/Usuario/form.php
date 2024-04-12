
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
        <form id="form_usuario" action="/usuarios/update" method="post">
                <input type="hidden" name="id" value="<?php echo (isset($usuario) ? $usuario->id : '' )?>"/>        
                <div class="card card-default">
                        <div class="card-body">
                            <div class="modal-header">
                                <h4 class="modal-title">Editando Usuario, <?php echo (isset($usuario) ? $usuario->nome : '' )?></h4>
                                
                            </div>
                                <div class='row'>
                                    <div class="form-group col-6">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo (isset($usuario) ? $usuario->nome : '' )?>">
                                    </div>
                                    <div class="form-group col-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo (isset($usuario) ? $usuario->email : '' )?>">
                                    </div>

                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-4">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo (isset($usuario) ? $usuario->password : '' )?>">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Perfil</label>
                                        <select name="nivel" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="null">Selecione....</option>
                                            <option  value="1">Administrador</option>
                                            <option  value="2">Padrão</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <a href="/admin/usuarios" class="btn btn-danger">Cancelar</a >
                                    <button type="submit" class="btn btn-success">Editar</button>
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


