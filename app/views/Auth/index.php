<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

  </head>
  <style>
      .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  background:white;
  margin:100px auto;
  border-radius:10px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}
.logo{
    
    color: black;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-style: italic;
    text-shadow: 1px 1px 2px grey;
    text-align: center;
}
  </style>
  <body style="background:powderblue;">

 <center>

 <div class="card">

  <div class="container">
    <h1 class="logo"><b>GenSto</b></h1>
    <div>
  <form action="<?=baseurl?>auth/login" method="POST" >
    <p  style="text-align:left"><b>Username</b></p>
    <input type="text" id="username" name="username" placeholder="username..">

    <p style="text-align:left"><b>Password</b></p>
    <input type="password" id="password" name="password" placeholder="password..">

    
  
    <input type="submit" value="Submit">
  </form>
</div>
  </div>
</div>
 </center>


  </body>
 
</html>