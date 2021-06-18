<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Rubrica Contatti</title>
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
    <?php
include __DIR__ . '/includes/Rubrica.php';
include __DIR__ . '/includes/util.php';
$contatti = Rubrica::select_data();
if (isset($_GET['statocanc']) && $_GET['statocanc'] === 'ok'):
?>
  <div class="alert alert-success" role="alert">Contatto eliminato con successo.</div>
<?php
elseif (isset($_GET['statocanc']) && $_GET['statocanc'] === 'ko'):
?>
  <div class="alert alert-danger" role="alert">Ops! C'è stato un problema, riprova più tardi.</div>
<?php
endif;
if (count($contatti) > 0):
?>

<table class="table table-striped table-dark table-hover table-bordered table-responsive">
  <thead>
  <?php echo get_table_head($contatti[0]); ?>
  </thead>
  <tbody>
  <?php echo get_table_body($contatti); ?>
  </tbody>
</table>
<?php else: ?>
  <p class="alert alert-dark" role="alert">Nessun contatto da mostrare, <a href="/rubrica/inserisci-contatto.php">vuoi aggiungerne uno?</a></p>
<?php endif;?>
  </main>
</body>
</html>
