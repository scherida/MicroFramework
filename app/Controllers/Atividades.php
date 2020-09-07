<?php namespace App\Controllers;

class Atividades extends BaseController
{
    public function index()
	{
    }

    //Calcular média da nota
	public function calcularNotas()
	{
        $data['titulo'] = 'Calcular notas';
        $data['acao'] = 'Calcular';
        $data['msg'] = '';

        if($this->request->getMethod() === 'post'){
            $data['nota1'] = $this->request->getPost('nota1');
            $data['nota2'] = $this->request->getPost('nota2');
            $data['nota3'] = $this->request->getPost('nota3');
            $data['nota4'] = $this->request->getPost('nota4');

            $media = ($data['nota1'] + $data['nota2'] + $data['nota3'] + $data['nota4'])/4;
            if($media >= 7.00){
                $data['msg'] = 'Aluno Aprovado: ' . $media;
            }else{
                $data['msg'] = 'Aluno Reprovado: ' . $media;
            }
        }

		return view('calcular_notas/atividades/', $data);
    }
    
    
    public function calcularTemperatura()
	{
        $data['titulo'] = 'Calcular notas';
        $data['acao'] = 'Calcular';
        $data['msg'] = '';

        if($this->request->getMethod() === 'post'){
            $data['graus'] = $this->request->getPost('graus');

            $Fahrenhet = (9 * $data['graus'] + 160)/5;
            if(!empty($Fahrenhet)){
                $data['msg'] = 'A temperatura em Fahrenhet é: ' . $Fahrenhet;
            }
        }

		return view('calcular_temperatura', $data);
    }
    
    public function calcularIdade()
	{
        $data['titulo'] = 'Calcular idade';
        $data['acao'] = 'Calcular';
        $data['msg'] = '';
        $data['ano'] = 365;
		$data['mes'] = 30;

        if($this->request->getMethod() === 'post'){
            $data['anos'] = $this->request->getPost('anos');
            $data['meses'] = $this->request->getPost('meses');
            $data['dias'] = $this->request->getPost('dias');

            $idade = ($data['anos'] * $data['ano'] + ($data['meses'] * $data['mes']));
            
            if(!empty($idade)){
                $data['msg'] = 'É um total de : ' . $idade . ' dias!';
            }
        }

		return view('calcular_idades', $data);
	}

}
