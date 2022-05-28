<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Add Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-light">
    <!-- Form Add Data Pasien Start -->
    <div class="container mt-5 border rounded bg-white py-4 px-5 mb-5">
        <header class="header-title mb-4">
            <h1 class="judul"><a href="index.php" style="text-decoration: none">WIW</a></h1><hr>
        </header>
        <section>
            <div class="mb-3">
                <h2 class="text-center">Add Data Pasien</h2><br>
                <form class="form" action="action.php" method="post">
                    <div class="form-group row">
                        <label for="form-label" class="col-sm-5 col-form-label">NIK</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="nik" required>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label for="form-label" class="col-sm-5 col-form-label">Nama</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label for="form-label" class="col-sm-5 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="tempat" required>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label for="form-label" class="col-sm-5 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" name="tl" required>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label for="form-label" class="col-sm-5 col-form-label">Gender</label>
                        <div class="col-sm-7">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Laki-laki" required>
                                <label class="form-check-label" for="gender">Laki-Laki</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Perempuan" required>
                                <label class="form-check-label" for="gender">Perempuan</label>
                            </div>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label for="form-label" class="col-sm-5 col-form-label">Email</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label for="form-label" class="col-sm-5 col-form-label">Telepon</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="telepon" required>
                        </div>
                    </div><br>
                    <input style="float:right;" class="btn btn-primary mb-2" type="submit" name="add" value="Add"><br>
                </div>
                </form>
            </div>   
        </section>
    </div>
    <!-- Form Add Data Pasien End -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>