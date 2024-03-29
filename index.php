<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-black">
        <div class="row mt-5">
            <div class="col-sm-4">
                <form action="mandar-msj.php" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>¿A qué número de teléfono desea pasar la plata?</label>
                                <input type="number" name="telefono" required autocomplete="off" class="form-control" placeholder="Incluye la clave del pais">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>¿Cúanta plata?</label>
                                <input type="number" name="cantidad" required autocomplete="off" step="0.01" class="form-control" placeholder="Escribe el monto">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>¿Motivo?</label>
                                <input type="text" name="motivo" required autocomplete="off" class="form-control" placeholder="Motivo del envio">
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <button class="btn btn-primary">ENVIAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>