<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<fieldset>
  <legend>Datos personales</legend>
  <p>Nombre: <input type="text" name="nombre" size="30"></p>
  <p>Edad: <input type="number" name="edad"></p>
</fieldset>

<fieldset>
  <legend>Cultura general</legend>
  <p>Capital de Noruega:
    <input type="radio" name="p1" value="1"> Copenhague
    <input type="radio" name="p1" value="2"> Helsinki
    <input type="radio" name="p1" value="3"> Oslo
  </p>
  <p>Fecha de la Revolución francesa:
    <input type="radio" name="p2" value="1"> 1492
    <input type="radio" name="p2" value="2"> 1789
    <input type="radio" name="p2" value="2"> 1917
  </p>
</fieldset>
</body>
</html>