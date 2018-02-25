<html>
<head>
    <title>Prueba de Laravel</title>
</head>
<body>
<form method="post" action="Controller" name="form1">
    <div>
        <h2>Prueba de proyecto</h2>
    </div>
    <div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
        <p>Esta es un prueba</p>
        <input name="txtnome" type="text">
        <input value="Seguir" name="btnSeguir" type="submit">
    </div>
</form>
</body>
</html>