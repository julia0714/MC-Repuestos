<?php require './layout/header.php'; ?>
<head>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="main_login_container">

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card c text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <form action="" method="post">
                            <div class="mb-md-5 mt-md-4 pb-5">
                        
                                <h2 class="fw-bold mb-2 text-uppercase text-center">Colaborador</h2>
                                <p class="text-white-50 text-center txt-second">¡Por favor, introduce tu usuario y contraseña para acceder!</p>


                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="username">Usuario</label>
                                    <input name="username" type="email" id="typeEmailX" placeholder="Introduce aqui Usuario..." class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="password">Contraseña</label>
                                    <input name="password" type="password" id="typePasswordX" placeholder="Introduce aqui Contraseña..." class="form-control form-control-lg" />
                                </div>
                                <div class="d-flex justify-content-center align-items-center flex-column">
                                    <p class="small pb-lg-2 "><a class="fs-6 p-colors" href="#!">¿Has olvidado tu contraseña?</a></p>
                                    <button  class="btn btn-outline-light btn-lg px-5 btn-iniciar" type="submit" name="btn_ingresar">Iniciar</button>
                                </div>
                                <?php
                            include ("./layout/controlers/db_conexion.php");
                            include ("./layout/controlers/login_controler.php");
                            ?>

                            </div>
                            </form>

                            <div>
                                <p class="mb-0 text-center">¿No tienes una cuenta? <a href="#!" class="p-colors fw-bold">Crea una cuenta</a></p>
                                                
                            </div>
                            <div class="d-flex justify-content-center align-items-center mt-1" style="color: var(--color--secundario);">
                                © 2024 MC Repuestos
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>

    <?php require('layout/footer.php'); ?>

</body>