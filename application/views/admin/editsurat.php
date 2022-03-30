<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit surat</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Surat</h4>
                        

                        <?php 
                            foreach($editsurat as $es): 
                            $id_surat = $es->id_surat;
                            endforeach; 
                        ?>
                        <form action="<?=base_url('Admin/simpan_editsurat') ?>" method="post">
                         <input type="hidden" name="id_surat" value="<?= $id_surat ?>">
						<table class="table"> 
                                <!-- <tr>
                                    <td>Nomer Surat</td>
                                    <td>:</td>
                                    <td>
                                       <input type="text" class="form-control" name="no_surat" id="no_surat" value="<?=$es->no_surat ?>" >
                                    </td>
                                </tr> -->
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                   <td><input type="text" class="form-control" name="nama" id="nama" value="<?= $es->nama ?>"></td>
                                 <tr>
                                <tr>
                                    <td>Nuptk</td>
                                    <td>:</td>
                                   <td><input type="text" class="form-control" name="nuptk" id="nuptk" value="<?= $es->nuptk ?>"></td>
                                 <tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                   <td><input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $es->jabatan ?>"></td>
                                 <tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>:</td>
                                    <td>
                                        <textarea name="tujuan" id="tujuan" cols="30" rows="10" class="form-control"><?=$es->tujuan ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                   <td><input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $es->tanggal?>"></td>
                                 <tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>:</td>
                                   <td><input type="text" class="form-control" name="tempat" id="tempat" value="<?= $es->tempat ?>"></td>
                                 <tr>
                                <!-- <tr>
                                    <td>Kepala sekolah</td>
                                    <td>:</td>
                                   <td><input type="text" class="form-control" name="kepala_sekolah" id="kepala_sekolah" value="<?= $es->kepala_sekolah ?>"></td>
                                 <tr> -->
                                
                        </table>
                        <hr>
                                 <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-paper-plane"></i> Simpan</button>
                                 <a href="<?=base_url('Admin/kembalisurat') ?>"><button type="button" class="btn btn-sm btn-dark"><i class="fa fa-backward"></i>  Kembali</button></a>
                        </form>
                    </div>    
                </div>      
            </div>    
        </div>              
    </div>                   
</div> 
</body>

</html>