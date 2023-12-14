<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <link rel="stylesheet" href="css/tp.css">
</head>
<body class="d-flex flex-column min-vh-100">

   <?php include 'pages/header_admin.php'; ?>
    
    <main class="container flex-grow-1">
        <div>
            <h3>Agregar Nuevo Orador</h3>
        </div>
        <div>
            <div class="container">
                
                <?php /*
                   include ('orador.php');
                    $orador = new Orador();
                    if(isset($_POST)&&!empty($_POST)){
                        $nombre=$orador->depurar($_POST['nombre']);
                        $apellido=$orador->depurar($_POST['apellido']);    
                        $mail=$orador->depurar($_POST['mail']);
                        $tema=$orador->depurar($_POST['tema']);
                        $fechaActual = date("Y-m-d");
                                                
                        $result = $orador->registrar($nombre, $apellido, $mail, $tema,$fechaActual);
					    if($result){
						    $message= "Orador registrado con exito";
						    $class="alert alert-success";
                            header('location:admin.php');
						
					    }else{
						    $message="No se pudieron registrar los datos";
						    $class="alert alert-danger";
					    }
					
					?>
                    <div class="<?php echo $class?>">
				        <?php echo $message;?>
				    </div>	
				<?php
				}
				//$dato_orador=$orador->consultar_id($id);*/
			?>
                <form id="formularioOradores" action="registrar_orador.php" method="post">
                <div class="row g-3 mb-3"> 
                    <div class="col-md-6"> 
                    <input type="text" class="form-control" id="inputOradorNombre" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="col-md-6">
                    <input type="text" class="form-control" id="inputOradorApellido" name="apellido" placeholder="Apellido">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">      
                    <input type="mail" class="form-control" id="inputOradorMail" name="mail" placeholder="mail">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">      
                    <textarea class="form-control" id="inputOradorTema" rows="3" name="tema" placeholder="Tema a tratar"></textarea>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3"> 
                    <button class="btn btn-primary w-100 botonVerde" type="submit">Guardar</button>          
                    </div>
                    <div class="col-md-6 mb-3"> 
                    <a href="Admin.php" class="btn btn-primary w-100 botonVerde">Volver al Listado</a>          
                    </div>
                </div>
                </form>
            </div>
            </div>
    </main>
 


  

        
    <!-- Archivo javascript script.js -->
    <script src="js/script.js"></script>
    <!-- Boostrap Javascript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
    