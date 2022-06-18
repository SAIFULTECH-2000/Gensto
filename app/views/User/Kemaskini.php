<div class="content">
   <div style="padding:50px">
    <br>
    <h1>Kemaskini</h1>
    <hr>
    <form action="<?=baseurl?>user/kemaskini" method="post">
    <input type="hidden" name="id" value="<?=$data['id']?>">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="<?=$data['name']?>" placeholder="Your name..">

    <label for="username">Username</label>
    <input type="text" id="username" name="username" value="<?=$data['username']?>" placeholder="Your username..">
    <label for="Email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email address" value="<?=$data['email']?>">
    <label for="role">Role</label>
    <select id="role" name="role">
      <option value="Admin" <?php if($data['role'] == 'Admin') echo 'selected'; ?>>Admin</option>
      <option value="Client" <?php if($data['role'] == 'Client') echo 'selected'; ?>>Client</option>
    </select>
    <input type="submit" value="Submit">
   </div>
</div>