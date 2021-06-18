<?php
include __DIR__ . '/includes/Rubrica.php';
include __DIR__ . '/includes/util.php';
$args = array(
    'id' => $_GET['id'],
);
$contatto = Rubrica::select_data($args);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $contatto[0]['Nome']; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
  <header class="container">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Rubrica</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/rubrica">Tutti i Contatti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/rubrica/inserisci-contatto.php">Inserisci Contatto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="container">
  <div class="d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center" >
    <?php $hash = md5($contatto[0]['email']);?>
    <div class="d-inline-block me-3 rounded bg-light overflow-hidden">
      <img src="https://gravatar.com/avatar/<?php echo $hash; ?>?s=400&d=robohash&r=x" alt="avatar di <?php echo $contatto[0]['Nome']; ?>" width="64" />
    </div>
    <h1 class="d-inline-block"><?php echo $contatto[0]['Nome']; ?></h1>
    </div>
    <div>
      <a class="btn btn-primary" href="/rubrica/modifica-contatto.php?id=<?php echo $_GET['id']; ?>">Modifica Contatto</a>
      <a class="btn btn-outline-danger" href="/rubrica/includes/cancella-contatto.php?id=<?php echo $_GET['id']; ?>">Cancella Contatto</a>
    </div>
  </div>
  <hr />
  <table class="table table-striped table-dark table-hover table-bordered table-responsive">
    <thead>
    <?php echo get_table_head($contatto[0]); ?>
    </thead>
    <tbody>
    <?php echo get_table_body($contatto); ?>
    </tbody>
  </table>
  </main>
</body>
</html>




