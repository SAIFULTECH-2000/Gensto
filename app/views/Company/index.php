<script src="https://kit.fontawesome.com/75759bf957.js" crossorigin="anonymous"></script>
<div class="con">

    <div class="search_wrap search_wrap_3">
        <div class="search_box">
            <input type="text" class="input" placeholder="search...">
            <div class="btn btn_common">
            <i class="fa-solid fa-magnifying-glass ico"></i>
            </div>
        </div>
    </div>
    <h2>Company List</h2>
    
    
    <a href="<?=baseurl?>Company/register"> <button class="myButton">Register New Company</button></a>
    
    <table class="styled-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Address</th>
                <th>Terms & Conditions</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $datas): ?>
            <tr>
                <td><?= $datas['id']; ?></td>
                <td><?= $datas['nama']; ?></td>
                <td><?= $datas['address']; ?></td>
                <td><?= $datas['termsandconditions']; ?></td>
                <td>
                    <button class = "bview">View</button>
                    <button class = "bupdate">Kemaskini</button>
                    <button class = "bdelete">Delete</button>
                </td>
            </tr>
                <?php endforeach; ?>
           
        </tbody>
    </table>

</div>