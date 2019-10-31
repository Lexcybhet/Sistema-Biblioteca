<!DOCTYPE html>
<html>
<head>
	<title>Cuenta Regresiva</title>
</head>
<body>
	<div id='timer'>00:30:00</div>
	<script>
		(function(){
			
			let SegundosTimer = 30 * 60 + 00; // Declarar el tiempo inicial (Media Hora 30 Minutos)

			timer();

			function timer (){

				let SegundosTotales = SegundosTimer; 

			// Calculo para Especificar la Hora
				Horas = Math.floor(SegundosTotales / 3600); 
					Horas= ((Horas < 10) ? "0" : "") + Horas;
						SegundosTotales %= 3600;

			// Calculo para Especificar los Minutos
				Minutos = Math.floor(SegundosTotales / 60);
					Minutos = ((Minutos < 10) ? "0" : "") + Minutos;
						
				SegundosTotales %= 60;
					SegundosTotales = ((SegundosTotales < 10) ? "0" : "") + SegundosTotales;
						
				document.getElementById("timer").innerHTML = Horas + ":" + Minutos + ":" + SegundosTotales

				SegundosTimer--;
				
				if (SegundosTimer > -1) {
					setTimeout(timer, 1800);
				}
					
			}
			
		})();
	</script>
</body>
</html>