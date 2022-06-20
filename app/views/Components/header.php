<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=baseurl?>css/style.css">
    <title>Dashboard | GenSto</title>
</head>
<body>
    <div class="sidebar">
        <div class="mypic">
            <img src="<?=baseurl?>img/logo.png" style=" border-radius: 50%;" width="100px" >
            <h4>ADMIN</h4>
        </div>
       
        <a  href="<?=baseurl?>Dashboard/"  <?php if( ucfirst($_GET['url'])=='Dashboard')echo "class='active'"?>>Home</a>
        <a  href="<?=baseurl?>User" <?php if( ucfirst($_GET['url'])=='User')echo "class='active'"?>>Users</a>
        <a href="<?=baseurl?>Customer"  <?php if( ucfirst($_GET['url']=='Customer'))echo "class='active'"?>>Customer</a>
        <a href="<?=baseurl?>Quotation"  <?php if( ucfirst($_GET['url']=='Quotation'))echo "class='active'"?>>Quotation</a>
        <a href="<?=baseurl?>Invoice"  <?php if( ucfirst($_GET['url']=='Invoice'))echo "class='active'"?>>Invoice</a>
        <a href="<?=baseurl?>Company"  <?php if( ucfirst($_GET['url']=='Company'))echo "class='active'"?>>Companys</a>
       <a href="aboutus.html">Logout</a>
    </div>