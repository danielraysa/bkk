<?php 
session_start();
if (empty($_SESSION['id'])){
	header('location:../index.php');	
} else {
    include "../conn.php";
}
?>

<section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Detail Anggota</b>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->
                    <?php
                    $query = mysql_query("SELECT * FROM pendaftar WHERE id='$_GET[id]'");
                    $data  = mysql_fetch_array($query);
                    ?>
                                <!-- </div> -->
                                <div class="panel-body">
                      <table id="example" class="table table-hover table-bordered">
                    <tr>
                    <td>ID Anggota</td>
                    <td><?php echo $data['id']; ?></td>
                    <!-- <td rowspan="9"><div class="pull-right image">
                            <img src="<?php echo $data['foto']; ?>" class="img-rounded" height="300" width="250" alt="User Image" style="border: 3px solid #333333;" />
                        </div></td> -->
                    </tr>
                    <tr>
                    <td width="250">No Induk</td>
                    <td width="550"><?php echo $data['id']; ?></td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                    </tr>
                    <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    </tr>
                    <!-- <tr>
                    <td>Kelas</td>
                    <td><?php echo $data['kelas']; ?></td>
                    </tr>
                    <tr>
                    <td>Tempat dan Tanggal Lahir</td>
                    <td><?php echo $data['ttl']; ?></td>
                    </tr>
                    <tr>
                    <td>Alamat</td>
                    <td><?php echo $data['alamat']; ?></td>
                    </tr>
                    <tr>
                    <td>Email</td>
                    <td><?php echo $data['email']; ?></td>
                    </tr>
                    <tr>
                    <td>Password</td>
                    <td><?php echo $data['password']; ?></td>
                    </tr> -->
                   </table>
                  
                <div class="text-right">
                <a href="anggota.php" class="btn btn-sm btn-warning"> Kembali <i class="fa fa-arrow-circle-right"></i></a>
                </div>  
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div>