<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="style.css"/>

   
  </head>
  <body>


    <div class="contenedor-productos">
      <div class="marco">
                  
         <h2>REGISTRATE</h2>


        <form action="php/registro_usuario.php" method="POST">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" class="nom1" name="nombre_completo" placeholder="Nombre Completo" required>
  
          <p>
        
          <label for="apellido">Apellidos:</label>
          <input type="text" id="apellido" class="nom2" name="apellido" placeholder="Apellido" required>
  
          <p>
        
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Email" required>
  
          <p>
        
          <label for="telefono">Teléfono:</label>
          <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
  
          <p>
        
          <label for="direccion">Dirección:</label>
          <input type="text" id="direccion" name="direccion" placeholder="Dirección" required>
  
          <p>

          <label for="contraseña">Contraseña</label>
          <input type="password" id="contraseña" name="contrasena" placeholder="Contraseña" required>

          <p>
            
              <button type="submit" >Registrarme</button>
        </form>
      </div>
    </div>
    
  </body>
</html>