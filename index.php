<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>
<body>
    <?php 
        include 'header.php';
    ?>
    <main>
        <div class="container">
            <form action="">
                <div class="input-item">
                    <label for="">Full Name</label>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="input-item">
                    <label for="">Username</label>
                    <input type="text" name="uname" placeholder="Username" required>
                </div>
                <div class="input-item">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="input-item">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-item">
                    <label for="">Confirm Password</label>
                    <input type="password" name="c-password" placeholder="Confirm Password" required>
                </div>
                <div class="input-item">
                    <label for="">Birth Date</label>
                    <input type="date" name="birth" placeholder="" required>
                </div>
                <div class="input-item">
                    <label for="">Address</label>
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                    <!-- <input type="text" name="address" placeholder="Address" required> -->
                </div>
                <div class="submit">
                    <input type="submit" id="submit" value="Register">
                </div>
                
            </form>
        </div>
    </main>
    <?php 
        include 'footer.php';
    ?>
    <script src="main.js"></script>
</body>
</html>
