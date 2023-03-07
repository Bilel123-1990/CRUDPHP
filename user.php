    <?php

    include 'connect.php';

    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];



        $sql="insert into `personne` (name,email,mobile,password) values ('$name','$email','$mobile','$password')";
        $result=mysqli_query($con,$sql);
        if ($result) {
           // echo "data inserted succefuly";
           header('location:display.php');
        }else {
            die(mysqli_error($con));
        }
    }


    ?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <title>Hello, world!</title>
    </head>





    <body>
        <div class="container my-5">

            <form method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocompete="off">
                </div>


                <div class=" form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email"
                        autocompete="off">
                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter Your Mobile" name="mobile"
                        autocompete="off">
                </div>


                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter Your Password" name="password"
                        autocompete="off">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>

        </div>

    </body>

    </html>