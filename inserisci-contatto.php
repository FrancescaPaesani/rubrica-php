<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aggiungi Contatto</title>
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
    <?php
if (isset($_GET['stato']) && $_GET['stato'] === 'ok'):
?>
      <div class="alert alert-success" role="alert">Contatto aggiunto con successo.</div>
    <?php
elseif (isset($_GET['stato']) && $_GET['stato'] === 'ko'): ?>
      <div class="alert alert-danger" role="alert">Ops! C'è stato un problema, riprova più tardi.</div><?php
endif;
?>
    <form action="includes/contatti.php" method="POST" class="container">
    <div class="row mb-3">
      <div class="col">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" required>
      </div>
      <div class="col">
        <label for="telefono" class="form-label">Numero di Telefono</label>
        <input type="tel" class="form-control" name="telefono" id="telefono" required>
      </div>
    </div>
    <h2 class="my-3">Informazioni Aggiuntive</h2>
      <div class="row mb-3">
      <div class="col">
        <label for="organizzazione" class="form-label">Organizzazione</label>
        <input type="text" name="organizzazione" id="organizzazione" class="form-control">
      </div>
      <div class="col">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <label for="indirizzo" class="form-label">Indirizzo</label>
        <input type="text" name="indirizzo" id="indirizzo" class="form-control">
      </div>
      <div class="col">
        <label for="compleanno" class="form-label">Compleanno</label>
        <input type="date" name="compleanno" id="compleanno" class="form-control">
      </div>
    </div>

      <input type="submit" class="btn btn-primary" value="Aggiungi Contatto">
    </form>
  </main>
</body>
</html>
