<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Formulario Ingreso</title>
</head>

<body>
    <div class="form-row col-md-12">
        <form action="pagina2.php" method="post" class="form-horizontal" style="margin:70px auto">
            <div >
                <form >
                    <div class="form-group col-sm-8">
                        <label for="inputAddress2">Nombre</label>
                        <input type="text" class="form-control" id="inputAddress2" 
                        placeholder="Digite nombre" 
                        autofocus 
                        required=''
                        pattern="[a-zA-Z]+">
                        
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="inputAddress2">Apellido</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Digite su apellido" required pattern="[a-z]{8}" >
                    </div>
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-8">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" required>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="inputAddress">Dirección</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="inputAddress">Sexo</label>
                        <div class="input-group-text">
                            <input type="radio" placeholder="Masculino" aria-label="Radio button for following text input" placeholder="Masculino">
                        </div>

                        <div class="input-group-text">
                            <input type="radio" aria-label="Radio button for following text input" placeholder="Masculino">
                        </div>
                    </div>
                    <div class="form-row col-md-8">
                        <div class="form-group">
                            <label for="inputCity">Ciudad</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>Barranquilla</option>
                                <option>Soledad</option>
                                <option>Neiva</option>
                                <option>Montería</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Departamento</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>Atlántico</option>
                                <option>Antioquia</option>
                                <option>Huila</option>
                                <option>Cordoba</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Acepta términos y condiciones.
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>


        </form>
    </div>

</body>

</html>