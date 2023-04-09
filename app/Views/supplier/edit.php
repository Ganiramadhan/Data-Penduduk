<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title><?= $tittle; ?></title>
  <style>
    h4 {
      color: white;
    }

    p i {
      color: white;
    }
  </style>
</head>

<body>
  <div class="container-fluid  m-4">
    <div class="row" style="margin-left: 35%;">
      <div class="card" style="width: 32rem;">
        <div class="card-body">

          <div class="card-header bg-success">

            <h4 class="mt-4"> Ubah Data Supplier</h4>
          </div>
          <form style="width:400px" class="mt-4" action="/supplier/update/<?= $supplier['id_supplier']; ?>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="slug" value="<?= $supplier['slug']; ?>">
            <div class="mb-3">
              <label for="judul" class="form-label">Nama Supplier</label>
              <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ""; ?>" id="nama" name="nama" autofocus value="<?= $supplier['nama']; ?>">
            </div>
            <div class="mb-3">
              <label for="penulis" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $supplier['alamat']; ?>">
            </div>
            <div class="mb-3">
              <label for="Penerbit" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="nomor_telp" name="nomor_telp" value="<?= $supplier['nomor_telp']; ?>">
            </div>


            <button type="submit" class="btn btn-success">Ubah Data</button>
          </form>
          <div class="card-footer bg-success mt-4">
            <center>

              <p><i>@Copyright 2023 - FunTechnology </i></p>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>




</body>

</html>