<?php
if(isset($_GET['id'])) {
$id = $_GET['id'];
echo file_get_contents('https://drive.google.com/u/4/uc?id='.$id.'&export=download');
}   else {
    echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta content="width=300, initial-scale=1" name="viewport">
<meta name="description" content="HTML Web Simple Previewer And Simple Hosting Server »»»» you can host your one page html website for use as demo..">
<meta name="keywords" content="Web Hosting, Drive to web, Html web preview, Html preview, web previewer">
<title>HTML Web Simple Previewer And Simple Hosting Server</title>
<script src="https://bit.ly/drivetoweb2-anly"></script>
</head>
<body>
<h1 style="text-align: center;"><span style="font-size: 30px; font-family: 'times new roman', times;">HTML Web Simple Previewer And Simple Hosting Server<br /></span></h1>

    <form action="" method="get">
     <input type="text" placeholder="Enter File ID " name="id">
     <button type="submit">Done</button>
    </form>
    <style>
    input , button {
        background : #FFDEAD ;
        font-size : 25px ;
        border : none ;
        outline : none ;
        padding : 4px ;
    }
    </style>

<h3><strong><span style="font-size: 18.6px;">How To Use This ?</span></strong></h3>
<p><span style="font-size: 18.6px;">&nbsp; &nbsp;Here, </span></p>
<ol>
<li><span style="font-size: 18.6px;">The first step is to file the html, css and javascript you want into one file and upload it to google drive.</span></li>
<li><span style="font-size: 18.6px;">The second step is to generate a public share link to the uploaded file.</span></li>
<li><span style="font-size: 18.6px;">Then copy the ID of your file in the link you have prepared as below and paste it in the search bar called file id at the top of this web page. </span></li>
</ol>
<p>&nbsp;</p>
<p><strong><span style="font-family: 'courier new', courier;">https://drive.google.com/file/d/</br><span style="color: #ff0000; background-color: #c0c0c0;">17Yq_PwITq4fQ606UEIrX4IDGyiZiJVzR</span></br>/view?usp=sharing</span></strong></p></br>
<p><span style="font-size: 18.6px;">Then touch <b>Done</b> Button..</span></p>
<p><strong><em><span style="font-size: 16px;">This is the way to make your work successful ...</span></em></strong></p>
</body>
</html>';

}

?>

