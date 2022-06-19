<style>	

#quotes {
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

#quotes td, #quotes th {
  border: 1px solid #ddd;
  padding: 8px;
}

#quotes tr:nth-child(even){background-color: #f2f2f2;}

#quotes tr:hover {background-color: #ddd;}

#quotes th {
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
.generate {
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
.download {
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
.addmore {
  background-color: green;
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="<?=baseurl?>css/style.css">
    <title>Invoice | GenSto</title>
</head>
<body>
    <div class="sidebar">
        <div class="mypic">
            <img src="<?=baseurl?>img/logo.png" style=" border-radius: 50%;" width="100px" >
            <h4>ADMIN</h4>
        </div>
        <a class="active" href="index.html">Home</a>
        <a href="photo_gallery.html">Users</a>
        <a href="hobby.html">Companys</a>
       <a href="aboutus.html">Logout</a>
    </div>
    <div class="container">

<div class="search_wrap search_wrap_3">
    <div class="search_box">
        <input type="text" class="input" placeholder="search...">
        <div class="btn btn_common">
            <i class="fas fa-search"></i>
        </div>
    </div>
</div>

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
   <h1>Invoice Section</h1>
   <br> 
   <hr>
    
<table id="quotes">
  <tr>
    <th>Item No</th>
    <th>Item Name</th>
    <th>Quantiy</th>
    <th>Price</th>
    <th>Total</th>
    <th></th>
  </tr>
  <tr>
    <td>1</td>
    <td>Kerusi</td>
    <td>100</td>
    <td>RM 20.00</td>
    <td>RM 2000</td>
    <td>
        <button class="generate">Generate</button>
        <button class="download">Download</button>
        <button class="delete">Delete</button>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>Meja</td>
    <td>100</td>
    <td>RM 15.00</td>
    <td>RM 1500</td>
    <td>
        <button class="generate">Generate</button>
        <button class="download">Download</button>
        <button class="delete">Delete</button>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>Langsir</td>
    <td>100</td>
    <td>RM 10.00</td>
    <td>RM 1000</td>
    <td>
        <button class="generate">Generate</button>
        <button class="download">Download</button>
        <button class="delete">Delete</button>
    </td>
  </tr>
</table><br><br>

<button class="addmore">Add More</button>

   </div>
</div>

</body>