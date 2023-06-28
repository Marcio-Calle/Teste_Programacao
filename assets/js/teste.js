
$(()=>{
    // Pega o url de forma automatica para não ocorrer conflito em diferentes hosts
	var url = window.location.origin+window.location.pathname;
	url = url.split("index.php");
	url = url[0];

    // Função que calcula o periodo de trabalho
	$("#calculo").click(()=>{
        // Recebimento dos valores informados pelo usuário
		inicio_h = $("#inicio_h").val(); 
		inicio_m = $("#inicio_m").val(); 
		termino_h = $("#termino_h").val(); 
		termino_m = $("#termino_m").val(); 
        // Ajax que envia as informações para o backend(application/controllers/Back.php)
		$.ajax({
			url: url+"index.php/back/calculo",
			method: "POST",
			data:{
				inicio_h : inicio_h,
				inicio_m : inicio_m,
				termino_h : termino_h,
				termino_m : termino_m
			},success : (e)=>{
                // Recebe o resultado do backend e imprime na tela do usuário
				e = JSON.parse(e);
				$("#diurnas").text(e['diurno']+":"+e['diurno_m']);
				$("#noturnas").text(e['noturno']+":"+e['noturno_m']);
			}
		})
        // Apaga as informações disponibilizadas pelo usuário do dropdown
		$("#inicio_h").val(0); 
		$("#inicio_m").val(0); 
		$("#termino_h").val(0); 
		$("#termino_m").val(0)
	})
})
