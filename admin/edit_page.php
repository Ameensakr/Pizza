<html>
<head>
    <title>Edit Data</title>
</head>

<body>

<?php

require_once 'connect.php';
$id = $_GET['id'];
$up = mysqli_query($link , "select * from pizza where Order_id = $id");
$data = mysqli_fetch_array($up);

?>
<h2>Edit Data</h2>
<p>
    <a href="admin.php">Home</a>
</p>
<form action="edit.php?id=<?php echo $_GET['id'];?>" method="post" name="add">
    <table width="25%" border="0">
        <tr>
            <td>id</td>
            <td><input type="number" name="id" value="<?php echo $data['Order_id'];?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="Name" value="<?php echo $data['Name']?>"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="Price" value="<?php echo $data['Price']?>"></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="text" name="Photo" value="<?php echo $data['Photo']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><button name='update' type ='submit'>update</button></td>
            <!--            <td><button name="upload">upload photo</button></td>-->
        </tr>
    </table>
</form>
</body>
</html>