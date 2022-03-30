<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Surat</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive ">
                        <h4>Tambah Data Surat</h4>
                        <br>
                        <form action="<?=base_url('Admin/simpansurat') ?>" method="post">
                            <div class="form-group row">
                            <!-- <div class="col">
                                <input type="text" class="form-control" id="no_surat" name="no_surat"  placeholder="no surat" >
                            </div> -->
                            <div class="col">
                                <input type="text" class="form-control" id="nama" name="nama"  placeholder="nama" >
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col">
                                <input type="text" class="form-control" id="nuptk" name="nuptk"  placeholder="nuptk">
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="jabatan">
                            </div>
                            </div>
                            <div class="form-group ">
                                <textarea class="form-control" id="tujuan" cols="20" rows="3" name="tujuan" placeholder="tujuan" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal </label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                <input type="text" class="form-control" id="tempat" name="tempat"  placeholder="tempat">
                                </div>
                                <!-- <div class="col">
                                <input type="text" class="form-control" id="kepala_sekolah" name="kepala_sekolah"  placeholder="Yang bertanda tangan">
                               </div> -->
                            </div>
                          
        
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-paper-plane"></i>  Simpan</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-undo"></i> Reset</button>
                         </form>
                         <br>
                    </div>    
                </div>      
            </div>    
        </div>              
    </div>                   
</div> 
</body>

</html>