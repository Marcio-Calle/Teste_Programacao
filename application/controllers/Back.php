<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_Controller {
	// Função padrão para carregar a primeira pagina
	public function index()
	{
		$this->load->view('view_teste');
	}
	// Função que calcula o resultado do periodo trabalhado
	public function calculo()
	{
		// Recebe as informações dadas pelo usuário no frontend
		$inicio_h = $this->input->post("inicio_h");
		$inicio_m = $this->input->post("inicio_m");
		$termino_h = $this->input->post("termino_h");
		$termino_m = $this->input->post("termino_m");
		
		// Iniciação de variaveis
		$diurno = 0;
		$diurno_m = 0;
		$horas = 0;
		$noturno = 0;
		$noturno_m = 0;

		// Conversão das horas informadas por minutos
		$inicio = $inicio_h * 60 + $inicio_m;
		$final = $termino_h * 60 + $termino_m;

		// Calculo das horas trabalhadas definindo as horas diurnas e noturnas
		while($inicio != $final){
			$inicio +=1;
			$horas += 1;
			if($inicio == 22*60 || $inicio > 5*60 && $inicio < 22*60 ){
				$diurno += 1;
			}else{
				$noturno += 1;
			}
			if($inicio >= 24 * 60){
					$inicio = 0;
			}
		}
		
		
		// Envio das informações processadas para o frontend
		$data["diurno"] = intval($diurno/60);
		$data['diurno_m'] = $diurno%60;
		$data["noturno"] = intval($noturno/60);
		$data["noturno_m"] = $noturno%60;
		$data = json_encode($data);
		echo $data;
		
	}
}
