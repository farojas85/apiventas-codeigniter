<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use Config\Email;
use Config\Services;
use App\Models\UsuarioModel;

class CuentaController extends Controller
{
    use ResponseTrait;
    
    /**
	 * Access to current session.
	 *
	 * @var \CodeIgniter\Session\Session
	 */
	protected $session;

	/**
	 * Authentication settings.
	 */
    protected $config;
    
    public function __construct()
	{
		// start session
		$this->session = Services::session();
    }
    
    public function cuenta()
	{
		if (! $this->session->isLoggedIn) {
			return redirect()->to('login');
        }
        
        $response = [
            'status' => 200,
            'usuario' => $this->session->usuario
        ];
        return $this->respond($response);
	}
    
    public function actualizarCuenta()
	{
		// update user, validation happens in model
		$usuario = new UsuarioModel();
		$getRule = $users->getRule('updateAccount');
		$users->setValidationRules($getRule);
		$user = [
			'id'  	=> $this->session->get('userData.id'),
			'name' 	=> $this->request->getPost('name')
		];

		if (! $users->save($user)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
        }
    }

    


    public function create()
    {
        
    }
    
    public function update()
    {
        
    }
    
    public function delete()
    {
        
    }
}