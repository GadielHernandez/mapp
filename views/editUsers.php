<div class="container">
  <div class="row">
    <h1 class="display-4">Control de usuarios</h1>
  </div>
  <hr>
  <div class="row">
    <div class="col-12">
      <h3>Control de permisos</h3>
      <form>
        <div class="form-row">
          <div class="form-group col-md-11">
            <label for="producto">Seleccione un usuario</label>
            <select id="userToEdit" class="form-control">
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-11">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="privileges" id="write" value="3" >
              <label class="form-check-label" for="write">
                Registrar productos y mermas
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="privileges" id="read" value="2">
              <label class="form-check-label" for="read">
                Consulta de predicciones
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="privileges" id="admin" value="1">
              <label class="form-check-label" for="admin">
                Administrador
              </label>
            </div>
          </div>
        </div>
      </form>
      <button type="submit" class="btn btn-primary" id="savePrivilege">Guardar</button>
    </div>
  </div>
</div>
<<?php require_once 'views/footer.php'; ?>
<script type="text/javascript">
  $( document ).ready(function() {
    fillComboUsers();

    function fillComboUsers() {
      obj = {
        query: 'SelectUsers',
      }
      response = ajaxJson(obj);
      response.done(function ajaxDone(data) {
        $.each(data, function(i, user){
          $('#userToEdit').append('<option value="' + user.user_id + '">' + user.name + '</option>');
          console.log(parseInt(user.privileges));
          switch (parseInt(user.privileges)) {
            case 1:
              $('#admin').prop('checked', true);
              break;
            case 2:
              $('#read').prop('checked', true);
              break;
            case 3:
              $('#write').prop('checked', true);
              break;
          }
        });
      })
    }

    $( "#savePrivilege" ).click(function() {
      var idUser = $('#userToEdit').find(":selected").val();
      var privileges = $('input[name=privileges]:checked').val();
      obj = {
        query: 'updateUser',
        id: idUser,
        privileges: privileges
      }
      response = ajaxJson(obj);
      response.done(function ajaxDone(data) {
        console.log('done');
      });
    });
  });
</script>
