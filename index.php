<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>


    <div class="container mt-5">
        <h1>Registro de Usuario</h1>
        <form <label for=" exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Repita Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword2">
            </div>
            <div class="mb-3">

                <label for="roles">Seleccione Rol:

                    <select>
                        <option value="admin"></option>
                        <option value="user"></option>
                    </select>

            </div>


            <button type="submit" class="btn btn-primary">Resgitrar Usuario</button>

        </form>
    </div>

</body>

</html>