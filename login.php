<html lang="en">
    <head>
        <meta charshet="UTF-8">
        <meta name="viewspot" content="width=device-width,initial-scale=12">
        <title>login page</title>
    </head>
<body>
    <form action="ceklogin.php" method="post" class="form-login">
        <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="gagal"){
                    echo "<h1><center>username dan password tidak sesuai !</center></h1>";
                }
            }
            ?>
        <div calss="bgf">
            <div class="f-out">
                <h4>login<h4>
                    <div class="line">
                        <input TYPE="text" placeholder="username" name="uname" class="from control"required>
                    </div>
                    <div class="line">
                        <input TYPE="password" placeholder="password" name="psw" class="from-control"required>
                    </div>
                    <div class="line">
                        <button type"submit" class="btn btn-light"> login </button></a>
                        <a href="index.php"><button type="button" class="btn-light"> cancel </button></a<
                        required>
                    </div>
                    <div class="line">
                        <label> Don't have an account? Click <a href="resgister.php">here</a><label>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>



