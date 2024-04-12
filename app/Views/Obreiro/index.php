
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
              <div class="card-header bg-gray">
                <h3 class="card-title">               
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl-obreiro-new">
                  Adicionar Novo Obreiro
                </button></h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-sm table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>IMG</th>
                    <th>NOME</th>
                    <th>CIM</th>
                    <th>GRAU</th>
                    <th>AÇÕES</th>
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
      $.get("/usuarios/delete/", function(resultado){
              console.log(resultado);
        })
      
      var confirmacao = confirm("Deseja excluir o Usuario: >");
        if (confirmacao) {
            // Redireciona para o link especificado
            window.location.href = "/usuarios/delete/";
        }
        
    });
</script>




