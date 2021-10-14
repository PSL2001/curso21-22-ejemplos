<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ejemplo</title>
</head>

<body style="background-color: blanchedalmond;">
    <div class="container mt-4">
        <form name="as" action="pfdos.php" method="POST">
            <p class="mb-2"><b>Elige una capital</b></p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Madrid" id="id1" name="prov[]">
                <label class="form-check-label" for="id1">
                    Madrid
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="París" id="id2" name="prov[]">
                <label class="form-check-label" for="id2">
                    París
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Londres" id="id3" name="prov[]">
                <label class="form-check-label" for="id3">
                    Londres
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Berlin" id="id4" name="prov[]">
                <label class="form-check-label" for="id4">
                    Berlin
                </label>
            </div>
            <div class="mt-4">
                <select class="form-select" multiple aria-label="multiple select example" name="prov1[]">
                    <option selected disabled>-- Elige tus provicias --</option>
                    <option>Madrid</option>
                    <option>París</option>
                    <option>Londres</option>
                    <option>Berlín</option>
                </select>
            </div>
            <div class="form-check mt-4">
                <p class=mb-2><b>¿Has visitado realmente las capitales?</b></p>
                <input class="form-check-input" type="radio" name="rb" id="rb1" value="Si">
                <label class="form-check-label" for="rb1">
                    Si
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rb" id="rb2" value="No">
                <label class="form-check-label" for="rb2">
                    No
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rb" id="rb3" value="No sabe">
                <label class="form-check-label" for="rb3">
                    No Sabe/No Contesta
                </label>
            </div>
            <div class="mt-4">
                <button type='submit' class="btn btn-success"><i class="fas fa-paper-plane"></i> Enviar</button>
                <button type="reset" class="btn btn-warning"><i class="fas fa-broom"></i> Limpiar</button>
            </div>
        </form>
    </div>

</body>

</html>