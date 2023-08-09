<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM data_karyawan ORDER BY nip DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<button> <a href="add.php">Add New User</a><br/><br/></button>
 
    <table width='80%' border=1 align="center">
 
    <tr>
        <th>NIP</th> <th>Nama Lengkap</th> <th>Telepon</th> <th>Email</th> <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td align='center'>".$user_data['NIP']."</td>";
        echo "<td>".$user_data['Nama_Lengkap']."</td>";
        echo "<td align='center'>".$user_data['Telepon']."</td>";
        echo "<td align='center'>".$user_data['Email']."</td>";    
        echo "<td align='center'><a href='edit.php?nip=$user_data[NIP]'>Edit</a> | <a href='delete.php?nip=$user_data[NIP]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>