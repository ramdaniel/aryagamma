<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Arya Gamma Academy</title>
</head>
<body>
    <button onclick="history.back()">Go Back</button>
    <div id="container_1">
  
        <h1 id="title">
        Arya Gamma Academy
      </h1><!--title-->
      <p id="description">
        Pendaftaran Siswa Baru
      </p><!--description--->
        
    </div><!---container_1--->
    <form   method="post" action="/pendaftaran" enctype="multipart/form-data">
      @csrf
      <div id="container_2">
        <br id="survey-form">
        <label id="email-label">Email</label>
              <input type="email" id="email" name="email" class="form" required placeholder="Email"><br><!---email-->
        <label id="name-label">Name</label>
            <input type="text" id="nama" name="nama" class="form" required placeholder="Nama"><br><!--name--->
        <label id="name-label">Tempat, Tanggal Lahir</label>
            <input type="text" id="tempat_tanggal" name="tempat_tanggal" class="form" required placeholder="Tempat Tanggal Lahir"><br><!--Tempat Tanggal Lahir--->    
        <p>Jenis Kelamin</p>
            <label>
              <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
            </label>
            <label>
              <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            </label>
            <br>
            <br>
        <label id="name-label">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form" required placeholder="Tempat Tanggal Lahir"><br><!--Alamat--->
        <label id="name-label">NO HP</label>
            <input type="text" id="no_hp" name="no_hp" class="form" required placeholder="No Hp"><br><!--No Hp--->
        <label id="name-label">Nama Orang Tua</label>
            <input type="text" id="nama_ortu" name="nama_ortu" class="form" required placeholder="Nama Orang Tua"><br><!--Nama Orang tua--->
        <label id="name-label">Pekerjaan Orang Tua</label>
            <input type="text" id="pekerjaan_ortu" name="pekerjaan_ortu" class="form" required placeholder="Pekerjaan Orang Tua"><br><!--Pekerjaan Orang tua--->
        <label id="name-label">No Hp Orang Tua</label>
            <input type="text" id="no_ortu" name="no_ortu" class="form" required placeholder="No Hp Orang Tua"><br><!--No Hp orang tua--->
          </label>
          <label id="name-label">Pilih Program Pembelajaran</label>
          <select id="program" name="program" required>
            <option disabled selected value>
              Program Pembelajaran
            </option>
            <option value="Reguler">
              Reguler
            </option>
            <option value="Intensif">
              Intensif
            </option>
          </select></br><!--dropdown--->
          <br>
          <form>
              <label for="foto">Foto Diri</label>
              <br>
              <input class="form-control form-control-sm" id="foto" type="file" name="foto">
          </form>
          <br>
          <br>

              <button id="submit" type="submit" class="btn btn-primary">Daftar
                  
              </button>
          </div>
        </form>
      </div><!--container_2--->
</body>
<style>body{
    background-image: url("asu");
  }
  div{
    margin: 2em 5em 3em 5em;
  
    padding: 2em 6em 2em 6em;
    background: rgb(2,0,36);
  background: linear-gradient(117deg, rgba(2,0,36,1) 0%, rgba(125,129,150,0.9757503221014968) 96%, rgb(214, 198, 92) 98%, rgba(222,199,45,1) 98%, rgba(176, 118, 237, 0.586) 98%);
    color: #ffff;
    font-family: cursive;
    border-radius: 1.25rem;
  }
  #container_1{
    text-align:center;
  }
  #container_2{
   display: block;
  
    
  }
  .form{
    width: 100%;
    margin-bottom: 1em;
  }
  
  #submit{
    display: block;
    width: 100%;
    padding: 0.75rem;
    background: rgb(2,0,36);
    color: inherit;
    border-radius: 15px;
    cursor: pointer;
  }
  
  textarea{
    width: 100%;
  }
  
  </style>