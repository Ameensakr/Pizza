<html>
<head>
    <title>Add Data</title>
    <style>
.info{
    margin-right:10px;
}
body{
    background:url(images/plus.jpg);
    color:white;
    font-size:22px;
}
td{
    font-size:30px;
}

    </style>
</head>
<center>
<body>
<h2 class="info">Add Data</h2>
<p class="info">
    <a href="admin.php">Home</a>
</p>
<form action="insert.php" method="post" name="add" >
    <table width="25%" border="0" >
        <tr class="item">
            <td>Name</td>
            <td><input type="text" name="Name"></td>
        </tr>
        <tr class="item" >
            <td>Price</td>
            <td><input type="text" name="Price"></td>
        </tr>
        <tr class="item">
            <td>Photo</td>
            <td><input type="text" name="Photo"></td>
        </tr>   
        <tr class="item" style="width="" >
            <td>
            <button><a href="joke.html" style="text-decoration:none; color:black;">Add</a></button> 

            <button><input type="submit" name="submit" value="Add"></button>

            <button><a href="joke.html" style="text-decoration:none; color:black;">Add</a></button> 
        </td>
            
           
        </td>
           
<!--            <td><button name="upload">upload photo</button></td>-->
        </tr>
    </table>
</form>
</body>
</center>
</html>