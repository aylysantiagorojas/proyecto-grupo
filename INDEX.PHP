<?php // include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Grupo - Servidora Central Ayly 🦋</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        body { font-family: 'Poppins', sans-serif; margin: 0; background: linear-gradient(135deg, #fce4ec, #e8d5f2, #d1e8f0); min-height: 100vh; }
        header { background: white; padding: 15px 40px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border-radius: 0 0 20px 20px; }
        .logo { font-weight: 600; color: #8e44ad; font-size: 20px; }
        nav a { text-decoration: none; margin-left: 25px; color: #6c5b7b; }
        .hero { text-align: center; padding: 80px 20px 40px; }
        .hero h1 { font-size: 42px; color: #4a235a; }
        .cards { display: flex; justify-content: center; gap: 25px; padding: 20px; flex-wrap: wrap; }
        .card { background: white; padding: 25px; border-radius: 20px; width: 280px; text-align: center; box-shadow: 0 10px 30px rgba(142,68,173,0.1); }
        .btn { display: inline-block; margin-top: 15px; background: #8e44ad; color: white; padding: 10px 25px; border-radius: 30px; text-decoration: none; }
    </style>
</head>
<body>
<header>
    <div class="logo">🦋 Proyecto Grupo</div>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="nosotros.php">Nosotros - Aracely</a>
        <a href="formulario.php">Formulario - Yenifer</a>
    </nav>
</header>
<div class="hero">
    <h1>Hola, soy Ayly 🦋<br>Tu Servidora Central</h1>
    <p>Bienvenidas a nuestro proyecto hobby, donde guardamos datos con amor y Git.</p>
    
</div>
<div class="cards">
    <div class="card">
        <div style="font-size:40px;">👩‍💻</div>
        <h3>Ayly Santiago</h3>
        <span style="font-size:13px; background:#f5eef8; color:#8e44ad; padding:5px 12px; border-radius:20px;">Servidora Central / Main</span>
          <a class="btn" href="perfil.php">Ver perfil</a>
    </div>
    <div class="card">
        <div style="font-size:40px;">🎨</div>
        <h3>Aracely</h3>
        <span style="font-size:13px; background:#f5eef8; color:#8e44ad; padding:5px 12px; border-radius:20px;">Rama: rama-Aracely</span>
          <a class="btn" href="Nosotros.php">Ver Nosotros</a>
    </div>
    <div class="card">
        <div style="font-size:40px;">📝</div>
        <h3>Yenifer</h3>
        <span style="font-size:13px; background:#f5eef8; color:#8e44ad; padding:5px 12px; border-radius:20px;">Rama: rama-Yenifer</span>
          <a class="btn" href="Formulario.php">Ver Formulario</a>
    </div>
</div>
</body>
</html>