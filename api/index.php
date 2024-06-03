<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Desarrollo de Software</title>
<style>
body {
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0;s
background: linear-gradient(45deg, #6a11cb 0%, #2575fc 100%);
overflow: hidden;
color: #fff;
text-align: center;
}
.container {
background: rgba(0, 0, 0, 0.6);
padding: 30px 50px;
border-radius: 15px;
box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
animation: fadeIn 2s ease-out;
}
h1 {
font-size: 3em;
margin: 0;
animation: glow 1.5s ease-in-out infinite alternate;
}
p {
font-size: 1.2em;
margin-top: 10px;
animation: slideIn 1s ease-out forwards;
}
@keyframes fadeIn {
from { opacity: 0; transform: scale(0.8); }
to { opacity: 1; transform: scale(1); }
}
@keyframes glow {
from { text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #ff00ff, 0 0 40px #ff00ff, 0 0 50px #ff00ff, 0 0 60px #ff00ff, 0 0
70px #ff00ff; }
to { text-shadow: 0 0 20px #fff, 0 0 30px #ff00ff, 0 0 40px #ff00ff, 0 0 50px #ff00ff, 0 0 60px #ff00ff, 0 0 70px #ff00ff, 0
0 80px #ff00ff; }
}
@keyframes slideIn {
from { opacity: 0; transform: translateY(20px); }
to { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body>
<div class="container">
<header><h1>Bienvenido</h1></header>
<h1><?php echo "Somos desarrollo de software DSW-23A"; ?></h1><br>
<p><b>Creando soluciones innovadoras para tu negocio</b></p>
<footer><b>© <?php echo date ("Y");?> Desarrollado por:<br> Kenia Alemán. <br>Alejandra Plátero. <br>Manuel
López.</b></footer>
</div>
</body>
</html>
