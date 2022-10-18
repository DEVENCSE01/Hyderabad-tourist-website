<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirm</title>
    <style>
        .container{
            margin-left: auto;
            margin-right: auto;
            margin-top: 200px;
            width: 600px;
            height: 400px;
        }
        h1{
            font-size: 40px;
            font-weight: bold;
            color: brown;
        }
        h2{
            font-size: 30px;
            font-weight: bold;
        }
        h3{
            font-size: 25px;
            font-weight: bold;
        }
        a{
            padding-right:10px;
        }
    </style>
</head>
<body style="background-color: mediumspringgreen;">

    <div class="container">
        <h2>Thank you </h2>
        <h1>
            <?php echo $_GET["fname"]; ?>
            <?php echo $_GET["lname"]; ?>
        </h1>
        <h3><?php echo $_GET["email"]; ?><br><?php echo $_GET["phone"]; ?></h3>
        <h3>We reach you soon..</h3>
        <h3><a href="home.html">click here</a>to go to home page</h3>
    </div>

</body>
</html>