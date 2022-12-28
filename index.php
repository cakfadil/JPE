  


  <!DOCTYPE html>
  <html lang="en">
  
  
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Bottom Navbar Bootstrap</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"

<link rel="stylesheet" href="https://raw.githack.com/cakfadil/JPE/main/data.php"

          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  </head>
  
  <body>
      <div class="container mt-4">
          <h2 class="alert alert-info">
              Tutorial Menampilkan Data Google SpreadSheet dengan Php
          </h2>
          <div class="card">
              <div class="card-body">
                  <table class="table table-striped">
                      <tr>
                          <td>No</td>
                          <td>Nama Pegawai</td>
                          <td>Tempat Lahir</td>
                          <td>Tanggal Lahir</td>
                          <td>Jabatan</td>
                          <td>Alamat</td>
                      </tr>
                      <?php 
                          include('data.php'); 
                          $no = 1;
                      ?>
                      <!-- $newArray adalah variabel yang didapatkan dari data.php  -->
                      <?php foreach ($newArray as $value) { ?>
                          <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $value["Nama"]; ?></td>
                              <td><?php echo $value["Tempat Lahir"]; ?></td>
                              <td><?php echo $value["Tanggal Lahir"]; ?></td>
                              <td><?php echo $value["Jabatan"]; ?></td>
                              <td><?php echo $value["Alamat"]; ?></td>
                          </tr>
          
                      <?php } ?>
                  </table>
              </div>
          </div>
      </div>
  
  </body>
  
  </html>
