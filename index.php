<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>

    <script defer src="./main.js"></script>
</head>
<body>
    <main>
        <div class="container">
            <form id="form" action="/" method="post">
                <div class="input-item">
                    <label for="">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Full Name">
                    <div class="error"></div>
                </div>
                <div class="input-item">
                    <label for="">Username</label>
                    <input type="text" name="uname" id="uname" placeholder="Username" >
                    <div class="error"></div>
                </div>
                <div class="input-item">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email" placeholder="E-mail" >
                    <div class="error"></div>
                </div>
                <div class="input-item">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" >
                    <div class="error"></div>
                </div>
                <div class="input-item">
                    <label for="">Confirm Password</label>
                    <input type="password" name="c-password" id="c-password" placeholder="Confirm Password" >
                    <div class="error"></div>
                </div>
                <div class="input-item">
                    <label for="">Birth Date</label>
                    <input type="date" name="birth" id="birth" placeholder="" >
                    <div class="error"></div>
                </div>
                <div class="input-item">
                    <label for="">Address</label>
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                    <!-- <input type="text" name="address" placeholder="Address" required> -->
                </div>
                <div class="submit">
                    <input type="submit" name="" id="submit">
                </div>
                
            </form>
        </div>
    </main>
    <script src="main.js"></script>
</body>
</html>