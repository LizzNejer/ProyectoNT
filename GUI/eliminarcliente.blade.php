<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Cliente</title>
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
				box-shadow: -15px -15px 30px 	#F1948A,
               15px  15px 120px #212F3C;
 
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
				background: #CB4335;
				 border-radius: 5px;
				 transition: all 2s ease;
				border: 3px solid #641E16  ;
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

			td {    padding: 8px;     background:#C39BD3;     border-bottom: 1px solid #fff;
				color: #669;    border-top: 1px solid transparent; }

			tr:hover td { background: #d0dafd; color: #339; }

        </style>
    </head>
	
    <body>
<img src="/imagenes/imagen1.jpg" width="110" height="100">	
    <center>
            <style> body {background-color:#D4E6F1;}</style>   
				
		<div class="title">
                    Eliminar Cliente
                </div>
			                      
		<form class="margen" method="DELETE">
			{{csrf_field()}}	
				<br>
		<table border="2px"> <!-- Lo cambiaremos por CSS -->
           
			<tr><td>
			<center><label for="name" class="control-label">Ingrese el Código: </label><br>
			<input type="text" name="id" /></center><br></td></tr>						
			
        </table>
			<input class="boton_personalizado" type="submit" value="Eliminar"/><br><br>			
		</form>	

		@if ($action == 'Editar')  
{{ Form::model($user, array('route' => array('api.Cliente.deleteC', $Customer->id), 'method' => 'DELETE', 'role' => 'form')) }}
  <div class="row">
    <div class="form-group col-md-4">
        {{ Form::submit('Eliminar usuario', array('class' => 'btn btn-danger')) }}
    </div>
  </div>
{{ Form::close() }}
@endif

		
		 </center></br></br>
            <center><br><FONT COLOR="white" id="margen-autores">
                Autores:
            Edwin Villalobos,            
            Lizeth Nejer
			Maria Fernanda Ramos
                </FONT></center>>
	    	
    </body>
</html>