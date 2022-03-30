<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit list admin</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit list admin</h4>
                        <br>
                        <?php 
                               foreach($editlist as $el): 
                                $id = $el->id;
                                endforeach ;
                        ?>
                        <form action="<?=base_url('Admin/simpan_editlist') ?>" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?=$el->nama_lengkap ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">No hp</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$el->no_hp ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Alamat Lengkap</label>
                                <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap" value="<?=$el->alamat_lengkap ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?=$el->email ?>">
                            </div>
                            <!-- <div class="form-group">
                                <label for="name">level</label>
                                <input type="text" class="form-control" id="level" name="level" value="<?=$el->level ?>">
                            </div> -->
                           
                            <button type="submit" class="btn  btn-sm btn-primary"> <i class="fa fa-paper-plane"></i> Simpan</button>
                            <a href="<?=base_url('Admin/kembaliadmin') ?>"><button type="button" class="btn btn-sm btn-dark"><i class="fa fa-backward"></i>  Kembali</button></a>
                            </form>
                    </div>    
                </div>      
            </div>    
        </div>              
    </div>                   
</div> 
</body>

</html>