<div class="container-fluid">
  <div class="row h-100">
    <div class="col-md-2 col-sm-12 bg-light nav-left">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" >Home</a>
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
                <table id="tableProducts" class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th></th>
                    </tr>
                  </thead>
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

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Historico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <canvas id="chart" width="100px" height="100px"></canvas>
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
$( document ).ready(function() {
    fillTableProducts();

    $( "#v-pills-home-tab" ).click(function() {
      fillTableProducts();
    })

    $(document).on ("click", ".recordProduct", function() {
      var id = $(this).attr('id');
      $('#exampleModalCenter').modal('show');
    });

    function setChart(data,cnt) {
      var watts = [];
      var volts = [];
      var amps = [];
      var power = [];
      var lbs = [];
      $("#chart").remove();
      $("#containerChart").append('<canvas id="chart" width="100px" height="100px"></canvas>');
      //totalRead = cnt + 19;
      i = data.length - 1;
      n = 0;
      offMeter = 0;
      while (i>= 0) {
        //if((parseInt(read.kWh_Tot) + parseInt(read.RMS_Volts_Ln_1) + parseInt(read.Amps_Ln_1) + parseInt(read.Power_Factor_Ln_1)) > 0) {
        //$.each(data, function(i, read){
        console.log(i);
          if(parseInt(data[i].status)  >= 0){
            lbs.push(data[i].timestamp.substring(11, 16));
            watts.push(parseFloat(data[i].watts_tot));
            volts.push(parseFloat(data[i].volt_tot));
            amps.push(parseFloat(data[i].amp_tot));
            power.push(parseFloat(data[i].power_factor));
          }
          i = i - 1;
        //})
      }
        var ctx = document.getElementById("chart").getContext("2d");
        var chart = new Chart(ctx, {
          type: 'line',
        data: {
            labels: lbs,
            datasets: [{
                label: "Watts ",
                fill: false,
                borderColor: 'rgb(255, 247, 61)',
                data: watts,
            },
            {
                label: "Volts",
                fill: false,
                borderColor: 'rgb(14, 214, 189)',
                data: volts,
            },
            {
                label: "Amps",
                fill: false,
                borderColor: 'rgb(255, 99, 132)',
                data: amps,
            },
            {
                label: "Power factor ",
                fill: false,
                borderColor: 'rgb(54, 182, 49)',
                data: power,
            }
          ]
        },

        // Configuration options go here
        options: {}
        });

    }
    function fillTableProducts() {
      obj = {
        query: 'SelectProducts',
      }
      response = ajaxJson(obj);
      response.done(function ajaxDone(data) {
        console.log(data);
        $("#tbBodyProducts").remove();
        $("#tableProducts").append('<tbody id ="tbBodyProducts"');
        $.each(data, function(i, product){
          $("#tbBodyProducts").append('<tr><td >' + product.name + '</td><td>' + product.description + '</td><td><button type="button" class="btn btn-primary recordProduct" id = "' + product.id_products + '"><i class="material-icons" >bar_chart</i></button></td></tr>');
        });
      })
    }

});
</script>
