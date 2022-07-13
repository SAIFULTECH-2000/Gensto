<div class="content">
   <div style="padding:50px">
    <br>
    <h1>Create Quotation</h1>
    <hr>
    <form action="<?=baseurl?>Quotation\Create" method="post">
    <?php 
  
    while($key=$data['result']->fetch_assoc())
    {
    ?>
    <select class="form-select" id="customerid" name="customerid">
    <option value="<?=$key['id']?>"><?=$key['nama']?></option>
    </select>       
    <?php } ?>
    <label for="date">Date</label>
    <input type="date" name="date" value="date">    <br>
    <label for="Due date">Due Date</label>
    <input type="date" id="duedate" name="duedate" value="" >

    <input type="submit" value="Submit">
   </div>
</div>