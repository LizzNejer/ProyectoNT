<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alquiler de implementos deportivos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
		* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:5000px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				width: 100px;
				background-color:#133550    ;
				color:#7BBBEE  ;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#05083D  ;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
		
		
            html, body {
                background-color: #fff;
                color: #D35252  ;
                font-family: 'Times New Roman', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: right;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 100px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			.boton_personalizado{
			text-decoration: underline #4B6BCA  ;
			padding: 10px;
			font-weight: 600;
			font-size: 30px;
			color: #133EBA  ;
			background-color: #C2F05E;
			border-radius: 6px;
			border: 2px solid #0C1307 ;
			}
			.boton_personalizado1{
			text-decoration: underline #4B6BCA  ;
			padding: 10px;
			font-weight: 600;
			font-size: 30px;
			color: #133EBA  ;
			background-color: #F5B455;
			border-radius: 6px;
			border: 2px solid #16120D;
			}
			#titulo{
			font-family: Zengo, Verdana;
			color: #BF9383 ;
			font: bold;
			margin-left: 20px;
			display: inline;
			}
			#contenido{
			width: 100%;
			height:1000px;
			color: #B967DD ;
			float: left;
			font-size: 30px;
			font-style: oblique;
			text-align: center;
			}
			#contenido1{
			width: 100%;
			height:1500px;
			color: #2D315B  ;
			float: left;
			font-size: 30px;
			font-style: oblique;
			text-align: center;
			}
			#contenido2{
			width: 100%;
			height:2000px;
			color: #3A9541  ;
			float: left;
			font-size: 30px;
			font-style: oblique;
			text-align: center;
			}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
			<ul class="nav">
			<div class="content">
                <div class="title m-b-md">
                   <h1 id="titulo">ACTIVE</h1>
                </div>
				
            </div>
				<li><a href="http://localhost:8000">Inicio</a></li>
				<li><a href="">Catálogo</a>
					<ul>
						<li><a href="">Administrar Clientes</a>
							<ul>
								<li><a href="http://localhost:8000/api/ingresarCliente">Ingresar Cliente</a></li>
								<li><a href="http://localhost:8000/api/verClientes/">Ver Clientes</a></li>
							</ul>
						</li>	
						<li><a href="">Administrar Productos</a>
							<ul>
								<li><a href="http://localhost:8000/api/ingresarProducto">Ingresar Productos</a></li>
								<li><a href="http://localhost:8000/api/verProductos">Ver Productos</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="">Acerca de</a>
					<ul>
						<li><a href="#contenido">Lizz Nejer</a></li>
						<li><a href="#contenido1">Edwin Villalobos</a></li>
						<li><a href="#contenido2">Mafer Ramos</a></li>
					</ul>
				</li>
			</ul>
        </div>
		<section>
			<div id="contenido">
				Tiene 22 años, Es alegre y divertida.
			</div>
			<div id="contenido1">
				Tiene 21 años, Y le gusta programar.
			</div>
			<div id="contenido2">
				Tiene 22 años, Es de Ambato.
			</div>
		</section>
    </body>

</html>
