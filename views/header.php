
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Merma</title>

  <!-- Bootstrap core CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">mapp</a>
    <?php if (isset($_SESSION['user_id'])): ?>
      <div class="my-2 my-lg-0">
        <button onclick="location.href='logout.php';" type="button" class="btn btn-dark"><i class="material-icons">power_settings_new</i></button>
      </div>
    <?php endif; ?>
  </nav>
