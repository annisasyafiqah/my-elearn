<!-- Heading -->
<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Mata Pelajaran</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-book"></i> Mata Pelajaran
            </li>
        </ol>
    </div>
</div>

<!-- Isi -->
<div class="row">
    <div class="col-lg-5">
        <h3 class="page-header">
            Input Data Mata Pelajaran
        </h3>
        <form method="post">
            <div class="form-group">
                <label>Kode Mata Pelajaran</label>
                <input class="form-control" name="kode_mapel" placeholder="Kode Mapel" required>
            </div>
            <div class="form-group">
                <label>Mata Pelajaran</label>
                <input class="form-control" name="mapel" placeholder="Mapel" required>
            </div>
            <input type="submit" name="input" class="btn btn-default" value="Input"/>
        </form>

        <!-- Script Input -->
        <?php 
        include "koneksi.php";
        if(@$_POST['input']){
            $id_pelajaran=strtoupper($_POST['kode_mapel']);
            $nama=strtoupper($_POST['mapel']);
            
            $query=mysql_query("insert into pelajaran(id_pelajaran, nama) values('$id_pelajaran', '$nama')") or die (mysql_error());
            $query_l="SELECT * from user where id = '$id' AND password = '$password'";
            $h_l = $koneksi ->query($query_l);
    
               if(mysqli_num_rows($h_l)==1){
                  $d_l = $h_l ->fetch_array();
            ?>
                <script type="text/javascript">
                alert("Input Data Sukses !")
                window.location="?page=mapel";
                </script>
            <?php
            }else{
            ?>
                <script type="text/javascript">
                alert("Input Data Gagal !")
                window.location="?page=mapel";
                </script>
            <?php
            } 
        }
        ?>

    </div>
    <div class="col-lg-7">
        <h3 class="page-header">
            Tampil Data
        </h3>
        <div class="table-responsive">
            <?php
                $view=mysql_query("select * from pelajaran order by id_pelajaran asc");
                $no=0;

            ?>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Kode Mapel</th>
                        <th>Mapel</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=mysql_fetch_array($view)){
                    ?>
                    <tr>   
                        <td><?php echo $row['id_pelajaran']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><i><a href="?page=mapel_edit&id=<?php echo $row['id_pelajaran'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="mapel_hapus.php?id=<?php echo $row['id_pelajaran'];?>">Hapus</a></i></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>