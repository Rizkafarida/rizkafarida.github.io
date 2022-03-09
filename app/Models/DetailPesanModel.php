<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPesanModel extends Model
{
    protected $table = 'detailpesan';
    //Uncomment bellow if you want add primary key
    protected $primaryKey ='id';
    protected $allowedFields = ['id_pesan','id_menu','harga','jumlah'];
}
?>