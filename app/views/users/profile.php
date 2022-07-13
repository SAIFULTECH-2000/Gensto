<div class="content">
   <div style="padding:50px">

    <br>
    <h1>Profile</h1>
    <hr>
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?=$data['name']?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?=$data['username']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?=$data['email']?></td>
        </tr>
    

    </table>
    <a href="<?=baseurl?>Users/editprofile">Edit Profile</a>
   </div>
</div>