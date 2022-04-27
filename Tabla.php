<?php 
    include("conexion.php");  

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($conn,$sql);
?>
<div class="container mt-5">
                <table class="table table-hover" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Email</th>                                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row[codigo]?></th>
                                                <th><?php  echo $row[nombre]?></th>
                                                <th><?php  echo $row[elular]?></th>
                                                 
                                                <th><a href="actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-secondary">Editar</a>
                                              <a href="delete.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a>
                                              </th>
                                                                               
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table> 

</div>
