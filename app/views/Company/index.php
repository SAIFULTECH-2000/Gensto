<script src="https://kit.fontawesome.com/75759bf957.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<script>
    function checker() {
        var result = confirm('Are you sure to delete?');
        if (result == false) {
            event.preventDefault();
        }
    }
</script>
<style>
    .center {
        text-align: center;
    }
</style>
<div class="con">

    <div class="search_wrap search_wrap_3">
        <div class="search_box">
            <input id="myInput" type="text" class="input" placeholder="search...">
            <div class="btn btn_common">
                <i class="fa-solid fa-magnifying-glass ico"></i>
            </div>
        </div>
    </div>
    <h2 class="center">Company Details</h2>

    <tbody id="myTable">
        <?php foreach ($data as $datas) : ?>
            <tr>
                <td><?= $datas['id']; ?></td>
                <td><?= $datas['nama']; ?></td>
                <td><?= $datas['address']; ?></td>
                <td><?= $datas['termsandconditions']; ?></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
    </table>
    <?php foreach ($data as $datas) : ?>
        <h3>Name: <?= $datas['nama']; ?></h3>
        <h3>Address: <?= $datas['address']; ?></h3>
        <a href="<?=baseurl?>Company/edit">Edit Company profile</a>

    <?php endforeach; ?>


</div>