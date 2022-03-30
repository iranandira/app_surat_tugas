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
        <h5 class="m-0 font-weight-bold text-black">Histori Data Surat</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nuptk</th>
                        <th>Jabatan</th>
                        <th>Surat Keluar</th>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    $no=1;
                    foreach($hisrotysurat as $hs):
                        $cari = ("SELECT COUNT(*) FROM `tbl_surat` WHERE status='nama'") ;
               ?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?=$hs->nama?></td>
                        <td><?=$hs->nuptk?></td>
                        <td><?=$hs->jabatan?></td>
                        <td><?= $cari; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</body>
 </html>
