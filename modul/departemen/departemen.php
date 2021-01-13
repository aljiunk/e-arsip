<?php
//uji jika tombol simpan diklik
  if(isset($_POST['bsimpan']))
    {
      //simpan data
      $simpan =mysqli_query($koneksi,"INSERT INTO tbl_departemen
      VALUES('', '$_POST[nama_departemen]')");
      if($simpan)
      {
          echo "<script>
                    alert('Simpan Data Sukses');
                    document.location='?halaman=departemen';
                 </script>";
      }

    }
//tes tombol edit/hapus
if(isset($_GET['hal']))
{
    //tampilkan data yang akan diedit
    $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_departemen where id_departemen='$_GET[id]'");
    $data = mysqli_fetch_array($tampil);
    
    // if($data)
    // {
    //     //jika data telah di temukan,maka akan di tampung dalam variable
    //     $vnama_departemen =$data['nama_departemen'];
    // }
}

?>
<div class="card mt-3">
  <div class="card-header bg-info text-white">
    Form Data Departemen
  </div>
    <div class="card-body">
     <form method="post" action="">
        <div class="form-group">
          <label for="nama_departemen">Nama Departemen</label>
          <input type="text" class="form-control" id="nama_departemen" name="nama_departemen"
           value="<?=@$vnama_departemen?>">

        </div>
        <button type="submit"  name="bsimpan" class="btn btn-primary">Simpan</button>
        <button type="reset"   name="bbatal" class="btn btn-danger">Batal</button>
    </form>
  </div>
</div>

<div class="card mt-3">
  <div class="card-header bg-info text-white">
 Data Departemen
  </div>
    <div class="card-body">
    <table class="table table-borderd table-hovered table-striped">
        <tr>
            <th>No</th>
            <th>Nama Departemen</th>
            <th>Aksi</th>
        </tr>
        <?php
            $tampil =mysqli_query($koneksi,"SELECT*from tbl_departemen order by id_departemen desc ");
          $no = 1;
            while($data = mysqli_fetch_array($tampil)) :

        ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$data['nama_departemen']?></td>
            <td>
                <a href="?halaman=departemen&hal=edit&id=$data['id_departemen']?>" class="btn btn-success">Edit</a>
                <a href="?halaman=departemen&hal=hapus&id=$data['id_departemen']?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endwhile;?>
    </table>
  </div>
</div>