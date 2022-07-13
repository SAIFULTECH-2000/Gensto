<div class="content">
   <div style="padding:50px">
    <br>
    <h1>Kemaskini</h1>
    <hr>
    <form action="<?=baseurl?>Company/edit/<?=$data['id']?>" method="post">
    <label for="name">Name</label>
    <input type="text" id="nama" name="nama" value="<?=$data['nama']?>" placeholder="Your name..">

    <label for="address">Address</label>
    <input type="text" id="address" name="address" value="<?=$data['address']?>" placeholder="Your username..">
 
    <input type="submit" value="Submit">
   </div>
</div>