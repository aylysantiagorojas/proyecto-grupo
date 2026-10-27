
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | Mi Proyecto</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #334155;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(135deg, #0f172a, #0e7490);
            color: white;
            text-align: center;
            padding: 45px 20px;
        }

        header h1 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        nav {
            background: #164e63;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            transition: 0.3s;
        }

        nav a:hover,
        nav a.activo {
            background: #22d3ee;
            color: #0f172a;
        }

        main {
            max-width: 1000px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .presentacion {
            text-align: center;
            margin-bottom: 30px;
        }

        .presentacion h2 {
            color: #0e7490;
            font-size: 30px;
            margin-bottom: 12px;
        }

        .tarjetas {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 22px;
        }

        .tarjeta {
            background: white;
            padding: 28px;
            border-radius: 14px;
            border-top: 5px solid #06b6d4;
            box-shadow: 0 5px 18px rgba(15, 23, 42, 0.08);
            transition: transform 0.3s;
        }

        .tarjeta:hover {
            transform: translateY(-5px);
        }

        .tarjeta h3 {
            color: #0e7490;
            margin-bottom: 12px;
            font-size: 22px;
        }

        .icono {
            font-size: 35px;
            margin-bottom: 10px;
        }

        .equipo {
            background: white;
            margin-top: 25px;
            padding: 28px;
            border-radius: 14px;
            text-align: center;
            box-shadow: 0 5px 18px rgba(15, 23, 42, 0.08);
        }

        .equipo h2 {
            color: #0e7490;
            margin-bottom: 12px;
        }

        .boton {
            display: inline-block;
            margin-top: 22px;
            background: #0e7490;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .boton:hover {
            background: #164e63;
        }

        footer {
            background: #0f172a;
            color: white;
            text-align: center;
            padding: 22px;
            margin-top: 40px;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 29px;
            }

            nav {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>CONÓCENOS</h1>
        <p>Conoce nuestra historia, misión y visión</p>
    </header>

    <nav>
        <a href="INDEX.PHP">Inicio</a>
        <a href="NOSOTROS.PHP" class="activo">Nosotros</a>
        <a href="FORMULARIO.php">Formulario</a>
        <a href="PERFIL.PHP">Perfil</a>
    </nav>

    <main>
        <section class="presentacion">
            <h2>¿Quiénes somos?</h2>
            <p>
                Somos un equipo de estudiantes que busca aprender,
                innovar y desarrollar soluciones mediante la tecnología.
            </p>
        </section>

        <section class="tarjetas">
            <article class="tarjeta">
                <div class="icono">🎯</div>
                <h3>Nuestra misión</h3>
                <p>
                    Desarrollar una página web funcional y accesible,
                    aplicando nuestros conocimientos de programación
                    y trabajando en equipo.
                </p>
            </article>

            <article class="tarjeta">
                <div class="icono">🚀</div>
                <h3>Nuestra visión</h3>
                <p>
                    Fortalecer nuestras habilidades tecnológicas
                    y crear proyectos web modernos que respondan
                    a las necesidades de los usuarios.
                </p>
            </article>

            <article class="tarjeta">
                <div class="icono">🤝</div>
                <h3>Nuestros valores</h3>
                <p>
                    Promovemos la responsabilidad, el respeto,
                    la creatividad, la comunicación y la colaboración.
                </p>
            </article>
        </section>

        <section class="equipo">
            <h2>Nuestro equipo de trabajo</h2>
            <p>
                Compartimos ideas, aprendemos juntos y colaboramos
                para cumplir los objetivos de nuestro proyecto.
            </p>
            <a href="INDEX.PHP" class="boton">Volver al inicio</a>
        </section>
    </main>

    <footer>
        <p>Proyecto web colaborativo &copy; 2026</p>
    </footer>

</body>
</html>
