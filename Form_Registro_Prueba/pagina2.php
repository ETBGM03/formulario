
<?php
    $Primer_Nombre = $_POST['Primer_Nombre'];
    $Segundo_Nombre = $_POST['Segundo_Nombre'];
    $Primer_Apellido = $_POST['Primer_Apellido'];
    $Segundo_Apellido = $_POST['Segundo_Apellido'];
    $email= $_POST['Sexo'];
    $Direccion= $_POST['Direccion'];
    $Sexo= $_POST['Sexo'];
    $Ciudad= $_POST['Ciudad'];
    $Departamento= $_POST['Departamento'];
    $TerminosyCondiciones= $_POST['TerminosyCondiciones'];

?>

<?php
//creamos un objeto para la conexcion con mysqli
$objconexion = mysqli_connect("localhost", "root", "root", "pruebafomr");

//con este condicional verificaremos si nuestra conexion está de manera ideal y optimia para su posterio uso


mysqli_query($objconexion, "insert into registro_cliente (Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Email, Password, Direccion, Sexo, Ciudad, Departamento, TerminosyCondiciones)
    
    values('$_REQUEST[Primer_Nombre]', '$_REQUEST[Segundo_Nombre]', '$_REQUEST[Primer_Apellido]', '$_REQUEST[Segundo_Apellido]', '$_REQUEST[Email]', '$_REQUEST[Password]', '$_REQUEST[Direccion]', '$_REQUEST[Sexo]', '$_REQUEST[Ciudad]', '$_REQUEST[Departamento]', '$_REQUEST[TerminosyCondiciones]')")
    or die('problemas en el select' . mysqli_error($objconexion));

?>