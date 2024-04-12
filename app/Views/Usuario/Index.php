
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


        <!-- Info boxes -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">               
                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg-usuario-new">
                  Adicionar Novo Usuario
                </button></h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Nível</th>
                    <th>Data de Cadastro</th>
                    <th>Ações</th>
                  </tr>
                  </thead>
                  <tbody>
                     
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php echo$this->include('Layout_Admin/Footer') ?>
  <?php echo $this->include('Usuario/modals_usuario')  ?>


  <script>
    // Seleciona o botão
    var botao = document.getElementById("delete_usuario>");

    // Adiciona um evento de clique ao botão
    
    botao.addEventListener("click", function() {
      $.get("/usuarios/delete/<?php echo $usuario->id; ?>", function(resultado){
              console.log(resultado);
        })
      
      var confirmacao = confirm("Deseja excluir o Usuario: <?php echo $usuario->nome; ?>");
        if (confirmacao) {
            // Redireciona para o link especificado
            window.location.href = "/usuarios/delete/<?php echo $usuario->id; ?>";
        }
        
    });
</script>




