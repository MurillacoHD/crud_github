<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Edustage Education</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <style>
        .receptor{
            width: 150px;
            height: 100px;
            background-color: gray;
        }

        #div1, #div2{
            width: 350px;
            height: 70px;
            padding: 10px;
            border: 1px solid #aaaaaa;
        }

        .rectangulo {
            width: 250px; 
            height: 100px; 
            border: 3px solid black;
            background: gray;
        }
        ul {
            list-style-type: none;
        }

        li {
            background-color: burlywood;
            border: burlywood 2px solid;
            float: left;
            margin-right: 10px;
            padding: 0 4px;
        }

    </style>
    <script>
    // Primera tasca: fer un prototipus del configurador d'horaris.
    // HTML i javascript (i CSS). Sense accés a la BD. Amb funcionalitat drag&drop

    // Càrrega inicial de l'horari
    function allowDrop(ev){
        ev.preventDefault();
    }

    function drag(ev){
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev){
        ev.preventDefault();
        // var data = ev.dataTransfer-getData("text");
        // ev.target.appendChild(document.getElementById(data));
        var data = ev.dataTransfer.getData("text");
        ev.target.innerHTML+="<div>"+document.getElementById(data).innerHTML+"</div>";
        // comunicació AJAX per gravar el canvi. Els podem gravar en un draft i deixar-ho en espera fins que l'usuari gravi.
    }
</script>
</head>
    <body>
        <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"
              ><img src="img/logo.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, formsD7C8B6, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Pages</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?controlador=Aulas&accion=listar">Aulas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?controlador=Cursos&accion=listar"
                        >Cursos</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?controlador=Professores&accion=listar"
                        >Professores</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?controlador=Assignaturas&accion=listar"
                        >Assignaturas</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?controlador=Usuaris&accion=listar"
                        >Usuarios</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->
<br><br><br><br>

    <!-- <select name="select">
        <option value="value1">Aulas</option>
        <option value="value2" selected>Professores</option>
        <option value="value3">Usuaris</option>
        <option value="value4">Assignaturas</option>
        <option value="value5">Cursos</option>
        <option value="value6">Horaris</option>
    </select> -->


    <!-- <select name="select">
        <option value="value1" selected>Cursos</option>
        <option value="value2">Assiganturas</option>
        <option value="value3">Aulas</option>
    </select> -->
    <p>Cursos:</p>
    <select name="select">
        <option value="value1">P3</option>
        <option value="value2" selected>P4</option>
        <option value="value3">P5</option>
        <option value="value4">Primero</option>
        <option value="value5">Segundo</option>
        <option value="value6">Tercero</option>
        <option value="value7">Quarto</option>
        <option value="value8">Quinto</option>
        <option value="value9">Sexto</option>
    </select><br><br><br>

    

    <p>Assignaturas:</p>
    <select name="select">
        <option value="value1">Descubrimiento de uno mismo y de los demás</option>
        <option value="value2" selected>Descubrimiento del entorno</option>
        <option value="value3">Comunicación y lenguajes</option>
        <option value="value4">Lengua catalana y literatura</option>
        <option value="value5">Lengua castellana y literatura</option>
        <option value="value6">Àngles</option>
        <option value="value7">Matemáticas</option>
        <option value="value8">Naturales</option>
        <option value="value9">Sociales</option>
        <option value="value10">Visual y plástica</option>
        <option value="value11">Educación física</option>
        <option value="value12">Aternativa</option>
        <option value="value13">Religió</option>
        <option value="value14">Música y danza</option>
    </select><br><br><br>

    <p>Aulas:</p>
    <select name="select">
        <option value="value1">Planta Baixa-P3</option>
        <option value="value2" selected>Planta Baixa-P4</option>
        <option value="value3">Planta Baixa-P5</option>
        <option value="value4">Planta 1-Primero</option>
        <option value="value5">Planta 1-Segundo</option>
        <option value="value6">Planta 1-Tercero</option>
        <option value="value7">Planta 1-Quarto</option>
        <option value="value8">Planta 1-Quinto</option>
        <option value="value9">Planta 1-Sexto</option>
    </select><br><br><br>


    <br><br><br> 
        <div><?php
        // PROFESSORS
        echo "<div class='flex-container'>";
    while ($item = $listado->fetch()) { ?>
        <div class='flex-child text-center'> 
            <ul>
                <li>
            <div class="rectangulo" draggable='true' ondragstart='drag(event)' id='drag<?= $item["id_professor"] ?>' class='professors' id_professor=>Professor<?= $item["id_professor"] ?>: <?=$item["professor"] ?> <?= $item["id_usuari"] ?>
            </li>
        </ul>
        </div> 
    </div><?php
    } ?> </div>
        </div>
        <table>
            <tr>
                <th></th><th>Dilluns</th><th>Dimarts</th><th>Dimecres</th><th>Dijous</th><th>Divendres</th>
            </tr><?php
            for($f=8;$f<20;$f++){ // f de franja horària?>
                <tr><th><?= $f ?>.00 - <?= ($f+1) ?>.00 </th> <?php
                    for($d=1;$d<=5;$d++){ // d de dia ?>
                    <td>
                        <div class=receptor  ondrop="drop(event)" ondragover="allowDrop(event)" id=receptor_<?= $dia ?>_<?= $f ?> id_franja=<?= $f ?> id_dia=<?= $d ?>></div>
                    </td> <?php
                    } ?>
                </tr> <?php
            } ?>
        </table><br><br><br>
            <!--================ End Home Banner Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
    </body>
</html>