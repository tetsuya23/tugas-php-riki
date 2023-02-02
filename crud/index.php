<?php
    include_once("connect.php");
    $buku = mysqli_query($mysqli, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku 
                                        LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                        LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                        LEFT JOIN  katalog ON katalog.id_katalog = buku.id_katalog
                                        ORDER BY judul ASC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
 
<body>

<center>
<div class="main container">
  <div class="widget">
    <div class="widget-container">
      <div class="tab-container">
        <div class="tab-list" role="tablist">
          <button role="tab" class="tab active" aria-controls="tab-content-01" id="tab-01" tabindex="0" aria-selected="true"><span>buku</span></button>
          <button role="tab" class="tab" aria-controls="tab-content-02" id="tab-02" tabindex="0" aria-selected="false"><span>penerbit</span></button>
          <button role="tab" class="tab" aria-controls="tab-content-03" id="tab-03" tabindex="0" aria-selected="false"><span>pengarang</span></button>
          <div class="follow"></div>
        </div>
        <div class="tab-content-wrapper">
          <div class="tab-content tab-active" id="tab-content-01" hidden tabindex="0" role="tabpanel" aria-labelledby="tab-01">
            <h2>buku</h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis rerum repudiandae illum ipsam</p>
            <img src="https://images.unsplash.com/photo-1526553144644-bd9d59da0e76?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"/>
          </div>
          <div class="tab-content" id="tab-content-02" hidden tabindex="0" role="tabpanel" aria-labelledby="tab-02">
            <h2>penerbit</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing               elit. Corrupti fuga nostrum 
            </P>
            
                <img src="https://images.unsplash.com/photo-1517928260182-5688aead3066?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"/>
          </div>
          <div class="tab-content" id="tab-content-03" hidden tabindex="0" role="tabpanel" aria-labelledby="tab-03">
            <h2>pengarang</h2>
                  <p>
              Lorem ipsum dolor sit amet consectetur adipisicing               elit. Corrupti fuga nostrum 
            </P>
            
                  <img src="https://images.unsplash.com/photo-1483426319858-713585dbfa43?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80"/>
          </div>
        </div>
        <!--tab-content-wrapper -->
      </div>
    </div>
  </div>
</div><br>
</center>
<a class='btn btn-primary' href="add.php">Add New Buku</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
    <tr>
        <th>ISBN</th> 
        <th>Judul</th> 
        <th>Tahun</th> 
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Katalog</th>
        <th>Stok</th>
        <th>Harga Pinjam</th>
        <th>Aksi</th>
    </tr>
    <?php  
        while($buku_data = mysqli_fetch_array($buku)) {         
            echo "<tr>";
            echo "<td>".$buku_data['isbn']."</td>";
            echo "<td>".$buku_data['judul']."</td>";
            echo "<td>".$buku_data['tahun']."</td>";    
            echo "<td>".$buku_data['nama_pengarang']."</td>";    
            echo "<td>".$buku_data['nama_penerbit']."</td>";    
            echo "<td>".$buku_data['nama_katalog']."</td>";    
            echo "<td>".$buku_data['qty_stok']."</td>";    
            echo "<td>".$buku_data['harga_pinjam']."</td>";    
            echo "<td><a class='btn btn-primary' href='edit.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";        
        }
    ?>
    </table>


<!-- <a href="add.php">Add New Buku</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
    <tr>
        <th>ISBN</th> 
        <th>Judul</th> 
        <th>Tahun</th> 
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Katalog</th>
        <th>Stok</th>
        <th>Harga Pinjam</th>
        <th>Aksi</th>
    </tr>
    <?php  
        while($buku_data = mysqli_fetch_array($buku)) {         
            echo "<tr>";
            echo "<td>".$buku_data['isbn']."</td>";
            echo "<td>".$buku_data['judul']."</td>";
            echo "<td>".$buku_data['tahun']."</td>";    
            echo "<td>".$buku_data['nama_pengarang']."</td>";    
            echo "<td>".$buku_data['nama_penerbit']."</td>";    
            echo "<td>".$buku_data['nama_katalog']."</td>";    
            echo "<td>".$buku_data['qty_stok']."</td>";    
            echo "<td>".$buku_data['harga_pinjam']."</td>";    
            echo "<td><a class='btn btn-primary' href='edit.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";        
        }
    ?>
    </table> -->
    <script  src="./script.js"></script>
</body>
</html>
