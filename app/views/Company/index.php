<script src="https://kit.fontawesome.com/75759bf957.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
    function checker(){
        var result = confirm('Are you sure to delete?');
        if (result == false){
            event.preventDefault();
        }
    }
</script>
<div class="con">

    <div class="search_wrap search_wrap_3">
        <div class="search_box">
            <input id="myInput" type="text" class="input" placeholder="search...">
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
        <tbody id="myTable">
        <?php foreach ($data as $datas): ?>
            <tr>
                <td><?= $datas['id']; ?></td>
                <td><?= $datas['nama']; ?></td>
                <td><?= $datas['address']; ?></td>
                <td><?= $datas['termsandconditions']; ?></td>
                <td>
                    <button class = "bview">View</button>
                    <button class = "bupdate">Kemaskini</button>
                    <form action="<?=baseurl?>company/deres" method="POST" >
                    <input type="hidden" name="id" value="<?=$datas['id']; ?>">
                    <input onclick="checker()" class ="bdelete" type="submit" value="Delete">

                    </form>
                    <!-- <a onclick="checker()" href="<?=baseurl?>Company/delete?fn=$datas[id]"><button class = "bdelete">Delete</button></a> -->
                    
                </td>
            </tr>
                <?php endforeach; ?>
           
        </tbody>
    </table>

</div>