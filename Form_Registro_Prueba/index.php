<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Formulario </title>
</head>

<body>
    <div class="form-row col-md-12">
        <form action="pagina2.php" method="post" class="form-horizontal" style="margin:70px auto">
            <div>
                <form>
                    <div class="form-group col-sm-8">
                        <label for="inputAddress2">Nombre</label>
                        <input type="text" name="Primer_Nombre" autofocus class="form-control" id="inputAddress2" placeholder="Digite primer nombre" pattern="[a-zA-Z ]+" minlength="5" maxlength="18" required>
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="inputAddress2">Nombre 2</label>
                        <input type="text" name="Segundo_Nombre" class="form-control" id="inputAddress2" placeholder="Digite segundo nombre" pattern="[a-zA-Z ]+" minlength="5" maxlength="18">
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="inputAddress2">Apellido</label>
                        <input type="text" name="Primer_Apellido" class="form-control" id="inputAddress2" placeholder="Digite primerapellido" required pattern="[a-zA-Z ]+" minlength="5" maxlength="18">
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="inputAddress2">Apellido 2</label>
                        <input type="text" name="Segundo_Apellido" class="form-control" id="inputAddress2" placeholder="Digite segundo apellido" pattern="[a-zA-Z ]+" minlength="5" maxlength="18">
                    </div>

                    <div class="form-row col-md-12">
                        <div class="form-group col-md-8">
                            <label for="inputEmail4">Email</label>
                            <input type="email" name="Email" class="form-control" id="inputEmail4" placeholder="ejemplo@gmail.com" required>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Password</label>
                            <input type="password" name="Password" class="form-control" id="inputPassword4" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="inputAddress">Dirección</label>
                        <input type="text" name="Direccion" class="form-control" id="inputAddress" placeholder="Calle 123 # 90" required>
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="inputAddress">Sexo</label>
                        <div class="form-check form-check-inline">
                            <input name="Sexo" class="form-check-input" type="radio" id="inlineRadio1" value="Hombre" checked>
                            <label class="form-check-label" for="inlineRadio1">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="Sexo" class="form-check-input" type="radio" id="inlineRadio2" value="Mujer">
                            <label class="form-check-label" for="inlineRadio2">Femenino</label>
                        </div>
                    </div>
                    <div class="form-row col-md-8">
                        <div class="form-group">
                            <label for="inputCity">Ciudad</label>
                            <select name="Ciudad" id="inputState" class="form-control" required>
                                <option selected>Ciudad</option>
                                <option>Barranquilla</option>
                                <option>Soledad</option>
                                <option>Neiva</option>
                                <option>Monteria</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Departamento</label>
                            <select name="Departamento" id="inputState" class="form-control" required>
                                <option selected>Departamento</option>
                                <option>Atlantico</option>
                                <option>Antioquia</option>
                                <option>Huila</option>
                                <option>Cordoba</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input name="TerminosyCondiciones" class="form-check-input" type="checkbox" id="gridCheck" value="terminos aceptados" checked required>
                            <label class="form-check-label" for="gridCheck">
                                Acepta términos y condiciones.
                            </label>
                        </div>
                    </div>
                    <button name="Confirmar" type="submit" class="btn btn-primary">Confirmar</button>
                </form>
            </div>


        </form>
    </div>

</body>

</html>