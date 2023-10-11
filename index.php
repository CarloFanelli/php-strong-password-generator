<!-- Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
 -->
<?php
include __DIR__ . '/functions.php';

var_dump($_GET);

if (isset($_GET['password_length'])) {

    $password = generatePsw($_GET['password_length']);

    session_start();

    $_SESSION['password'] = $password;
}


?>

<!doctype html>
<html lang="en">

<head>
    <title>Password Generator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <div class="container">
            <form class="py-4 m-4" method="GET" action="./password.php">
                <!-- action="./password.php" -->
                <div class="mb-3 row">
                    <label for="password_length" class="col-4 col-form-label">LUNGHEZZA</label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="password_length" id="password_length" placeholder="lunghezza">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="offset-sm-4 col-sm-8">
                        <button type="submit" class="btn btn-primary">Genera</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-6">
                    <?php if (isset($_GET['password_length'])) : ?>
                        <h6>la tua password da <?php echo $_GET['password_length']; ?> caratteri:</h6>
                        <p class="text-wrap"><?php echo $password; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>