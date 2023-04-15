<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <center>
        <form action="proceso_modificar_events.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre'];?>">
            <img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagenEvent']);?>"/>
            <input type="file" name="imagen">
            <input type="submit" value="aceptar">
        </form>
    </center>
    
</body>
</html>-->






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
                    <h2 class="logo">Travel</h2>
                    <div class="toggle"></div>
                </header>
            </section>
            <!-- Projects-->
            <section style="min-height: 1000px;" class="projects-section bg-light" id="projects">
                <div class="container px-4 px-lg-5">
                    <!-- Featured Project Row-->
                    <div style="align-items: center;justify-content: center;" class="row gx-0 mb-4 mb-lg-5 align-items-center">
                        <div class="col-xl-4 col-lg-5">
                            <div class="featured-text text-center text-lg-left">
                                <h4 style="font-size: 50px;">MODIFICAR EVENTOS</h4>
                                <style>
                                    .formulario-fotos{
                                        padding: 20px;
                                        align-items: center;
                                        justify-content: center;
                                        display: inline-block;
                                    }
                                    .formulario-fotos input{
                                        color: black;
                                        padding:15px;
                                    }

                                    .formulario-fotos input:hover{
                                        scale: 1.2;
                                        transition: .5s;
                                    }
                                    .up-event{
                                        padding-left: 15px;
                                    }
                                    .up-event input:hover{
                                        scale: 1.2;
                                        transition: .5s;
                                    }
                                    .formulario-mostrar-boton{
                                        padding-top:20px;
                                    }
                                </style>
                                <center>
                                <?php
                                    $id = $_REQUEST['id'];
                                    $conexion =new PDO('mysql:host=localhost:3307;dbname=mypicture',"root","");
                                    $query = "SELECT * FROM eventos WHERE id = '$id'";
                                    $resultado = $conexion->query($query);
                                    $row = $resultado->fetch(PDO::FETCH_ASSOC);
                                ?>
                                    <form class="formulario-mostrar-boton" action="proceso_modificar_events.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
                                        <input type="text" name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre'];?>">
                                        <img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagenEvent']);?>"/>
                                        <input type="file" name="imagen">

                                        <input style="padding: 10px;background: #a2c0cc;" type="submit" value="Guardar Cambios">
                                    </form>
                                </center>
                            </div>
                        </div>
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
                                    <div class="col-auto"><button style="color: #fff;" class="btn btn-primary" id="submitButton" type="submit">Notify Me!</button></div>
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
                                    <h4 class="text-uppercase m-0">Address</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-envelope text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Email</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Phone</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">+1 (555) 902-8832</div>
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
            <footer style="height: 200px;" class="footer bg-black small text-center text-white-50"><div class="container">Copyright &copy; Your Website 2023</div></footer>
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
