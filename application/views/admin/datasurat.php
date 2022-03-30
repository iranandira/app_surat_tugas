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
        <h5 class="m-0 font-weight-bold text-black">Data Surat
        <a href="<?=base_url('Admin/tambah_surat')?>"class="btn btn-sm
            btn-dark float-right">
                <i class="fas fa-plus"></i>
                 Tambah Data 
            </a>
        </h5>
    </div>
    <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <?php echo $this->session->flashdata('hapus'); ?>
        <?php echo $this->session->flashdata('edit'); ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!-- <th>No</th> -->
                        <th>Nomer Surat</th>
                        <th>Nama</th>
                        <th>Nuptk</th>
                        <th>Jabatan</th>
                        <th>Tujuan</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
                    <?php foreach($datasurat as $ds): ?>
                    <tr>
                        <td><?=$ds->id_surat?></td>
                        <!-- <td><?=$ds->no_surat?></td> -->
                        <td><?=$ds->nama?></td>
                        <td><?=$ds->nuptk?></td>
                        <td><?=$ds->jabatan?></td>
                        <td><?=$ds->tujuan?></td>
                        <td><?=date('d F Y', strtotime($ds->tanggal));?></td>
                        <td><?=$ds->tempat?></td>
                        <td>
                            <a href="<?=base_url('Admin/editsurat/'.$ds->id_surat) ?>" class="btn btn-sm btn-dark "><i class="fa fa-edit"></i></a> 
                            <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action','<?=base_url('Admin/hapussurat/'.$ds->id_surat) ?>')" class="btn btn-sm btn-danger " ><i class="fa fa-trash"></i></a>
                            <a href="<?=base_url('Admin/printsurat/'.$ds->id_surat) ?>" class="btn btn-sm btn-warning "><i class="fa fa-print"></i></a>
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


 <div class="modal fade" id="modalDelete">
  <div class="modal-dialog " >
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Yakin akan menghapus data ini ?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <form id="formDelete" action="" method="post">
            <button type="submit" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
        </form>
      </div>
     
    </div>
  </div>
</div>

</body>
 </html>
