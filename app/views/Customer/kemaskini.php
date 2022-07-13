<div class="content">
   <div style="padding:50px">
    <br>
    <h1>Kemaskini</h1>
    <hr>
    <form action="<?=baseurl?>Customer/kemaskini/<?=$data['id']?>" method="post">
    <input type="hidden" name="id" value="<?=$data['id']?>">
    <label for="name">Name</label>
    <input type="text" id="nama" name="nama" value="<?=$data['nama']?>" placeholder="Your name..">

    <label for="address">Address</label>
    <input type="text" id="address" name="address" value="<?=$data['address']?>" placeholder="Your username..">
    <label for="Ship Address">Ship Address</label>
    <input type="text" id="shipaddress" name="shipaddress" placeholder="Your Ship Address" value="<?=$data['shipaddress']?>">
 
    <input type="submit" value="Submit">
   </div>
</div>