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

<div class="content">
   <div style="padding:50px">
   <br>
   <h1>Customer Details</h1>
   <a class="new" href="<?=baseurl?>Customer/register">Register New Customer Here</a>
   <br> 
   <hr>
    
<table id="users">
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Address</th>
    <th>Ship Address</th>
    <th>Action</th>
  </tr>
  <?php 
$i=1;
    while($key=$data['result']->fetch_assoc())
    {
  ?>
  <tr>
    <td><?=$i++?></td>
    <td><?=$key['nama']?></td>
    <td><?=$key['date']?></td>
    <td><?=$key['shipaddress']?></td>
    <td>
        <a href="<?=baseurl?>Customer/profile/<?=$key['id']?>" class="profile">Profile</a>
        <a href="<?=baseurl?>Customer/Kemaskini/<?=$key['id']?>" class="kemaskini">Kemaskini</a>
        <a href="<?=baseurl?>Customer/Delete/<?=$key['id']?>" class="delete">Delete</a>
    </td>
  </tr>
<?php } ?>
</table>

   </div>
  
</div>
