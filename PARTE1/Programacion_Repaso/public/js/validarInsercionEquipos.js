function comprobarEquipos() {
  var nombreCaja = document.getElementById('nombre');
  var participantesCaja = document.getElementById('participantes');
  
  //comprobaciones
  if (!nombreCaja.value) {
    alert("El campo NOMBRE no tiene ningun valor");
    return false;
  }
  if (!participantesCaja.value) {
    alert("El campo PARTICIPANTES no tiene ningun valor");
    return false;
  }
  return true;
}
