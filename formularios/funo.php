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

<body style="background-color:cornflowerblue">
    <h3 class="mt-4 text-center">Formulario 1</h3>
    <div class="container">
        <form action="pfuno.php?prueba=123" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="mom" placeholder="Tu nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Tu correo" name="email">
            </div>
            <div class="mb-3">
            <label for="prov" class="form-label">Provincia</label>
                <select id="prov" class="form-select" aria-label="Default select example" name="provincia">
                    <option disabled selected>-- Elije una Provincia --</option>
                    <option>Almería</option>
                    <option>Cádiz</option>
                    <option>Sevilla</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Habla sobre ti</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texto"></textarea>
            </div>
            <div>
                <button type='submit' class="btn btn-success"><i class="fas fa-paper-plane"></i> Enviar</button>
                <button type="reset" class="btn btn-warning"><i class="fas fa-broom"></i> Limpiar</button>
            </div>
        </form>
        </form>
    </div>
</body>











</html>