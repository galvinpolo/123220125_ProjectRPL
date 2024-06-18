<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<div class="inputlogin">
  <form method="POST" action="prosesakunadmin.php">
     <div class="form-group">
        <label for="formGroupExampleInput">Username</label>
        <input type="text" name ="username" class="form-control" id="formGroupExampleInput" placeholder="Username">
     </div>
     <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name ="password" class="form-control" id="exampleInputPassword1">
     </div>
     
     <button type="submit" class="btn btn-primary">Make Account</button><br>
     
 </form>
 
  
</div>
    
</body>
</html>