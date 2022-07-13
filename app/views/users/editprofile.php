<div class="content">
   <div style="padding:50px">
    <br>
    <h1>Kemaskini Profile</h1>
    <hr>
    <form action="<?=baseurl?>users/editprofile" method="post">
    <input type="hidden" name="id" value="<?=$data['id']?>">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="<?=$data['name']?>" placeholder="Your name..">
    <label for="Email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email address" value="<?=$data['email']?>">
    <input type="submit" value="Submit">
   </div>
</div>