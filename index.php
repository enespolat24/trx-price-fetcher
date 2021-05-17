<?php include "script.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Tron fiyat çekici</title>
    <style>
    html, body {
        height: 100%;
    }
    </style>
</head>
<body>
<div class="h-100 bg-dark d-flex align-items-center">
    <div class="card mx-auto align-items-center" style="width:20rem;">
        <div class="card-body text-center">
            <h1>TRON <span class="text-success">-></span> TRY</h1>
            <hr class="bg-success">
            <h2 class = "d-flex justify-content-center"><?php echo $receivedData;?>₺</h2>
            <form action="fileLogger.php" method="POST">
            <input name="receivedInput" type="hidden" value="<? echo $receivedData;?>">
            <button class="btn btn-success">LOG TO THE FILE</button>
            </form>
            
        </div>
    </div>
</div>
</body>
</html>