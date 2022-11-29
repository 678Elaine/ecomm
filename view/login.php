<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register!</title>
</head>
<body>
    
    <style>
  input[type=text], select {
    width: 100%;
    padding: 10px 15px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 6px;
      box-sizing: border-box;
  }

  input[type=password], select {
    width: 100%;
    padding: 10px 15px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 6px;
      box-sizing: border-box;
  }

  button[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    padding: 10px 10px;
    margin: 10px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
  }

  
  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 300px;
  }
  </style>
    
    <div>

        <h1> Login below </h1>
    <form method = "POST" action = "../actions/loginprocess.php">
        
        <input type="text" name="email" placeholder="Enter your email" id="email" required></br>
        <input type="password" name="password" placeholder="Enter your password" id="password" required></br>
        <button type="submit" name ="login"> Login </button>
    </form>
    </div>
   </html> 