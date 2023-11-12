<!-- Logout Modal-->
<html>
<body>
  <div class="modal fade" id="EliminarATModal<?php echo $data['FOLIO']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Realmente quieres eliminar al FOLIO?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"style="text-align: center">
          <strong style="text-align: center"> 
            <?php echo $data['FOLIO']; ?>
          </strong>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="eliminar_alumno2.php?FOLIO=<?php echo $data['FOLIO']; ?>">Borrar</a>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>