<?php 
namespace App\Models;
use CodeIgniter\Model;
class AgriculteurModel extends Model
{
    protected $table = 'agriculteur';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['cvl', 'nom', 'prenom', 'age'];
}