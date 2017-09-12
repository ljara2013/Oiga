<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRO</title>
    
   
    
  </head>
  <body >
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form action= "registro.php" method="post">
            <br><br>
            <h1><p class="text-center">REGISTRARSE.</p></h1>
            <br><br>



            <div class="form-group">
              <label for="user">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control" title = "se requiere un usuario" required>
            </div>



            <div class="form-group">
              <label for="pass">apellido1</label>
              <input type="text" name="apellido1" id="apellido1" class="form-control" >
            </div>

            <div class="form-group">
              <label for="pass">apellido2</label>
              <input type="text" name="apellido2" id="apellido2" class="form-control" >
            </div>

            <div class="form-group">
              <label for="pass">e-mail</label>
              <input type="text" name="email" id="email" class="form-control" >
            </div>

            <div class="form-group">
              <label for="pass">clave</label>
              <input type="text" name="clave" id="clave" class="form-control" >
            </div>


           <div class="form-group">
              <label for="pass">telefono</label>
              <input type="text" name="telefono" id="telefono" class="form-control" >
            </div>


            <br><br>
            
            
            <div class="form-group">
              <input type="submit" name="login" id="login" value="guardar"class="btn btn-success">
            </div>
        
           
            
            
            <br>
            <span id="result"></span>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
