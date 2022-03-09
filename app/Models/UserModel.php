<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    //Uncomment bellow if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama','username','password','jenis_kelamin','jenis'];
}
?>