<?php
$base = "";
require 'config/config.php';
?>
<!doctype html>
<html lang="en">
  <body>
    <?php include_once 'views/header.php'; ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-4">
          <form class="mt-5">
            <div class="form-group">
              <h2 class="">Please sign in</h2>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required autofocus>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
            </div>
          </form>
          <button class="btn btn-lg btn-primary btn-block sign-in" type="submit">Sign in</button>
        </div>
      </div>
    </div> <!-- /container -->
  </body>
  <?php include_once 'views/footer.php'; ?>
  <script type="text/javascript">
  $('.sign-in').click(function(){
    console.log('click');
    var obj = {
      email: $("input[type='email']").val(),
      password: $("input[type='password']").val()
    }
    var response = ajaxJson(obj);
    response
    .done(function ajaxDone(data) {
      //console.log(data);
  		window.location = data.redirect;
  	})
    .fail(function ajaxFailed(e) {
  	    // This failed
  	    console.log(e);
  	})
  	.always(function ajaxAlwaysDoThis(data) {
  		// Always do
  		console.log('Always');
  	})
  });

  function ajaxJson(dataObj) {
    return $.ajax({
      type: 'POST',
      url: 'ajax/login.php',
      data: JSON.stringify(dataObj),
      contentType: "application/json; charset=utf-8",
      success: function(resp) {
                data = resp;
              }
    });
  }
  </script>
</html>
