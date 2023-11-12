<!-- Logout Modal-->
<html>
<body>
  <div class="modal fade" id="EliminarUsuarioModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Realmente quieres eliminar al ID?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"style="text-align: center">
          <strong style="text-align: center"> 
            <?php echo $data['id']; ?>
          </strong>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="eliminar_usuario2.php?id=<?php echo $data['id']; ?>">Borrar</a>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>