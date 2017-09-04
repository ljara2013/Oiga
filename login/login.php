<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    
   
    
  </head>
  <body >
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form action= "controlador/login.php" method="post">
            <br><br>
            <h1><p class="text-center">Ingreso a la Aplicación.</p></h1>
            <br><br>



            <div class="form-group">
              <label for="user">Usuario</label>
              <input type="text" name="user" id="user" class="form-control" title = "se requiere un usuario" required>
            </div>



            <div class="form-group">
              <label for="pass">Contraseña</label>
              <input type="password" name="pass" id="pass" class="form-control" title = "se requiere contraseña" required>
            </div>
            <br><br>
            
            
            <div class="form-group">
              <input type="submit" name="login" id="login" value="Ingresar"class="btn btn-success">
            </div>
            
            
            <br>
            <span id="result"></span>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>