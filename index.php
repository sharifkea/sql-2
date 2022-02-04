
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" />
        <title>login</title>
    </head>
    <body>
        <header>
            <h1>Welcome to SQL Project</h1>
        </header>	
    <main>
        <div class ="form">
            <form action="" method="POST" name="login" >                        
                <input id="username" placeholder="User Name" type="text" name="txtUser"  required tabindex="1"><br>
                <input type="password" id='password' name="password" placeholder="Password" required tabindex="2"><br>
                <input name="submit" id='submit' type="submit" value="Login" tabindex="3">
            </form>                    
        </div>
<?php 
        include_once('footer.php');
?>

      
      
      

