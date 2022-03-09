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
<button class="btn btn-primary" data-toggle="modal" data-target="#addUser">Tambah User</button>
<table class="table stripped table-hover">
    <thead>
        <th>no</th>
        <th>nama</th>
        <th>username</th>
        <th>password</th>
        <th>jenis_kelamin</th>
        <th>jenis</th>
        <th>option</th>    
    <thead>
        <?php
            $no=1;
            foreach($data as $row):
        ?>
        <tbody>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['username']?></td>
                <td><?=$row['password']?></td>
                <td><?=$row['jenis_kelamin']?></td>
                <td><?=$row['jenis']?></td>
                <td>
                    <button class="btn btn-warning btn btn-edit" data-toggle="modal" data-target="#editUser-<?=$row['id']?>">Edit</button>
                    <a href="<?=base_url('user/delete/'.$row['id'])?>"onclick="return confirm ('yakin mau hapus?')" class="btn btn-danger btn btn-delete">Delete</a>
                </td>
            </tr>
        </tbody>
        <div class="modal fade" id="editUser-<?=$row['id']?>" tabindex="-1" aria-labelledby="example" aria-header="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Edit User</h3>
                        <button class="close" data-dismiss="modal" aria-label="close"></button>
                    </div>
                    <form action="<?=base_url('/user/edit/'.$row['id'])?>" method="post">
                <div class="modal-body">
                    <div class="modal-group">
                        <label for="nama">nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?=$row['nama']?>">
                    </div>
                    <div class="modal-group">
                        <label for="username">username</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?=$row['username']?>">
                    </div>
                    <div class="modal-group">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password" class="form-control" value="<?=$row['password']?>">
                    </div>
                    <div class="modal-group">
                        <label for="jenis_kelamin">jenis_kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?=$row['jenis_kelamin']?>">
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                        </select>
                    </div>
                    <div class="modal-group">
                        <label for="jenis">jenis</label>
                        <select name="jenis" id="jenis" class="form-control" value="<?=$row['jenis']?>">
                            <option value="manager">manager</option>
                            <option value="admin">admin</option>
                            <option value="kasir">kasir</option>
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
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="example" aria-header="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah user</h3>
                <button class="close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form action="<?=base_url('user')?>" method="post">
            <div class="modal-body">
                <div class="modal-group">
                    <label for="nama">nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="modal-group">
                    <label for="username">username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="modal-group">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="modal-group">
                    <label for="jenis_kelamin">jenis-kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">perempuan</option>
                    </select>
                </div>
                <div class="modal-group">
                    <label for="jenis">jenis</label>
                    <select name="jenis" id="jenis" class="form-control">
                        <option value="manager">manager</option>
                        <option value="kasir">kasir</option>
                        <option value="admin">admin</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Delete</button>
                    <button type="submit" class="btn btn-primary">Save<button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<?=$this->endSection()?>