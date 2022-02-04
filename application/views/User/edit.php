<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Complatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit User</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <h1 class="text-center">Form Edit User</h1>
        <div class="card" style="width: 25rem; height: 25rem;">
            <div class="card-body m-3">
                <form action="<?php echo base_url('index.php/user/action_edit/' .$data['id']) ?>" method="post">
                    <label class="form-label" for="">Username</label><br>
                    <input class="form-control" type="text" name="username" value="<?php echo $data['username'] ?>" required><br>
                    <label class="form-label" for="">Email</label><br>
                    <input class="form-control" type="email" name="email" value="<?php echo $data['email'] ?>" required><br>
                    <label class="form-label" for="">Password</label><br>
                    <input class="form-control" type="password" name="password" value="<?php echo $data['password'] ?>" required><br>
                    <button class="text-center btn btn-primary" type="submit">Simpan</button>
                    <a class="text-center btn btn-primary" href="<?php echo base_url('index.php/user') ?>"> User</a>
                </form>
            </div>
        </div>
    </div>
</div>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Complatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>
</html>