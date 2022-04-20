<?php include("index.php");?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Registrar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         
                    <form action="Guardar_usuario.php" method="POST">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Código</label>
                            <div class="col-sm-10">
                            <input type="number" name="user_code" class="form-control"  placeholder="codigo">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Cedula</label>
                            <div class="col-sm-10">
                            <input type="number" name="user_cedula" class="form-control"  placeholder="cedula">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                            <input type="text" name="user_name" class="form-control"  placeholder="nombre">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10">
                            <input type="number" name="user_celular" class="form-control"  placeholder="celular">
                            </div>
                        </div>
                       

                            <input type="submit" class="btn btn-success" name="Guardar_usuario" value="Registrar">
                        </div>
                        
           
                    
                </div>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>