<html>
<head>
    <title>Edit Data</title>
</head>

<body>

<?php

require_once 'connect.php';
$id = $_GET['id'];
$up = mysqli_query($link , "select * from employee where ID = $id");
$data = mysqli_fetch_array($up);

?>
<h2>Edit employee</h2>
<p>
    <a href="admin.php">Home</a>
</p>
<form action="edit_emp.php?id=<?php echo $_GET['id'];?>" method="post" name="add">
    <table width="25%" border="0">
        <tr>
            <td>ID</td>
            <td><input type="number" name="ID" value="<?php echo $data['ID'];?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="Name" value="<?php echo $data['Name']?>"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="Age" value="<?php echo $data['Age']?>"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="text" name="Gender" value="<?php echo $data['Gender']?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="Address" value="<?php echo $data['Address']?>"></td>
        </tr>
        <tr>
            <td>Salary</td>
            <td><input type="text" name="Salary" value="<?php echo $data['Salary']?>"></td>
        </tr>
        <tr>
            <td>Hire_Date</td>
            <td><input type="text" name="Hire_Date" value="<?php echo $data['Hire_Date']?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="Email" value="<?php echo $data['Email']?>"></td>
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