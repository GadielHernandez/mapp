<div class="container">
  <div class="row">
    <h1 class="display-4">Productos</h1>
  </div>
  <hr>
  <div class="row">
    <div class="col-12">
      <h3>Registrar merma</h3>
      <div id="mermaAlert" class="alert alert-success" role="alert"  style="display: none;">
        Guardado!
      </div>
      <form>
        <div class="form-row">
          <div class="form-group col-md-11">
            <label for="producto"></label>
            <select id="addMermaProduct" class="form-control">
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="total">Cantidad trabajada</label>
            <input type="number" class="form-control" name="addMermaTotal" placeholder="">
          </div>
          <div class="form-group col-md-4">
            <label for="merma">Merma obtenida</label>
            <input type="number" class="form-control" name="addMermaObt" placeholder="">
          </div>
          <div class="form-group col-md-3">
            <label for="med">Medida</label>
            <select id="med" class="form-control">
              <option selected>Kg</option>
              <option>Gramos</option>
              <option>Cajas</option>
            </select>
          </div>
        </div>
      </form>
      <button id="addMerma" type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-12">
      <h3>Registrar producto</h3>
      <div id="addAlert" class="alert alert-success" role="alert"  style="display: none;">
        Registrado!
      </div>
      <form>
        <div class="form-row">
          <div class="form-group col-md-11">
            <label for="name">Nombre del producto</label>
            <input type="text" name="addProdName" class="form-control" value="">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-11">
            <label for="desc">Descripcion</label>
            <textarea name="addProdDesc" class="form-control" rows="5" cols="80"></textarea>
          </div>
        </div>
      </form>
      <button id="addProduct" type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</div>
</body>
<<?php require_once 'views/footer.php'; ?>
<script type="text/javascript">
  $( document ).ready(function() {

    fillComboProducts();

    function fillComboProducts() {
      obj = {
        query: 'SelectProducts',
      }
      response = ajaxJson(obj);
      response.done(function ajaxDone(data) {
        $.each(data, function(i, product){
          $('#addMermaProduct').append('<option value="' + product.id_products + '">' + product.name + '</option>');
        });
      })
    }

    $( "#addProduct" ).click(function() {
      obj = {
        query: 'InsertProducts',
        name: $( 'input[name=addProdName]' ).val(),
        description: $( 'textarea[name=addProdDesc]' ).val(),
      }
      response = ajaxJson(obj);
      response.done(function ajaxDone(data) {
        console.log("here");
        $("#addAlert").show(1000);
        $("#addAlert").delay(3000).hide(1000);
        fillComboProducts();
      })
    });

    $( "#addMerma" ).click(function() {
      var total = parseInt($( 'input[name=addMermaTotal]' ).val());
      var obtenida = parseInt($( 'input[name=addMermaObt]' ).val());
      var percent = obtenida/total;
      obj = {
        query: 'InsertMerma',
        percent: percent,
        id: $('#addMermaProduct').find(":selected").val(),
      }
      response = ajaxJson(obj);
      response.done(function ajaxDone(data) {
        $("#mermaAlert").show(1000);
        $("#mermaAlert").delay(3000).hide(1000);
      })
    });

  });
</script>
