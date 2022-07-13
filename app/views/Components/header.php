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
            <h4><?= $_SESSION['username']?></h4>
        </div>
       <?php 
       $url =$_GET['url'];
       $url=explode("/",$url);
       $role = $_SESSION['role'];
       ?>
       <?php if($role=='Admin'){?>
        <a  href="<?=baseurl?>Dashboard"  <?php if( ucfirst($url[0])=='Dashboard')echo "class='active'"?>>Home</a>
        <a  href="<?=baseurl?>User" <?php if( ucfirst($url[0])=='User')echo "class='active'"?>>Users</a>
        <?php } ?>
          <a href="<?=baseurl?>Users" <?php if( ucfirst($url[0])=='Users')echo "class='active'"?>>Profile</a>
          <?php if($role=='Client'){?>
        <a href="<?=baseurl?>Customer"  <?php if( ucfirst($url[0]=='Customer'))echo "class='active'"?>>Customer</a>
        <a href="<?=baseurl?>Quotation"  <?php if( ucfirst($url[0]=='Quotation'))echo "class='active'"?>>Quotation</a>
        <a href="<?=baseurl?>Invoice"  <?php if( ucfirst($url[0]=='Invoice'))echo "class='active'"?>>Invoice</a>
        <a href="<?=baseurl?>Company"  <?php if( ucfirst($url[0]=='Company'))echo "class='active'"?>>Companys</a>
           <?php } ?>
       
       <a href="<?=baseurl?>Auth/logout">Logout</a>
    </div>