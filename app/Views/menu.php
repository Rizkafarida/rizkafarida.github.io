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
<button class="btn btn-primary" data-toggle="modal" data-target="#addMenu">Tambah Menu</button>
<table class="table stripped table-hover">
    <thead>
        <th>no</th>
        <th>nama</th>
        <th>harga</th>
        <th>jumlah</th>
        <th>keterangan</th>
        <th>jenis</th>
        <th>option</th>
    </thead>
    <?php
        $no=1;
        foreach($data as $row):
    ?>
    <tbody>
        <tr>
            <td><?=$no?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['jumlah']?></td>
            <td><?=$row['keterangan']?></td>
            <td><?=$row['jenis']?></td>
            <td>
                <button class="btn btn-warning btn-sm btn-edit" data-toggle="modal" data-target="#editMenu-<?=$row['id']?>">Edit</button>
                <a href="<?=base_url('menu/delete/'.$row['id'])?>"onclick="return confirm ('yakin mau dihapus?')" class="btn btn-danger btn-sm btn-delete">Delete</a>
            </td>
        </tr>
    <tbody>
        <div class="modal fade" id="editMenu-<?=$row['id']?>" tabindex="-1" aria-labelledby="example" aria-header="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Edit Menu</h3>
                        <button class="close" data-dismiss="modal" aria-label="close"></button>
                    </div>
                    <form action="<?=base_url('/menu/edit/'.$row['id'])?>" method="post">
                <div class="modal-body">
                    <div class="modal-group">
                        <label for="nama">nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?=$row['nama']?>">
                    </div>
                    <div class="modal-group">
                        <label for="harga">harga</label>
                        <input type="number" name="harga" id="harga" class="form-control" value="<?=$row['harga']?>">
                    </div>
                    <div class="modal-group">
                        <label for="jumlah">jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" value="<?=$row['jumlah']?>">
                    </div>
                    <div class="modal-group">
                        <label for="keterangan">keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?=$row['keterangan']?>">
                    </div>
                    <div class="modal-group">
                        <label for="jenis">jenis</label>
                        <select name="jenis" id="jenis" class="form-control" value="<?=$row['jenis']?>">
                            <option value="makanan">makanan</option>
                            <option value="minuman">minuman</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Delete</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </div>
        <?php
            $no++;
            endforeach;
        ?>
</table>
<div class="modal fade" id="addMenu" tabindex="-1" aria-labelledby="example" aria-header="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Menu</h3>
                <button class="close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form action="<?=base_url('menu')?>" method="post">
            <div class="modal-body">
                <div class="modal-group">
                    <label for="nama">nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="modal-group">
                    <label for="harga">harga</label>
                    <input type="number" name="harga" id="harga" class="form-control">
                </div>
                <div class="modal-group">
                    <label for="jumlah">jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control">
                </div>
                <div class="modal-group">
                    <label for="keterangan">keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control">
                </div>
                <div class="modal-group">
                    <label for="jenis">jenis</label>
                    <select name="jenis" id="jenis" class="form-control">
                        <option value="makanan">makanan</option>
                        <option value="minuman">minuman</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Delete</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<?=$this->endSection()?>