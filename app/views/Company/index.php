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
            <tr>
                <td>1</td>
                <td>Jamil</td>
                <td>No 46, Jalan Hutan Melintang</td>
                <td>Term 1</td>
                <td>
                    <button class = "bview">View</button>
                    <button class = "bupdate">Kemaskini</button>
                    <button class = "bdelete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nami</td>
                <td>No 47, Jalan Hutan Melintang</td>
                <td>Term 2</td>
                <td>
                    <button class = "bview">View</button>
                    <button class = "bupdate">Kemaskini</button>
                    <button class = "bdelete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Iskandar</td>
                <td>No 47, Jalan Hutan Melintang</td>
                <td>Term 2</td>
                <td>
                    <button class = "bview">View</button>
                    <button class = "bupdate">Kemaskini</button>
                    <button class = "bdelete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Malik</td>
                <td>No 47, Jalan Hutan Melintang</td>
                <td>Term 2</td>
                <td>
                    <button class = "bview">View</button>
                    <button class = "bupdate">Kemaskini</button>
                    <button class = "bdelete">Delete</button>
                </td>
            </tr>
            <!-- and so on... -->
        </tbody>
    </table>

</div>