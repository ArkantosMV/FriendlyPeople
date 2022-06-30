<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Login</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
 <link href="/Botones.css/Boton.css" rel="stylesheet" type="text/css"/>
 <link href="/Botones.css/Botonuno.css" rel="stylesheet" type="text/css"/>
 <link href="/css/Login.css" rel="stylesheet" type="text/css"/>
 <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

</head>  

<body>
  <div class="conatainer">
            <nav class="navbar navbar-expand-lg" style="background-color: black; padding-bottom: 100px">
             
                <div class="collapse navbar-collapse" id="menu">
                          <li class="nav-item">
                           <a href="/Index.html"><button class="boton In" type="button" style="font-size: 20px; position: absolute; left: 20%; top: 30px"><span>Inicio</span></button></a></li> 
                       <li class="nav-item">
                           <a href="/php/Objetivos.php"><button class="boton Obj" type="button" style="font-size: 20px; position: absolute; left: 35%; top: 30px"><span>Objetivo</span></button></a>
                        </li>
                        <li class="nav-item">
                            <a href="/php/Registrar.php"><button class="boton Reg" type="button" style="font-size: 20px; position: absolute; left: 50%; top: 30px"><span>Registrarse</span></button></a>
                        </li>
                       <!--<li class="nav-item">
                           <a href="Login.html"><button class="boton Login" type="button" style="font-size: 20px; position: absolute; left: 65%; top: 30px">
                                     <span>Iniciar sesión</span></button></a>
                        </li>-->
                </div>	
            </nav> 
        </div>
    
     <section id="sec1">
        <div class="Contenedor-txt">
            <h1 align="center">Inicio de sesión</h1>
            <h5 align="center">Ingresa tus datos para acceder a tu cuenta</h5>
            <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
    <input type="email" placeholder="ejemplo@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" placeholder="..." class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    
    <p>¿No tienes una cuesta? <a href="/php/Registrar.php" style="text-decoration: none">¡Regístrate!</a></p>
  </div>
                <button type="submit" class="btn btn-primary"> <a href="HomeBeta.html" style="text-decoration: none; color: white">Ingresar</a></button>
  </form>
            
        </div>
              
         <img src="/img/LoginSVG.svg">
    </section>
    
  <!-- <form class="formulario">
        <center>
    <div>
                <img src="https://img.icons8.com/cotton/2x/login-rounded-right.png" width="100" height="90">  
              </div> 
        </center>
    <h1>Login</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="COREEO ELECTRONICO">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="CONTRASEÑA">
        
         </div>
         <input type="submit" value="Login" class="button">
         
         <p>Inicia sesión y ¡continua con tu ayuda!.</p>
         <p>Forma parte de la familia "Friendly People" ¡y empieza tu ayuda! <a class="link" href="Registrar.html">Registrarse </a></p>
     </div>  
     </form>  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>  
</body>
</html>
