function validar() {
  var nombreCaja = document.getElementById('nombre');

  //comprobaciones
  if (!nombreCaja.value) {
    alert("El campo NOMBRE no tiene ningun valor");
    return false;
  }
  return true;
}
