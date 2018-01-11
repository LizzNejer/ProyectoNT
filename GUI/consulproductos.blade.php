<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar</title>
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
				box-shadow: -15px -15px 30px 	#D1F2EB,
               15px  15px 120px #1F618D;
 
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
				color: #1C2833;
				background: #F39C12;
				 border-radius: 5px;
				 transition: all 2s ease;
				border: 3px solid #6E2C00;	
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
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
			
			table {     font-family: "Impact", "Lucida Grande", Sans-Serif;
				font-size: 25px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; }

			th {     font-size: 15px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
				border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

			td {    padding: 8px;     background:#EDBB99;     border-bottom: 1px solid #fff;
				color: #669;    border-top: 1px solid transparent; }

			tr:hover td { background: #d0dafd; color: #339; }

        </style>
    </head>
	
    <body>
<img src="/imagenes/buscar.png" width="110" height="100">	
    <center>
            <style> body {background-color:#FCF3CF;}</style>   
				
		<div class="title">
                    Consultar Artículos
                </div>
			                      
		<form class="margen" method="DELETE">
			{{csrf_field()}}	
				<br>
		@if(count($resultado_productos)>0)
		<table border="1" >
			<br>
			<br>
			<h1>LISTA DE CLIENTES</h1>
			<tr>
			  <td><strong>ESTADO</strong></td>
			  <td><strong>NOMBRE</strong></td>
			  <td><strong>TIPO</strong></td>
			  <td><strong>VALOR</strong></td>
			</tr>
			
			@foreach($resultado_productos as $l)
				<tr>
					<td>{{	$l->estado	}}</td>
					<td>{{	$l->nombre	}}</td>
					<td>{{	$l->tipo	}}</td>
					<td>{{	$l->valor	}}</td>
					<td><a href="http://localhost:8000/api/eliminarP/{{	$l->id	}}" class="btn btn-warning">Eliminar<span class="glyphicon glyphicon-edit"></span></a></td>					
						
				</tr>
			  @endforeach
        </table>
		</form>
		@endif		
		 </center></br></br>
            <center><br><FONT COLOR="white" id="margen-autores">
                Autores:
            Edwin Villalobos,            
            Lizeth Nejer            
                </FONT></center>>
	    	
    </body>
</html>