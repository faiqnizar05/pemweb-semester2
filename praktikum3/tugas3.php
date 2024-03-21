<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body {
        background-color: #FFF3CF;
        margin-top: 50px;
    }
    .container {
        background-color: white ;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        color: #007bff;
        margin-bottom: 30px;
        text-align: center;
    }
    label {
        font-weight: bold;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .input-group {
        margin-bottom: 15px;
    }
    .custom-control {
        margin-right: 15px;
    }
</style>

<body>
    <form action="proses_form.php" method="POST">
        <div class="container">
            <h2>Form Registrasi Mahasiswa</h2>
          
            <div class="form-group row">
                <label for="NIM" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <input id="NIM" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="Nama Lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                    <input id="Nama Lengkap" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jeniskelamin" id="radio_0" type="radio" class="custom-control-input" value="Laki - laki"> 
                        <label for="radio_0" class="custom-control-label">Laki - laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jeniskelamin" id="radio_1" type="radio" class="custom-control-input" value="Perempuan"> 
                        <label for="radio_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Program Study</label> 
                <div class="col-8">
                    <select id="select" name="prodi" class="custom-select">
                        <option value="Teknik Informasi">Teknik Informasi</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web & Programming</label> 
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="checkbox_0" type="checkbox" checked="checked" class="custom-control-input" value="rabbit"> 
                        <label for="checkbox_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="checkbox_1" type="checkbox" class="custom-control-input" value="duck"> 
                        <label for="checkbox_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="checkbox_2" type="checkbox" class="custom-control-input" value="fish"> 
                        <label for="checkbox_2" class="custom-control-label">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="checkbox_3" type="checkbox" class="custom-control-input" value=""> 
                        <label for="checkbox_3" class="custom-control-label">RWS Boostrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="checkbox_4" type="checkbox" class="custom-control-input" value=""> 
                        <label for="checkbox_4" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="checkbox_5" type="checkbox" class="custom-control-input" value=""> 
                        <label for="checkbox_5" class="custom-control-label">Phyton</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="checkbox_6" type="checkbox" class="custom-control-input" value=""> 
                        <label for="checkbox_6" class="custom-control-label">Java</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="select1" class="col-4 col-form-label">Tempat Domisili</label> 
                <div class="col-8">
                    <select id="select1" name="domisili" class="custom-select">
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Jogja">Jogja</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                    <input id="text1" name="email" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
