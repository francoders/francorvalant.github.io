<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Francisco Corvalán | Portafolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/aboutMe.css">
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/skills.css">

    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="php/main.php">

</head>

<body>
    <!-- HOME -->
    <header class="home" id="home">
        <video class="video" src="img/programando.mp4" loop autoplay muted></video>
        <h1>Francisco Corvalán</h1>
        <p class="titulo">Student and <span class="typed"></span> </p>

        <span class="scrollArrow">
            <a href="#about-me"><img class="arrow" src="img/arrow.png" alt="flecha"></a>
        </span>
    </header>


    <!-- NAVBAR -->
    <nav id="show-nav" class="navbarr">
        <span id="span">
            <a href="#home">Francisco</a>
            <a href="#about-me">About</a>
            <a href="#projects">Projects</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
        </span>
        <div class="show-menu">
            <img src="img/navbar.png" alt="NavBar">
        </div>
    </nav>


    <!-- ABOUT ME -->
    <div class="about-me" id="about-me">
        <div class="about-me-contenedor" id="about-me-contenedor">
            <div>
                <h2>Un poco sobre mi</h2>
                <p>
                    Soy un desarrollador Front-End titulado de la carrera de Analista Programador, me
                    apasiona hacer aplicaciones móviles y diseños web. Actualmente estoy buscando practica de 360hrs
                    además de una oportunidad para trabajar en un entorno que me ayude a progresar en un rol de
                    desarrollador Front-End.
                </p>
                <img src="img/app.png" alt="dsa">
            </div>

        </div>
    </div>


    <!-- PROYECTOS -->
    <div class="proyectos-container" id="projects">
        <span id="proyecto-texto">
            <h2>Mis Proyectos</h2>
            <p>Proyectos realizados</p>
        </span>

        <section id="projects-list">

            <a href="#" target="_blank" rel="noreferrer">
                <img src="img/img1.png" alt="Poke Api" />
                <div>
                    <h3>Poke Api</h3>
                    <p>Proyecto JAVA que consume una api de pokemones.</p>
                </div>
            </a>

            <a href="https://francorvalant.github.io/restaurante_el_galeon/" target="_blank" rel="noreferrer">
                <img src="img/img2.jpg" alt="El Galeon" />
                <div>
                    <h3>Restaurant El Galeon</h3>
                    <p>Proyecto Web de un restaurant usando HTML5 CSS3 JavaScript JQuery.</p>
                </div>
            </a>
            <a href="#" target="_blank" rel="noreferrer">
                <img src="img/img3.png" alt="sgv" />
                <div>
                    <h3>Proyecto de Titulo SGV</h3>
                    <p>Proyecto JAVA que realiza registro de productos. </p>
                </div>
            </a>
            <a href="#" target="_blank" rel="noreferrer">
                <img src="img/img4.png" alt="ExamenesPreventivos" />
                <div>
                    <h3>Examenes Preventivos</h3>
                    <p>Proyecto Java que realiza el registro de los contagiados de Covid19 y los almacena.</p>
                </div>
            </a>
            <a href="https://francorvalant.github.io/" target="_blank" rel="noreferrer">
                <img src="img/img5.png" alt="Portafolio" />
                <div>
                    <h3>Portafolio</h3>
                    <p>Proyecto Portafolio para Practica Profesional usando HTML5 CSS3 JavaScript JQuery.</p>
                </div>
            </a>
        </section>
    </div>

    <!-- SKILLS -->
    <div class="skills-container" id="skills">
        <span id="skills-text">
            <h2>Skills</h2>
            <p>Lenguajes y Herramientas que utilizo para el desarrollo Front-End | Back-End</p>
        </span>

        <section id="languages">
            <ul>
                <li>
                    <img src="img/html5.png" alt="html_img" />
                    <p>HTML5</p>
                </li>
                <li>
                    <img src="img/css.png" alt="css logo" />
                    <p>CSS3</p>
                </li>
                <li>
                    <img src="img/javascript.png" alt="javascript logo" />
                    <p>JavaScript</p>
                </li>
                <li>
                    <img src="img/bulma.png" alt="javascript logo" />
                    <p>Bulma</p>
                </li>
                <li>
                    <img src="img/bootstrap.png" alt="git logo" />
                    <p>bootstrap</p>
                </li>
                <li>
                    <img src="img/csharp.png" alt="github logo" />
                    <p>C#</p>
                </li>
                <li>
                    <img src="img/firebase.png" alt="node.js logo" />
                    <p>firebase</p>
                </li>
                <li>
                    <img src="img/java.png" alt="sass logo" />
                    <p>JAVA</p>
                </li>
                <li>
                    <img src="img/mysql.png" alt="sass logo" />
                    <p>MySql</p>
                </li>
                <li>
                    <img src="img/android.png" alt="sass logo" />
                    <p>Android</p>
                </li>
                <li>
                    <img src="img/github.png" alt="sass logo" />
                    <p>GitHub</p>
                </li>
                <li>
                    <img src="img/git.png" alt="sass logo" />
                    <p>Git</p>
                </li>
                <li>
                    <img src="img/xd.png" alt="sass logo" />
                    <p>Adobe XD</p>
                </li>
                <li>
                    <img src="img/photoshop.png" alt="sass logo" />
                    <p>photoshop</p>
                </li>
                <li>
                    <img src="img/php.png" alt="PHP logo" />
                    <p>PHP</p>
                </li>
            </ul>
        </section>
    </div>



    <!-- CONTACT -->
    <div class="contact-container" id="contact">
    <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post">

    <input type="text" class="form-control" id="nom" name="nombre" placeholder="nombre" value="">
    <input type="text" class="form-control" id="email" name="email" placeholder="email" value="">

    <textarea name="mensaje" class="form-control" placeholder="Mensaje..." cols="30" rows="10"></textarea>

    <input class="btn btn-primary" type="submit" name="submit"  value="Enviar Email">

    </form>

    </div>


    <!-- FOOTER -->
    <footer>
        <div class="foot-container">
            <span>
                <h3>Proyecto Portafolio</h3>
                <p>Francisco Corvalán 2021.</p>
            </span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="js/main.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/aboutMe.js"></script>
    <script src="js/proyects.js"></script>
    <script src="js/skills.js"></script>
</body>

</html>