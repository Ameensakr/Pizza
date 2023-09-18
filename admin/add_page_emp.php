<html>
<head>
    <title>Add employee</title>
</head>

<body>
<h2>Add Employee</h2>
<p>
    <a href="admin.php">Home</a>
</p>
<form action="insert_emp.php" method="post" name="add">
    <table width="25%" border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="Name"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="Age"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="text" name="Gender"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="Address"></td>
        </tr>
        <tr>
            <td>Salary</td>
            <td><input type="number" name="Salary"></td>
        </tr>
        <tr>
            <td>Hire_Date</td>
            <td><input type="date" name="Hire_Date"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="Email"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add"></td>
            <!--            <td><button name="upload">upload photo</button></td>-->
        </tr>
    </table>
</form>
</body>
</html>