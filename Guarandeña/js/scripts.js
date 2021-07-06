$( window ).on( "load", function() {
   $('#contenedor').load('assets/home.html');
})
$('#tienda').on('click', function() {
   $('#contenedor').load('assets/tiendas.html');
})
$('#home').on('click', function() {
   $('#contenedor').load('assets/home.html');
})
$('#servicios').on('click', function() {
   $('#contenedor').load('assets/servicios.html');
})
$('#nuevos').on('click', function() {
   $('#contenedor').load('assets/nuevos.html');
})
$('#ropa').on('click', function() {
   $('#contenedor').load('assets/galeriaProductos.html');
})
$('#agregarTiendas').on('click', function() {
   $('#contenedorAdministrador').load('assets/agregarTienda.php');
})
$('#agregarLocales').on('click', function() {
   $('#contenedorAdministrador').load('assets/agregarLocales.php');
})