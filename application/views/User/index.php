<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Complatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data User</title>
</head>
<body>
    <h1 class="text-center">Data User</h1>

    
    <div class="container">
        <div class="row">
            <div class="col-9 text-center">
                <form action="" class="m-3" method="get">
                <?php if(!empty($data)):?>
                    <div class="row">
                        <div class="col-4">
                            <input class="form-control text-center" style="width: 300px;" type="text" name="username" placeholder="masukkan nama user">
                        </div>
                        <div class="col-3">
                            <button  class="btn btn-primary" type="submit">Cari</button>               
                        </div>
                        <div class="col-3">
        
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-3 mt-3">
                <a href="<?php echo base_url('index.php/user/tambah')?>"><button  class="btn btn-primary">Tambah User</button></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div>
            <div class="col">

                <table class="table table-striped text-center table table-bordered">
                <thead>
                 <thead class="bg bg-primary" style="color:white" ;>
                       <th>No </th>
                       <th>Username</th>
                       <th>Email</th>
                       <th>Password</th>
                       <th>
                           Action
                       </th>
                   </thead>
                   <tbody style="color:grey";>
                       <?php $i = 1; ?>
                       <?php foreach($data AS $key =>$value):?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $value['username'] ?></td>
                                <td><?php echo $value['email'] ?></td>
                                <td><?php echo $value['password'] ?></td>
                                <td>
                                    <a style="text-decoration:none"; href="<?php echo base_url('index.php/user/edit/'. $value['id']) ?>">Edit</a>
                                    <a style="text-decoration:none";  href="<?php echo base_url('index.php/user/delete/'. $value['id']) ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
                <?php endif?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>