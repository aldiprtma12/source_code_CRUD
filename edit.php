<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $nip= $_POST['nip'];
    
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
        
    // update user data
    $result = mysqli_query($koneksi, "UPDATE data_karyawan SET Nama_Lengkap='$name',Email='$email',Telepon='$mobile' WHERE NIP=$nip");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nip = $_GET['nip'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM data_karyawan WHERE NIP=$nip");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['Nama_Lengkap'];
    $email = $user_data['Email'];
    $mobile = $user_data['Telepon'];
	$nip = $user_data['NIP'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>NIP</td>
                <td><input type="text" name="nip" value=<?php echo $nip;?>></td>
            </tr>

            <tr> 
                <td>Nama Lengkap</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Telepon</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nip" value=<?php echo $_GET['nip'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>