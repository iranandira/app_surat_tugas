 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-black">List Admin
        <a href="<?=base_url('Login/daftar_admin') ?>"class="btn btn-sm
            btn-dark float-right">
                <i class="fas fa-plus"></i>
                Tambah Data 
            </a>
        </h5>
    </div>
    <div class="card-body">
        <?php echo $this->session->flashdata('alert'); ?>
        <?php echo $this->session->flashdata('hapus'); ?>
        <?php echo $this->session->flashdata('edit'); ?>
      
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>No hp</th>
                        <th>Alamat Lengkap</th>
                        <th>Email</th>
                        <!-- <th>Level</th> -->
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
                    <?php foreach ($listadmin as $la): ?>
                        <tr>
                            <td><?=$la->id?></td>
                            <td><?=$la->nama_lengkap?></td>
                            <td><?=$la->no_hp?></td>
                            <td><?=$la->alamat_lengkap?></td>
                            <td><?=$la->email?></td>
                            <!-- <td><?=$la->level?></td> -->
                            <td>
                                <a href="<?=base_url('Admin/editlist/'.$la->id)?>" class="btn btn-sm btn-dark"> <i class="fa fa-edit"></i></a>
                                <a href="#hapusAdmin" data-toggle="modal" onclick="$('#hapusAdmin #deleteAdmin').attr('action','<?=base_url('Admin/hapuslist/'.$la->id) ?>')" class="btn btn-sm btn-danger " ><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                   <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<div class="modal fade" id="hapusAdmin">
  <div class="modal-dialog " >
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Yakin akan menghapus data ini ?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <form id="deleteAdmin" action="" method="post">
            <button type="submit" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
        </form>
      </div>
     
    </div>
  </div>
</div>

</body>
</html>
 
 
