<div class="container">
  <div class="row">
    <h1 class="display-4">Calculo de mercancia</h1>
  </div>
  <hr>
  <div class="row">
    <div class="col-12">
      <h3>Realizar calculo</h3>
      <form>
        <div class="form-row">
          <div class="form-group col-md-11">
            <label for="producto">Seleccione un producto</label>
            <select id="writeProducts" class="form-control">
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-11">
            <label for="valor">Cantidad real esperada</label>
            <input type="number" name="writeReal" class="form-control" value="">
          </div>
        </div>
      </form>
      <button type="submit" class="btn btn-primary" id="calculateMerma">Calcular</button>
    </div>
  </div>
</div>
<div class="modal fade" id="modalCalculate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Calculado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">
        <div class="pt-5">
          <h4>
            <small class="text-muted">Cantidad real esperada: </small>
            <p id="realEsp"></p>
          </h4>
        </div>
        <div class="pt-5">
          <h4>
            <small class="text-muted">Merma calculada: </small>
            <p id="calMerm"></p>
          </h4>
        </div>
        <div class="pt-5">
          <h4>
            <small class="text-muted">Cantidad a comprar: </small>
            <p id="cantCal"></p>
          </h4>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
<?php require_once 'views/footer.php'; ?>
<script type="text/javascript">
fillComboProductsW();
$( "#calculateMerma" ).click(function() {
  obj = {
    query: 'calculateMerma',
    id: $('#writeProducts').find(":selected").val(),
  }
  response = ajaxJson(obj);
  response.done(function ajaxDone(data) {
    console.log(data);
    esp = parseInt($( 'input[name=writeReal]' ).val());
    merm = data[0]['AVG(percent)'] * esp;
    total = esp + (data[0]['AVG(percent)'] * esp);
    console.log(esp);
    $('#modalCalculate').modal('show');
    $("#realEsp").text(esp);
    $("#calMerm").text(merm.toFixed(2));
    $("#cantCal").text(total.toFixed(2));

  });
});
function fillComboProductsW() {
  obj = {
    query: 'SelectProducts',
  }
  response = ajaxJson(obj);
  response.done(function ajaxDone(data) {
    $.each(data, function(i, product){
      $('#writeProducts').append('<option value="' + product.id_products + '">' + product.name + '</option>');
    });
  })
}
</script>
