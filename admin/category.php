<?php 
include('includes/header.php'); 
include('../config/dbcon.php');
include('../functions/myfunctions.php');

?>

<div class="contaner">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4>Kategori</h4>
            </div>
            <div class="card-body"></div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Image</th>
                            <th>Deskripsi</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $category = getAll("categories");

                            if(mysqli_num_rows($category) > 0)
                            {
                                foreach($category as $item)
                                {
                                    ?>
                                        <tr>
                                            <td> <?= $item['id']; ?></td>
                                            <td> <?= $item['name']; ?></td>
                                            <td>
                                                <img src="../uploads/<?= $item['image']; ?>" width="400px" alt="<?= $item['name']; ?>">
                                            </td>
                                            <td> <?= $item['description']; ?></td>
                                            <td>
                                               <a href="#" class="btn btn-primary">Edit</a>
                                            </td>
                                        </tr>
                                    <?php
                                }

                            }
                            else
                            {
                                echo "Tidak ada data ditemukan";
                            }
                        ?>
                        
                    </tbody>
                </table>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>