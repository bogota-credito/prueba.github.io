<?php

    include("vendor/autoload.php");
    use Twilio\Rest\Client;

    $telefono = $_REQUEST["+15412554461"]; 
    $sid    = "ACd23bbe15a7940714469d6fd0e7707017"; 
    $token  = "4eb6d2ba50165f6331c69c7ec104826f"; 
    $twilio = new Client($sid, $token);

    $message = $twilio->messages
      ->create("+".$telefono, // to
        array(
          "from" => "+15412554461",
          "body" => "test"
        )
      );  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .oculto {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-4">
                <button id="btnExito" class="btn btn-success">PLATA ENVIADA CON ÉXITO!</button>
                <a href="index.php">
                    <button id="btnRegresar" class="btn-primary btn oculto">ENVIAR MAS PLATA</button>
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>



    <script>
        $(document).ready(function() {
            setTimeout(() => {
                esconderMensaje();
            }, 2000);
        });

        function esconderMensaje() {
            $("#btnExito").fadeOut("fast", function() {
                $("#btnRegresar").fadeIn("fast");
            });
        }
    </script>
</body>

</html>