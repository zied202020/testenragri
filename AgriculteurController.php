<?php 
namespace App\Controllers;
use App\Models\AgriculteurModel;
use CodeIgniter\Controller;
class AgriculteurController extends Controller
{
    // show agriculteurs list
    public function index(){
        $agriculteurModel = new AgriculteurModel();
        $data['agriculteurs'] = $agriculteurModel->orderBy('id', 'DESC')->findAll();
        return view('agriculteur_view', $data);
    }
    // add agriculteur form
    public function create(){
        return view('add_agriculteur');
    }
 
    // insert data
    public function store() {
        $agriculteurModel = new AgriculteurModel();
        $data = [
            'cvl' => $this->request->getVar('cvl'),
            'nom'  => $this->request->getVar('nom'),
            'prenom'  => $this->request->getVar('prenom'),
            'age'  => $this->request->getVar('age'),
        ];
        $agriculteurModel->insert($data);
        return $this->response->redirect(site_url('/agriculteurs-list'));
    }   
}