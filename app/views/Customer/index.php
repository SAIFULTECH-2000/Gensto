<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=baseurl?>css/style.css">
    <title>Customer | GenSto</title>
</head>
<style>	

#users {
  font-family: Arial, Helvetica, sans-serif;
  border-spacing: 1; 
  border-collapse: collapse; 
  background:white;
  border-radius:6px;
  overflow:hidden; 
  width:100%;
  margin:0 auto;
  position:relative;
}

#users td, #users th {
  border: 1px solid #ddd;
  padding: 8px;
}

#users tr:nth-child(even){background-color: #f2f2f2;}

#users tr:hover {background-color: #ddd;}

#users th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background:#FFED86;
  color: black;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing:unset!important;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
 
  padding: 20px;
}
.new {
  background-color: paleturquoise;
  border: none;

  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}
.profile {
  background-color: yellowgreen;
  border: none;

  padding: 10px 27px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}
.kemaskini {
  background-color: yellow;
  border: none;

  padding: 10px 27px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}
.delete {
  background-color: red;
  border: none;
  
  padding: 10px 27px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}
</style>
<body>
    <div class="sidebar">
        <div class="mypic">
            <img src="<?=baseurl?>img/logo.png" style=" border-radius: 50%;" width="100px" >
            <h4>ADMIN</h4>
        </div>
        <a href="index.html">Home</a>
        <a href="<?=baseurl?>User">Users</a>
        <a class="active" href="<?=baseurl?>Customer">Customer</a>
        <a href="<?=baseurl?>company">Companys</a>
       <a href="aboutus.html">Logout</a>
    </div>
<div class="content">
   <div style="padding:50px">
   <form action="/action_page.php">
    <table>
        <tr>
            <td><input type="text" id="search" name="search" placeholder="Your Searching.."></td>
            <td><input type="submit" value="Search"></td>
        </tr>
    </table>
   </form>
   <br>
   <h1>Customer Details</h1>
   <button class="new">Register New Customer Here</button>
   <br> 
   <hr>
    
<table id="customers">
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Address</th>
    <th>Ship Address</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Abu Terbakar</td>
    <td>9, Tepi Jalan, Belakang Rumah, 43210 UK, Selangor</td>
    <td>9, Tepi Jalan, Depan Rumah, 43210 UK, Selangor</td>
    <td>fieryAsh9@hotmail.com</td>
    <td>+6011-11011011</td>
    <td>
        <button class="profile">Profile</button>
        <button class="kemaskini">Kemaskini</button>
        <button class="delete">Delete</button>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>Abu Terlaris</td>
    <td>19, Atas Jalan, Tiada Rumah, 43210 UK, Selangor</td>
    <td>19, Atas Jalan, Ada Rumah, 43210 UK, Selangor</td>
    <td>bob@bob.com</td>
    <td>+6016-60660606</td>
    <td>
        <button class="profile">Profile</button>
        <button class="kemaskini">Kemaskini</button>
        <button class="delete">Delete</button>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>Pak Pandir</td>
    <td>4, Jalan Komedi, Taman Lawak, 43434 KL, Kuala Lumpur</td>
    <td>5, Jalan Komedi, Taman Lawak, 43434 KL, Kuala Lumpur</td>
    <td>example@email.com</td>
    <td>+6012-34567890</td>
    <td>
        <button class="profile">Profile</button>
        <button class="kemaskini">Kemaskini</button>
        <button class="delete">Delete</button>
    </td>
  </tr>
</table>

   </div>
   <br><br>
</div>
</body>
</html>