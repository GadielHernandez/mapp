<div class="container-fluid">
  <div class="row h-100">
    <div class="col-md-2 col-sm-12 bg-light nav-left">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-products" role="tab" aria-controls="v-pills-profile" aria-selected="false">Productos</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-calculate" role="tab" aria-controls="v-pills-messages" aria-selected="false">Calcular</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-users" role="tab" aria-controls="v-pills-settings" aria-selected="false">Usuarios</a>
      </div>
    </div>
    <main class="col-sm-12 ml-sm-auto col-md-10 pt-3" role="main">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="container">
            <div class="row">
              <h1 class="display-4">Bienvenido</h1>
            </div>
            <hr>
            <div class="row">
              <div class="col-12">
                <h3>Pructos registrados</h3>
                <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                    <tr>
                      <td>Producto ejemplo</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <?php include 'views/writeView.php'; ?>
        </div>
        <div class="tab-pane fade" id="v-pills-calculate" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <?php include 'views/readView.php'; ?>
        </div>
        <div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-settings-tab">

        </div>
      </div>
    </main>
  </div>
</div>
