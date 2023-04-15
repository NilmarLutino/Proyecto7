<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MY PICTURE</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
            </filter>
        </defs>
    </svg>

    <body id="page-top">
        <section class="showcase1">
            <section class="showcase">
                <header>
                    <h2 class="logo">MY PICTURE</h2>
                    <div class="toggle"></div>
                </header>
            </section>
            <!-- Projects-->
            <section style="min-height: 1000px;" class="projects-section bg-light" id="projects">
                <div class="container px-4 px-lg-5">
                    <!-- Featured Project Row-->
                    <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                        <center>
                            <table border="2">
                                <thead>
                                    <tr>
                                        <th colspan="5"><a style="padding-left: 175px;font-size: 25px;" href="pagAdmin.php">FOTOS</a></th>
                                    </tr>
                                    <tr>
                                        <th style="padding-left: 10px;">ID</th>
                                        <th style="padding-left: 10px;">Nombre</th>
                                        <th style="padding-left: 10px;">Imagen</th>
                                        <th style="padding-left: 10px;" colspan="2">Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $conexion =new PDO('mysql:host=localhost:3307;dbname=mypicture',"root","");
                                        $query = "SELECT * FROM imagen";
                                        $resultado = $conexion->query($query);
                                        while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
                                    ?>    
                                        <tr>
                                            <td style="padding-left: 10px;"><?php echo $row['id'];?></td>
                                            <td style="padding-left: 10px;"><?php echo $row['nombre'];?></td>
                                            <td style="padding-left: 10px;"><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagenUp']);?>"/></td>
                                            <th style="padding-left: 10px;"><a href="modificar_pictures.php?id=<?php echo $row['id'];?>">Modificar</a></th>
                                            <th style="padding-left: 10px;"><a href="proceso_eliminar_pictures.php?id=<?php echo $row['id'];?>">Eliminar</a></th>
                                        </tr>        
                                    <?php
                                        }

                                    ?>
                                </tbody>
                            </table>
                            <form class="formulario-mostrar-boton" action="pagAdmin.php" method="POST" enctype="multipart/form-data">
                                <input style="padding: 10px;background: #a2c0cc;" type="submit" value="Ingresar otra imagen">
                            </form>
                        </center>

                        <center>
                            <table  border="2">
                                <thead>
                                    <tr>
                                        <th colspan="5"><a style="padding-left: 175px;font-size: 25px;" href="pagAdmin.php">EVENTOS</a></th>
                                    </tr>
                                    <tr>
                                        <th style="padding-left: 10px;">ID</th>
                                        <th style="padding-left: 10px;">Nombre</th>
                                        <th style="padding-left: 10px;">Imagen</th>
                                        <th style="padding-left: 10px;" colspan="2">Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $conexion =new PDO('mysql:host=localhost:3307;dbname=mypicture',"root","");
                                        $query = "SELECT * FROM eventos";
                                        $resultado = $conexion->query($query);
                                        while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
                                    ?>    
                                        <tr>
                                            <td style="padding-left: 10px;"><?php echo $row['id'];?></td>
                                            <td style="padding-left: 10px;"><?php echo $row['nombre'];?></td>
                                            <td style="padding-left: 10px;"><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagenEvent']);?>"/></td>
                                            <th style="padding-left: 10px;"><a href="modificar_events.php?id=<?php echo $row['id'];?>">Modificar</a></th>
                                            <th style="padding-left: 10px;"><a href="proceso_eliminar_events.php?id=<?php echo $row['id'];?>">Eliminar</a></th>
                                        </tr>        
                                    <?php
                                        }

                                    ?>
                                </tbody>
                            </table>
                            <style>
                                .formulario-mostrar-boton{
                                    padding-top: 20px;
                                    padding-bottom: 20px;
                                }
                                .formulario-mostrar-boton input:hover{
                                    scale: 1.2;
                                    transition: .5s;
                                    font-weight: 700;
                                }
                            </style>
                            <form class="formulario-mostrar-boton"  action="pagAdmin.php" method="POST" enctype="multipart/form-data">
                                <input style="padding: 10px;background: #a2c0cc;" type="submit" value="Ingresar otra imagen">
                            </form>
                        </center>
                    </div>
                </div>
            </section>
    
            <!--BOTÓN AL INICIO-->
            <button class="back-to-top" type="button"></button>
    
            <!-- Signup-->
            <section class="signup-section" id="signup">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5">
                        <div class="col-md-10 col-lg-8 mx-auto text-center">
                            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                            <h2 style="font-size: 55px;" class="text-white mb-5">SUSCRÍBETE<a style="font-size: 25px;"> para recibir notificaciones!</a></h2>
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- Email address input-->
                                <div class="row input-group-newsletter">
                                    <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                    <div class="col-auto"><button style="color: #fff;" class="btn btn-primary" id="submitButton" type="submit">NOTIFÍCAME!</button></div>
                                </div>
                                <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                                <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact-->
            <section style="background-color: black;" class="contact-section">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Dirección</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">999 Calle Mercado, La Paz BOL</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-envelope text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Email</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50"><a href="#!">mypicture@gmail.com</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Teléfono</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">+591 (2) 222222</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social d-flex justify-content-center">
                        <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </section>
            <!-- Footer-->
            <footer style="height: 200px;" class="footer bg-black small text-center text-white-50"><div class="container">Copyright &copy; MY PICTURE 2023 - TODOS LOS DERECHOS RESERVADOS</div></footer>
            <!-- Bootstrap core JS-->
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        </section>
        
    </body>

    <div class="menu">
        <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="eventos.php">Eventos</a></li>
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="pedidos.php">Pedidos</a></li>
        <li><a href="contactos.html">Contactos</a></li>
        <li><a href="pagAdmin.php">Administrar</a></li>
        </ul>
    </div>

    <script>
        const menuToggle = document.querySelector('.toggle');
       const showcase1 = document.querySelector('.showcase1');
       
       menuToggle.addEventListener('click', () => {
           menuToggle.classList.toggle('active');
           showcase1.classList.toggle('active');
       })
   </script>

</html>
