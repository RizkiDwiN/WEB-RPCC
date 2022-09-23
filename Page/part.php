<img src="Images/error/error-1.jpg" style="width:100%; height:65px;">
<table >
   <?php
   $kolom = 4;
    $i = 1;
    $data = mysqli_query($koneksi,"select * from tb_part");
    while($d = mysqli_fetch_array($data)){
    if(($i) % $kolom== 1) {    
    echo'<tr>';   
    }  
    echo '<td align="center" width="500px"><img src="Images/part/'.$d['foto_part'].'" width="100%" /><br><b>'.$d['nama_part'].'</b><br><a href="view.php?id='.$d['id'].'" class="btn btn-info"><i class="fa fa-eye"></i> View</a></td>';
    if(($i) % $kolom== 0) {    
    echo'</tr>';    
    }
   $i++;
   }
   ?>
  </table>
<!--<div class="container" style="margin-top: 10px;">
	<div class="row">
    <div class="col-md-4">
      <div class="card mb-4 box-shadow">
        <img class="card-img-top" src="Images/part/<?php echo $data['foto_part']; ?>" alt="Card image cap">
        <div class="card-body">
          <p class="card-text"><h4><?php echo $data['nama_part']; ?></h4><?php echo $data['deskripsi_part']; ?></p>
        </div>
      </div>
    </div>
</div>-->
</div>
