<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
 <link href="/Botones.css/Boton.css" rel="stylesheet" type="text/css"/>
 <link href="/Botones.css/Botonuno.css" rel="stylesheet" type="text/css"/>
 <link href="/css/Registro.css" rel="stylesheet" type="text/css"/>
 <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
 
       
	

</head>  
<body>

   <div class="conatainer">
            <nav class="navbar navbar-expand-lg" style="background-color: black; padding-bottom: 100px">
                <div class="centrado">
                <div class="container-fluid">
                <div class="collapse navbar-collapse" id="menu">
                           <li class="nav-item">
                           <a href="/Index.html"><button class="boton In" type="button" style="font-size: 20px; position: absolute; left: 20%; top: 30px"><span>Inicio</span></button></a></li> 
                       <li class="nav-item">
                           <a href="/php/Objetivos.php"><button class="boton Obj" type="button" style="font-size: 20px; position: absolute; left: 35%; top: 30px"><span>Objetivo</span></button></a>
                        </li>
                        <!--<li class="nav-item">
                            <a href="Registrar.html"><button class="boton Reg" type="button" style="font-size: 20px; position: absolute; left: 50%; top: 30px"><span>Registrarse</span></button></a>
                        </li>-->
                       <li class="nav-item">
                           <a href="/php/Login.php"><button class="boton Login" type="button" style="font-size: 20px; position: absolute; left: 50%; top: 30px">
                                     <span>Iniciar sesión</span></button></a>
                        </li>
                </div>	
             </div>
                </div>
            </nav> 
        </div>		          

    
    
    <section id="sec1">
        <div class="Contenedor-txt">
            <h1 align="center">¡Únete a la familia!</h1>
            <h5 align="center">Sé parte de Friendly People</h5>
          <form class="row g-3">
          <div class="col-md-6">

<label for="validationDefault01" class="form-label">Nombre(s)</label>
<input type="text" class="form-control" name="nombre" id="validationDefault01" value="" required>
</div>
<div class="col-md-6">
<label for="validationDefault02" class="form-label">Apellido(s)</label>
<input type="text" class="form-control" name="apellido" id="validationDefault02" value="" required>
</div>
<div class="col-md-6">
<label for="validationDefault03" class="form-label">Género</label>
<select class="form-select" name="genero" id="validationDefault03" required>
  <option selected disabled value="">Selecciona...</option>
  <option>Masculino</option>
  <option>Femenino</option>
  <option>Prefiero no especificar</option>
</select>
</div>
<div class="col-md-6">
  <label for="validationDefault04" class="form-label">Fecha de nacimiento</label>
  <input type="date" class="form-control" name="fnacimiento" id="fechaNacimiento" placeholder="dd/mm/aaaa" min="1960-01-01" max="2004-12-31" required="">
</div>
<div class="col-md-6">
<label for="validationDefault05" class="form-label">Edad</label>
<input type="number" class="form-control" name="edad" id="Edad"  readonly="">
</div>
<div class="col-md-6">
<label for="validationDefault06" class="form-label">Teléfono</label>
<input type="tel" class="form-control" nmae="telefono" id="validationDefault06" placeholder="Opcional">
</div>
<div class="col-md-6">
  <label for="validationDefault07" class="form-label">Estado</label>
  <input type="text" class="form-control" name="estado" id="validationDefault07" value="Chiapas" disabled="">
</select>
</div>
<div class="col-md-6">
<label for="validationDefault08" class="form-label">Municipio</label>
<select class="form-select" name="municipio" id="validationCustom04" required>
  <option selected disabled value="">Selecciona...</option>
  <option>Acala</option>
  <option>Arriaga</option>
  <option>Cacahoatán</option>
  <option>Chiapa De Corzo</option>
  <option>Comitán De Domínguez</option>
  <option>Huixtla</option>
  <option>Jiquipilas</option>
  <option>Las Margaritas</option>
  <option>Las Rosas</option>
  <option>Mapastepec</option>
  <option>Motozintla</option>
  <option>Ocosingo</option>
  <option>Ocozocoautla De Espinosa</option>
  <option>Palenque</option>
  <option>Pichucalco</option>
  <option>Pijijiapan</option>
  <option>Reforma</option>
  <option>San Cristóbal De Las Casas</option>
  <option>Tapachula</option>
  <option>Tonalá</option>
  <option>Tuxtla Gutiérrez</option>
  <option>Venustiano Carranza</option>
  <option>Villaflores</option>
  </select>
</div>
<div class="col-md-6">
<label for="validationDefault09" class="form-label">Localidad</label>
<input type="text" class="form-control" name="localidad" id="validationDefault09" required>
</div>
<div class="col-md-6">
<label for="validationDefault10" class="form-label">CP</label>
<input type="text" class="form-control" name="cp" id="validationDefault10" required>
</div>
<div class="col-md-6">
<label for="validationDefault11" class="form-label">Dirección</label>
<input type="text" class="form-control" name="direccion" id="validationDefault11" placeholder="" required>
</div>
<div class="col-md-6">
<label for="validationDefaultUsername" class="form-label">Correo Electrónico</label>
<div class="input-group">
  <span class="input-group-text" name="email" id="inputGroupPrepend2">@</span>
  <input type="email" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
</div>
</div>
<div class="col-md-6">
<label for="validationDefault12" class="form-label">Contraseña</label>
<div class="contra">
<span class="icono"><i class="fas fa-eye-slash"></i></span>
<input type="password" class="form-control" name="password" id="validationDefaultPassword" required>
 </div>
</div>
<div class="col-md-6">
<label for="validationDefault12" class="form-label">Confirmar Contraseña</label>
<div class="contra">
<input type="password" class="form-control"  name="repassword" id="validationDefaultPassword" required>
 </div>
</div>



          <div class="col-md-6" class="rol">
              <label for="validationDefault13" class="form-label">¿Tienes alguna discapacidad?</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" name="discapacidad" id="flexRadioDefault1" onclick="mostrarForm()">
<label class="form-check-label" for="flexRadioDefault1">
Sí
</label>
</div>
<div class="form-check">
<input class="form-check-input"  class="radio2" type="radio" name="flexRadioDefault" name="discapacidad" id="flexRadioDefault2" onclick="ocultarForm()">
<label class="form-check-label" for="flexRadioDefault2">
No
</label>
</div>
</div>
   
          <div id="form" class="form">
          <div class="col-md-4">
            <label for="validationDefault12" class="form-label">Tipo de discapacidad</label>
            <select class="form-select" class="CajaBox" name="tdiscapacidad"id="caja">
  <option selected disabled value="">Selecciona...</option>
  <option>Visual</option>
  <option>Auditiva</option>
  <option>Motriz</option>
  <option>Verbal</option>
  <option>Mental</option>
  <option>2 o más</option>
  </select>
</div>
     
          <div class="col-md-6">
               <label for="validationDefault14" class="form-label">Describe tu(s) discapacidad(es) para poder entenderte mejor</label>
<div class="form-floating">
<textarea class="form-control" class="CajaBox" placeholder="Leave a comment here" name="otra" id="caja" style="height: 90px"></textarea>
<label for="floatingTextarea2">¡Lléname!</label>
<br>
<br>
<br>
</div>
          </div>
          </div>
              
             
              
  <div class="col-12">
      <p>¿Ya tienes una cuenta? <a href="/php/Login.php" style="text-decoration: none; padding-bottom: 0">¡Inicia sesión!</a></p>
      <button type="submit" class="btn btn-outline-primary" id="btn">Registrarse</button>
  </div>   
  </form>
  </div>
     <img src="/img/RegistrarSVG.svg">
    </section>
 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>  
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
      
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     

    <script>
        const icono=document.querySelector(".icono");
        
        icono.addEventListener("click", function(){
            const icon=this.querySelector("i");
            
            if(this.nextElementSibling.type=== "password"){
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
                this.nextElementSibling.type = "text";
            }else{
                this.nextElementSibling.type = "password";
                  icon.classList.remove("fa-eye");
                   icon.classList.add("fa-eye-slash");
            }
        }
                );
    </script>
   
    <script>
     function mostrarForm(){
         document.getElementById('form').style.display = 'block';
     }
    </script>
    <script>
        function ocultarForm(){
         document.getElementById('form').style.display = 'none';
     }
    </script>
    
    <script>
    $('#fechaNacimiento').on('change',function (){
        $('#Edad').val(CalcularEdad());
    });  
    
    function CalcularEdad(){
           var fechaSelect = $('#fechaNacimiento').val();
           var fechaNac =new Date(fechaSelect);
           var fechaActual=new Date();
           var Edad=(parseInt((fechaActual-fechaNac)/(1000*60*60*24*365)));
           return Edad;
       }
    </script>
    
</body>
</html>
