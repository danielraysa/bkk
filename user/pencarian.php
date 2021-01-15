

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link href="ckeditor/content.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form action=".?menu=pencarian" method="POST" cellpadding="10">
 <div>
<input type='text' style="width: 200px;" name='qcari' placeholder='Cari berdasarkan pekerjaan dan nama' required /> 
<button type="submit"><i> Search </i></button>
</div>

<?php
             $query1="select * from pendaftar";
                  
              if(isset($_POST['qcari'])){
	           $qcari=$_POST['qcari'];
	           $query1="SELECT * FROM  pendaftar 
	           where nama_lengkap like '%$qcari%'
	            or id like '%$qcari%' or pekerjaan like '%$qcari%'  ";
                 }
                $tampil=mysql_query($query1) or die(mysql_error());
                 ?>

<style>
      table.bottomBorder { 
      border-collapse: collapse; 
     }
      table.bottomBorder td, 
      table.bottomBorder th { 
      border-bottom: 1px solid yellowgreen; 
      padding: 10px; 
      text-align: justify;
  }
</style>

        <table class="bottomBorder" width="1000px" border="0" cellpadding="0" cellspacing="0">

                      <tr bgcolor=#5cffdc>
                        <th><center>ID </center></th>
                        <th><center>Nama Lengkap </center></th>
                        <th><center> Jenis Kelamin</center></th>
                        <th><center> Tempat dan Tanggal Lahir </center></th>
                        <th><center>Provinsi </center></th>
                        <th><center>Alamat </center></th>
                        <th><center>Pekerjaan</center></th>

                      </tr>

                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
                    <td><center><?php echo $data['id']; ?></td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                    <td><?php echo $data['jenis_kelamin'];?></td>
                    <td><?php echo $data['tempat_lahir'];?>, <?php echo $data['tanggal_lahir'];?></td>
                    <td><?php echo $data['provinsi'];?></td>
                    <td><?php echo $data['alamat_rumah'];?></td>
                    <td><?php echo $data['pekerjaan'];?></td>
                    
                 <?php   
              } 
              ?>
              </table>
</body>