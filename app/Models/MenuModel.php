<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model 
{
    protected $table = 'menu';
    //Uncomment bellow if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama','harga','jumlah','keterangan','jenis'];
}
?>