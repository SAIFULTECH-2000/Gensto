<div class="content">
   <div style="padding:50px">
    <br>
    <h1>Create Quotation</h1>
    <hr>
    <form action="<?=baseurl?>Quotation\Create" method="post">
    
   
    <select class="form-select" id="customerid" name="customerid">
    <?php 
  
    while($key=$data['result']->fetch_assoc())
    {
    ?>
    <option value="<?=$key['id']?>"><?=$key['nama']?></option>
    <?php } ?>
    </select>       
   
    <label for="date">Date</label>
    <input type="date" name="date" value="date">    <br>
    <label for="Due date">Due Date</label>
    <input type="date" id="duedate" name="duedate" value="" >

    <input type="submit" value="Submit">
   </div>
</div>