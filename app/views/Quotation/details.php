<div class="content">
   <div style="padding:50px">
    <br>
    <h1> Quotation Details</h1>
    <hr>
    <form action="<?=baseurl?>Quotation\details\<?=$data['customerid']?>\<?=$data['date']?>" method="post">
    <?php 
  
    while($key=$data['result']->fetch_assoc())
    {
    ?>
    <select class="form-select" id="customerid" name="customerid" readonly>
    <option value="<?=$key['id']?>"><?=$key['nama']?></option>
    </select>       
    <?php } ?>
    <label for="date">Date</label>
    <p><?=$data['date']?></p>    <br>
    <label for="description">Description</label>
    <input type="text" id="description" name="description" value="" >
    <label for="unit/price">unit/price</label>
    <input type="text" id="unit/price" name="unit" value="" >
    <label for="unit/price">Qty</label>
    <input type="text" id="qty" name="qty" value="" >
    <input type="submit" value="add new item">
    <a class="btn" href="<?=baseurl?>\Quotation">List Quotation </a>
   </div>
</div>