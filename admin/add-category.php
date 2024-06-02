<?php 

include('includes/header.php'); 

?>

<div class="contaner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Kategori</h4>
                </div>
                <div class="card-body">
                     <form action="code.php" method="POST" enctype="multipart/form-data">
                         <div class="row">
                        <div class="col-md-12">
                            <label for="">Nama</label>
                            <input type="text" name="name" placeholder="Masukkan Nama Kategori" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Deskripsi</label>
                            <textarea rows="3" name="description" placeholder="Masukkan Deskripsi" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="checkbox" name="status">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="add_category_btn">Simpan</button>
                        </div>
                         </div>
                     </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>