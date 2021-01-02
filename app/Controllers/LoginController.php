<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use Config\Services;

use App\Models\UsuarioModel;
class LoginController extends Controller
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
		$this->session = Services::session();
    }

    public function index()
    {
        echo 'Hello World!';
    }
    
    public function login()
    {
        
    }
    
    public function attemptLogin()
	{
		// validate request
		$rules = [
			'nombre_usuario' => 'required',
			'password' 	=> 'required',
		];

		if (! $this->validate($rules)) {
			$response = [
                'status' => 400,
                'errors', $this->validator->getErrors()
            ];
            return $this->respond($response);
		}

		// check credentials
		$users = new UsuarioModel();
		$user = $users->where('nombre_usuario', $this->request->getPost('nombre_usuario'))->first();
		if (
			is_null($user) ||
			! password_verify($this->request->getPost('password'), $user['password_hash'])
		) {
            $response = [
                'status' => 400,
                'error',  lang('Auth.wrongCredentials',)
            ];
			return $this->respond($response);
		}

		// check activation
		if (!$user['estado']) {
            $response = [
                'status' => 400,
                'error',  lang('Auth.notActivated')
            ];
            return $this->respond($response);
		}

		// login OK, save user data to session
		$this->session->set('isLoggedIn', true);
		$this->session->set('usuario', [
		    'id' 			=> $user['id'],
		    'nombre_usuario'=> $user['nombre_usuario'],
		    'email' 		=> $user['email']
		]);

        return redirect()->to('cuenta');
	}
    
    public function logout()
    {
        
    }
}