<div class="content">
   <div style="padding:50px">
    <br>
<h1>Register New Customer</h1>
<hr>
<form action="<?=baseurl?>Customer/register" method="post">
    <label for="name">Name</label>
    <input type="text" id="nama" name="nama" placeholder="Customer name..">
     <label for="Address">Address</label>
    <input type="text" id="address" name="address" placeholder="Customer Address..">
    <label for="shipaddress">Shipaddress</label>
    <input type="text" id="shipaddress" name="shipaddress" placeholder="Customer shipaddress..">
    <input type="submit" value="Submit">
  </form>
</div>
</div>