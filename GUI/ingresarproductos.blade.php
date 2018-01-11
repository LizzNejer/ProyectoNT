<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cliente</title>
		<style>
                       
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 48px;
            }
			
			.margen {
				box-shadow: -15px -15px 90px 	#CCD1D1,
               15px  15px 120px #F39C12;
 
			}
						
						#margen-autores{
				font-weight:bold;
				position: relative;
				font: oblique 120% cursive;
				font-size:15pt;
				transition-timing-function: ease-in;
				 background: linear-gradient(to right, #2E4053,#7F8C8D); 
				height: 70px;
				width: 1200px;	        
			  border-radius: 5px;
			  box-shadow: 10px 10px #A6ACAF;

			}
			
			.boton_personalizado{				
				padding: 10px;
				font-weight: 600;
				font-size: 20px;
				color: #F7F9F9;
				background: #154360;
				 border-radius: 5px;
				 transition: all 2s ease;
				border: 2px solid #0016b0;
			}
			
			#margen-autores{
				background:white;
				font-weight:bold;
				position: relative;
				font: oblique 100% cursive;
				font-size:10pt;
				transition-timing-function: ease-in;
				 background: linear-gradient(to right, #2E4053,#7F8C8D); 
				height: 70px;
				width: 2800px;	        
			  border-radius: 5px;
			  box-shadow: 10px 10px #A6ACAF;

			}
			
			table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
				font-size: 15px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; }

			th {     font-size: 15px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
				border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

			td {    padding: 8px;     background:#F5B7B1;     border-bottom: 1px solid #fff;
				color: #669;    border-top: 1px solid transparent; }

			tr:hover td { background: #d0dafd; color: #339; }

        </style>
    </head>
	
    <body>
	
    <center>
            <style> body {background-color:#FDEBD0;}</style>   
				<img src="/imagenes/carrito.png" width="110" height="100">
		<div class="title">
                    Registro de Artículos
                </div>
			                      
		<form class="margen" method="POST">
			{{csrf_field()}}			
		<table border="2px"> <!-- Lo cambiaremos por CSS -->           
			<tr><td>
			<center><label for="name" class="control-label">Estado de Artículo: </label><br>
			<input type="text" name="estado" /></center><br></td></tr>			
			<tr><td>
			<center><label for="name" class="control-label">Nombre: </label><br>
			<input type="text" name="nombre" /></center></td></tr><br>
			<tr><td>
			<center><label for="name" class="control-label">Tipo: </label><br>
			<input type="text" name="tipo" /></center></td></tr><br>
			<tr><td>
			<center><label for="name" class="control-label">Valor: </label><br>
			<input type="text" name="valor" /><label for="name" class="control-label">$</label></center><br></td>
			</tr><br>
        </table>
			<input class="boton_personalizado" type="submit" value="Ingresar"/><br>	
				
		</form>			
		 </center></br></br>
            <center><br><FONT COLOR="white" id="margen-autores">
                Autores:
            Edwin Villalobos,            
            Lizeth Nejer
                </FONT></center>>
	    	
    </body>
</html>