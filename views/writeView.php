<div class="container">
  <div class="row">
    <h1 class="display-4">Productos</h1>
  </div>
  <hr>
  <div class="row">
    <div class="col-12">
      <h3>Registrar merma</h3>
      <form>
        <div class="form-row">
          <div class="form-group col-md-11">
            <label for="producto"></label>
            <select id="producto" class="form-control">
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="total">Cantidad trabajada</label>
            <input type="number" class="form-control" id="total" placeholder="">
          </div>
          <div class="form-group col-md-4">
            <label for="merma">Merma obtenida</label>
            <input type="number" class="form-control" id="merma" placeholder="">
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
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-12">
      <h3>Registrar producto</h3>
      <form>
        <div class="form-row">
          <div class="form-group col-md-11">
            <label for="name">Nombre del producto</label>
            <input type="text" name="name" class="form-control" value="">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-11">
            <label for="desc">Descripcion</label>
            <textarea name="name" class="form-control" rows="5" cols="80"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>
</div>
