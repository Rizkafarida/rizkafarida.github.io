<?=$this->extend('layouts/admin')?>
<?=$this->section('content')?>
<?php
    if (session()->getFlashdata('success')){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('success')?>
    <button type="button" class="close" data-dismiss="alert" aria-label="close">Close</button>
</div>
<?php
    }
?>
<div class="row">
    <div class="col-md-6">
        <form action="<?=base_url('pesan')?>" method="post">
    <div class="card shadow mb-3 border-left-primary">
        <div class="modal-body">
            <div class="modal-group">
                <label for="menu">menu</label>
                <select name="id_menu" id="id_menu" class="form-control">
                    <option value="">silahkan pilih menu</option>
                    <?php
                    foreach ($data as $key => $val) {
                    ?>
                        <option value="<?=$val['id']?>"><?=$val['nama']?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="modal-group">
                <label for="jumlah">jumlah</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control">
            </div>
            <div class="modal-group">
                <button type="submit" class="btn btn-primary">Masukkan Keranjang</button>
            </div>
        </div>
    </div>
    </form>
    </div>
    <div class="col-md-6">
        <form action="<?=base_url('pesans')?>" method="post">
    <div class="card shadow mb-3 border-left-primary">
        <div class="modal-body">
            <div class="modal-group">
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="modal-group">
                <label for="no_meja">no_meja</label>
                <input type="number" name="no_meja" id="no_meja" class="form-control">
            </div>
            <div class="modal-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
    </form>
    </div>
</div>
<div class="card">
    <card class="header">
        <h3 class="card-title">Pesanan</h3>
    </card>
    <div class="modal-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Makanan</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total harga</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($menu !=null)
                        {
                            $no = 0;
                            foreach($menu as $val){
                                $no++
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$val['nama']?></td>
                        <td><?=$val['jumlah']?></td>
                        <td><?=$val['harga']?></td>
                        <td><?=$val['harga'] * $val['jumlah']?></td>
                        <td>
                            <a href="<?=base_url('pesan/delete/'.$val['id_menu'])?>" class=" btn btn-danger btn btn-delete">Delete</a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?=$this->endSection()?>