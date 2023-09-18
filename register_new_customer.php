<html>
<head>
    <title>Add New Customer</title>
    <style>
      body{
        margin-top:60px;
       background:url(images/hello.webp);
       /* background:no-repeat; */
       bacground-size:100% 100%;
       color:white;
       background-size: cover;
  background-position: center;
      } 
    </style>
</head>
<center>
<body >
<h2 ">Add New Customer</h2>
<h4>very important note:(only for new customers)</h4>
<p>
    <a href="index.php" style="text-decoration:none; color:gray">Home</a>
</p>
<form action="insert_customer.php" method="post" name="add">
    <table width="25%" border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="Name"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="Address"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="Email"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="Phone"></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-left:50px;"><input type="submit" name="submit" value="register"></td>
            <!--            <td><button name="upload">upload photo</button></td>-->
        </tr>
    </table>
</form>
</body>
</center>
</html>