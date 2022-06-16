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
   <form action="/action_page.php">
    <table>
        <tr>
            <td><input type="text" id="search" name="search" placeholder="Your Searching.."></td>
            <td><input type="submit" value="Search"></td>
        </tr>
    </table>
   </form>
   <br>
   <h1>Users Account</h1>
   <button class="new">Register new Account Here</button>
   <br> 
   <hr>
    
<table id="users">
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Username</th>
    <th>Company</th>
    <th>Role</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Maria Anders</td>
    <td>Maria2022</td>
    <td>LHI SDN BHD</td>
    <td>CLIENT</td>
    <td>Active</td>
    <td>
        <button class="profile">Profile</button>
        <button class="kemaskini">Kemaskini</button>
        <button class="delete">Delete</button>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>Christina Berglund</td>
    <td>Chris2022</td>
    <td>PLUGIN AND CO SDN BHD</td>
    <td>CLIENT</td>
    <td>Active</td>
    <td>
        <button class="profile">Profile</button>
        <button class="kemaskini">Kemaskini</button>
        <button class="delete">Delete</button>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>Francisco Chang</td>
    <td>Chang2022</td>
    <td>KINGCRAB SDN BHD</td>
    <td>CLIENT</td>
    <td>Active</td>
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