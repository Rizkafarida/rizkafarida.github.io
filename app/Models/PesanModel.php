<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table='pesan';
    //Uncomment bellow if you want add primary key
    protected $primaryKey ='id';
    protected $allowedFields= ['id_user','nama','no_meja','total_harga','tgl'];
}
?>