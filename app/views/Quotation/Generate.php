<style>
    h1{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
}

h2{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
h3{
    font-size: medium;
    font-family: 'Courier New', Courier, monospace;
}

table.details{
    width: 100%;
}

table.list{
    width: 100%;
    border-collapse: collapse
}

tr.space{
    height: 40px;
}

tr.list {
    width: 100%;
    border: 1px solid black;
    border-collapse: collapse;
}

td, th{
    text-align: center;
}

</style>

<div class="content">

<h1>QUOTATION</h1>
        <br><br>

        <h3><?=$data['user']['nama']?></h3>
        <h3><?=$data['user']['address']?></h3>
        
        <br><br><br>

        <table class="details">
            <tr>
                <th>Bill to:</th>
                <th>Quotation Number: Q<?=$data['id']?></th>
            </tr>
            <tr>
                <td><?=$data['result']['nama']?></td>
                <th><?=$data['result']['date']?></th>
            </tr>
            <tr>
                <td><?=$data['result']['address']?></td>
                <th>Payment Due: <?=$data['result']['duedate']?></th>
            </tr>
            <tr>
                <td></td>
                <th>Issued By: <?=$data['user']['email']?></th>
            </tr>
        </table>
        <br><br>

        <table class="list">
            <tr class="list">
                <th>Item</th>
                <th>Quantity</th>
                <th>Price per Unit (RM)</th>
                <th>Amount (RM)</th>
            </tr>
            <?php 
            $i=1;
            $total=0;
           while($key = $data['result2']->fetch_assoc()){
            $total =$key['unit']*$key['qty'];
            ?>
            <tr class="list">
                <td><?=$key['description']?></td>
                <td><?=$key['qty']?></td>
                <td><?=$key['unit']?></td>
                <td><?=$total?></td>
            </tr>
            <?php } ?>
            <tr class="space">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <th style="font-size: medium;">TOTAL (RM)</th>
                <td style="font-size: medium;"><?=$total?></td>
            </tr>
        </table>
        <br><br><br><br><br>

        
        <h3 style="text-align: center;">For any enquiries, please contact admin at <?=$data['user']['email']?></h3>
        <h1>Thank You</h1>
</div>