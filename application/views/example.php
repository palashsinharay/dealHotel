<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
        <link rel="stylesheet" href="<?php echo base_url('styles/styles_admin_menu.css');?>" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
<style type='text/css'>
body
{
	
	background: #DCDDDF url(http://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
	color: #000;
	font: 14px Arial;
	margin: 0 auto;
	padding: 0;
	position: relative;

}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
#data_tbl {width:90%; margin: 0 auto;}
</style>
</head>
<body>
    <nav>
            <ul class="fancyNav">
<!--                <li id="home"><a href="#home" class="homeIcon">Home</a></li>-->
                <li id="news"><a href='<?php echo base_url('admin/cms_page')?>'>CMS</a> </li>
                <li id="services"><a href='<?php echo base_url('admin/logout')?>'>logout</a></li>
                
            </ul>
        </nav>
    
   
<!--	<div style='height:20px;'></div>  -->
    <div id="data_tbl">
		<?php echo $output; ?>
    </div>
</body>
</html>
