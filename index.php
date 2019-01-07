<html lang="ens">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#FFF">
    <link rel="shortcut icon" href="asset/icon/liberlibera-round.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog LiberLibera</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/styles.css">
    <link rel="stylesheet" href="asset/css/responsive.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    
    
</head>
<body>
    <header>
        <div class="top">
            <div class="logo animated">LiberLibera</div>
            <div class="menu-pc">
                <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Categor&iacute;as</a></li>
                        <li><a href="#">Sobre nosotros</a></li>
                    </ul>
                </nav>
            </div>
            <div class="menu-movil">
                <a href="#" class="menu" id="mostrar_menu"><i class="fas fa-bars"></i></a>
                
            </div>
            
        </div>
        
    </header>
    <div class="modal-menu contraer ">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Categor&iacute;as</a></li>
            <li><a href="#">Sobre nosotros</a></li>
        </ul>
    </div>
    <main>
        <div class="contenedor">
            <h1>Blog del club de lectura LiberLibera</h1>
            <!--<div class="inicio ">
                
                <p>
                    El           
                </p>
                
            </div>-->
            <div class="flex-contenedor">
                <?php
                    require("asset/php/conexion.php");
                    $sql = "SELECT * FROM post ORDER BY Fecha ASC LIMIT 0,6";
                    $consulta = $conexion->query($sql) or die("error en consulta: ").$conexion->error;

                    if($consulta->num_rows>0){
                        $i=1;
                        while($datos = $consulta->fetch_assoc()){
                            echo' 
                            <div class="post elemento-flex" id="post'.$i.'">
                                <a href="'.$datos['Url'].'"><img  src="'.$datos["Imagen"].'" alt=""></a>
                                <h3 id="titulo'.$i.'">'.utf8_encode($datos["Titulo"]).'</h3>
                            </div>
                            ';
                            $i++;
                        }

                    }else{
                        echo "0 elementos";
                    }
                    $conexion->close();
                ?>
                
            </div>
        </div>
    </main>
    <footer>
        <a href="#" id="subir" onclick="subir();"><i class="fas fa-arrow-up animated bounce infinite"></i></a>
        
    </footer>
    <script type="text/javascript" src="asset/js/Umbrella.js"></script>
    <script type="text/javascript" src="asset/js/universal.js"></script>
</body>
</html>