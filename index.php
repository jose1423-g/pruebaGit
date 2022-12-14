<?php 
    include('./conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="d-flex flex-direction-col container-100 mt-5">

        <form class="border border-primary py-3 px-2 rounded mt-5" action="upload.php" method="post" enctype="multipart/form-data">
                <div class="my-3 text-center" id="error"><!--Error--></div>
                <div class="mb-3">
                    <h2 class="text-center text-primary fw-bold">Archivos</h2>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input class="form-control" type="text" id="titulo" name="titulo">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Selecciona un archivo</label>
                    <input class="form-control" type="file" id="formFile" name="file">
                </div>
                <button class="btn btn-primary w-100" type="submit" id="btn_file">Enviar</button>
            </form>

        <!--Recursos-->
        <div class="d-flex flex-direction-col mb-5">
            <div class="container-968 px-1-sm text-align-center-sm px-1-md px-1-xl">
                <h2 class="text-align-center mb-1">Recursos</h2>
                <h3 class="my-1-sm mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias unde architecto veritatis explicabo Animi.</h3>
            </div>
            <div class="d-flex aling-items-center container-968">
                <ul class="nav flex-direction-col my-1-sm my-1-md">
                    <li class="nav-item mb-05"><a class="nav-link text-color-blue" href="#">Plantillas</a></li>
                    <li class="nav-item mb-05"><a class="nav-link text-color-blue" href="#">eBooks</a></li>
                    <li class="nav-item mb-05"><a class="nav-link text-color-blue" href="#">Guias de Practica</a></li>
                    <li class="nav-item mb-05"><a class="nav-link text-color-blue" href="#">Casos</a></li>
                    <li class="nav-item mb-05"><a class="nav-link text-color-blue" href="#">Infografias</a></li>
                    <li class="nav-item"><a class="nav-link text-color-blue" href="#">R??bricas</a></li>
                </ul>
                <figure class="figure d-none-sm">
                    <img src="./img/plazit.JPG" class="figure-img" alt="icon-img">
                </figure>
            </div>
        </div>
        <!--Tienda en linea-->
        <div class="d-flex justify-center flex-direction-col mb-5 bg-gray py-2 px-1-sm px-1-md px-1-xl">
            <h2 class="text-align-center mb-1 py-1-sm py-1-md">Tienda en linea</h2>
            <div class="d-flex justify-center aling-items-center container-968 d-block-sm d-block-md text-align-center-sm">
                <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos explicabo fugit quia distinctio? Porro quasi pariatur earum. Repudiandae et sint vero dolore! Perferendis eaque at modi similique perspiciatis alias esse.</h3>
                <figure class="figure">
                    <img src="./img/ahoramismo.jpg" class="figure-img my-1-sm my-1-md" alt="icon-tienda">
                </figure>
            </div>
            <div class="container-btn-flex py-1-sm py-1-md">
                <button class="btn btn-green text-color-white"><a class="nav-link text-color-white" href="#">Ver tienda</a></button>
            </div>
        </div>

        <!--contenido-->
        <div class="d-flex container-968 flex-direction-col mb-5">
            <h2 class="text-align-center mb-2">Contenido</h2>

            <div class="d-flex justify-center flex-wrap px-1">
                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="#">
                        <img src="./img/ahoramismo.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Lluvia de ideas</h3>
                        </div>
                    </a>
                </div>

                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="#">
                        <img src="./img/mesaredonda.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Cuadro sin??ptico</h3>
                        </div>
                    </a>
                </div>

                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="#">
                        <img src="./img/lluvia.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Mapa mental</h3>
                        </div>
                    </a>
                </div>

                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="#">
                        <img src="./img/ahoramismo.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Debate</h3>
                        </div>
                    </a>
                </div>

                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="#">
                        <img src="./img/mesaredonda.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Cuadro comparativo</h3>
                        </div>
                    </a>
                </div>

                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="#">
                        <img src="./img/lluvia.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Mapa conceptual</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--Estrategias de ense??anza y aprendizaje-->
        <div class="d-flex flex-direction-col bg-gray py-2 mb-5">
            <h2 class="mb-2 text-align-center">Estrategias de ense??anza y aprendizaje</h2>
            <div class="d-flex justify-center flex-wrap container-968">
                <div class="card mr-1 ml-1 mb-1 bg-white">
                    <div class="card-body text-align-center">
                        <h3 class="mb-2">Indagar en conocimientos</h3>
                        <button class="btn btn-green"><a class="nav-link text-color-white" href="#">Saber mas</a></button>
                    </div>
                </div>
                <div class="card mr-1 ml-1 mb-1 bg-white">
                    <div class="card-body text-align-center">
                        <h3 class="mb-2">Promover la compres??on</h3>
                        <button class="btn btn-green"><a class="nav-link text-color-white" href="#">Saber mas</a></button>
                    </div>
                </div>
            </div>
            <!--ESTRATEGIAS-->
            <div class=" d-flex justify-center flex-wrap container-968">
                <div class="card mr-1 ml-1 bg-white mb-1-md">
                    <div class="card-body text-align-center">
                        <h3 class="mb-2 mt-1">Estrategias grupales</h3>
                        <button class="btn btn-green"><a class="nav-link text-color-white" href="#">Saber Mas</a></button>
                    </div>
                </div>
                <div class="card mr-1 ml-1 bg-white mb-1-md">
                    <div class="card-body text-align-center">
                        <h3 class="mb-2 mt-1">Metodolog??as</h3>
                        <button class="btn btn-green"><a class="nav-link text-color-white" href="#">Saber mas</a></button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>