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
   <h1>Quotation Section</h1>
   <br> 
   <hr>
    
<table id="quotes">
  <tr>
    <th>No</th>
    <th>Company</th>
    <th>Name</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>1</td>
    <td>LHI SDN BHD</td>
    <td>Maria Anders</td>
    <td>Complete</td>
    <td>
        <button class="generate">Generate</button>
        <button class="download">Download</button>
        <button class="delete">Delete</button>
    </td>
  </tr>
  <tr>
  <td>2</td>
    <td>PLUGIN AND CO SDN BHD</td>
    <td>Christina Berglund</td>
    <td>Complete</td>
    <td>
        <button class="generate">Generate</button>
        <button class="download">Download</button>
        <button class="delete">Delete</button>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>KINGCRAB SDN BHD</td>
    <td>Francisco Change</td>
    <td>Complete</td>
    <td>
        <button class="generate">Generate</button>
        <button class="download">Download</button>
        <button class="delete">Delete</button>
    </td>
  </tr>
</table>

   </div>
   <br><br>
</div>