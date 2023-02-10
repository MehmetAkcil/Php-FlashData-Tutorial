<?php
    require 'function.php';
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php FlashData - Tek Seferlik Oturum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</head>
<body class="d-flex align-items-center justify-content-center bg-light" style="height: 100vh">

<div class="container my-5">
    <div class="col-md-5 mx-auto">
        <div class="bg-white p-3 rounded-3 border">
            <form action="submit.php" method="post">
                <div class="mb-3">
                    <h3 class="text-center">
                        Password Reset
                    </h3>
                </div>
                <? if(hasFlashData('error')) : ?>
                <div class="mb-3">
                    <div class="alert alert-danger">
                        <?= getFlashData('error') ?>
                    </div>
                </div>
                <? endif; ?>
                <? if(hasFlashData('success')) : ?>
                <div class="mb-3">
                    <div class="alert alert-success">
                        <?= getFlashData('success') ?>
                    </div>
                </div>
                <? endif; ?>
                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email
                    </label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>