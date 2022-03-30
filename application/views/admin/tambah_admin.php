<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Admin</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Admin</h4>
                        <br>
                        <form action="<?=base_url('Admin/simpan_list') ?>" method="post">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" >
                            </div>
                            <div class="form-group">
                                <label for="name">No hp</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="name">Alamat Lengkap</label>
                                <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                           
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="text" class="form-control" id="password" name="password">
                            </div>
                           
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-paper-plane"></i>  Simpan</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-undo"></i> Reset</button>
                
                            </form>
                    </div>    
                </div>      
            </div>    
        </div>              
    </div>                   
</div> 
</body>

</html>