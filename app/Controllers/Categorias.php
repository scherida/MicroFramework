<?php namespace App\Controllers;

class Categorias extends BaseController
{
    protected $helpers = ['url'];

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		$this->session = \Config\Services::session();
    }
    
	public function index()
	{
        //chamar uma view que exibe todas as categorias
        $categoriaModel = new \App\ModeLs\CategoriaModel();
        $data['categorias'] = $categoriaModel->find();
        $data['titulo'] = 'Listando todas as categorias';
        $data['msg'] = $this->session->getFlashData('msg');
        echo view('categorias', $data);
    }
    
    public function inserir()
    {        
        $data['titulo'] = 'Inserir nova categoria';
        $data['acao'] = 'Inserir'; 
        $data['msg'] = '';
        
        if($this->request->getMethod() === 'post')
        {
            $categoriaModel = new \App\ModeLs\CategoriaModel();
            $categoriaModel->set('nomecategoria', $this->request->getPost('nomecategoria'));

            if($categoriaModel->insert()){
                $data['msg'] = 'Categoria inserida com sucesso!';
            }else{
                $data['msg'] = 'Erro ao inserir categoria!';
            }
        }

        return view('categoria_form', $data);
    }

    public function editar($id)
    {
        $data['titulo'] = 'Editar categoria ' . $id;
        $data['acao'] = 'Editar'; 
        $data['msg'] = '';
        $categoriaModel = new \App\ModeLs\CategoriaModel();
        $categoria = $categoriaModel->find($id);


        if($this->request->getMethod() === 'post')
        {
            //Quando o form for submetido
            $categoria->nomecategoria = $this->request->getPost('nomecategoria');

            if($categoriaModel->update($id, $categoria)){
                $data['msg'] = 'Categoria editada com sucesso!';
            }else{
                $data['msg'] = 'Erro ao editar categoria!';
            }
        }

        $data['categoria'] = $categoria;
        echo view('categoria_form', $data);
    }

    public function excluir($id = null)
    {
        if(is_null($id)){
            //redirecionar a aplicação para o categorias/index
            //definir uma msg via session
            $this->session->setFlashdata('msg', 'Categoria não encontrada');
            return redirect()->to(base_url('categorias'));
        }
        $categoriaModel = new \App\ModeLs\CategoriaModel();
        if($categoriaModel->delete($id)){
            $this->session->setFlashdata('msg', 'Categoria excluída com sucesso!');
        }else{
            $this->session->setFlashdata('msg', 'Erro ao excluir categoria!');
        }
        return redirect()->to(base_url('categorias'));
    }
}
