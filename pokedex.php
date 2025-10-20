<?php 
include("core/funciones.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pokédex</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="ico.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid p-5 bg-danger text-white text-center">
  <h1>Pokédex 1.0</h1>
  <p><?php 
			$total = contarPokemon();
			echo "Hay un total de $total Pokémon en tu Pokédex.";
     
  
  ?>
</div>

<div class="container mt-5">
  <div class="p-4 bg-light rounded shadow-sm">
    <h4 class="text-primary fw-bold mb-3">Accediendo a tu base de datos de Pokémon 
  
 </h4>
   
  
    
  </div>
</div>
  
<div class="container mt-3">
  <h4>
    
</h4>
      
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Categoría</th>
        <th>Tipo</th>
        <th>Peso</th>
        <th>Altura</th>
        <th>Imagen</th>
      </tr>
    </thead>
    <tbody>
    <?php 
		
		mostrarPokemon();
    ?>
    
  
    </tbody>
  </table>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
  <div class="container">
    <p class="mb-1">© 2025 Pokédex. CES Ramón y Cajal. ASIR. IAW.  Todos los derechos reservados.</p>
    
  </div>
</footer>


</body>
</html>
