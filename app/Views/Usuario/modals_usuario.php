<div class="modal fade" id="modal-xl-obreiro-new">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><?php echo $modal_title ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                 <!-- form start -->
                 <form id="form_usuario" action="/usuarios/create" method="post">
                    <div class="card-body">
                      <div class='row'>
                        <div class="form-group col-6">
                          <label for="nome">Nome</label>
                          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" >
                        </div>
                        <div class="form-group col-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
                          </div>
                      </div>
                     
                      <div class="row">
                          <div class="form-group col-6">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" >
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
      var form = document.getElementById("form_usuario");
      form.submit();

  }

  
 
</script>