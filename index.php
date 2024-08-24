<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="form.php" method="post" enctype="multipart/form-data">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
           <?php } ?>
 
           <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
           <?php } ?>

           <div class="area">
                <div class="input-field">
                    <?php if (isset($_GET['uname'])) { ?>
                        <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
                    <?php } else { ?>
                        <input type="text" name="uname" placeholder="User Name"><br>
                    <?php } ?>

                    <?php if (isset($_GET['email'])) { ?>
                            <input type="text" name="email" placeholder="Enter Email" value="<?php echo $_GET['email']; ?>"><br>
                    <?php } else { ?>
                            <input type="text" name="email" placeholder="email"><br>
                    <?php } ?>

                    <input type="password" name="password" placeholder="Password"><br>
                </div>
            <div class="sign-up">
                <button type="submit" name="submit">SIGN UP</button>
            </div>
            <div class="log-in">
                <p>Already Have an Account!</p>
                <button><a href="login.php">LOG  IN</a></button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>


