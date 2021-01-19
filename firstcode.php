<?php

$servername = "localhost";
$username = "root";
$password = "Tejeswar@b1!";

$databasename = "test";
    
$conn = new mysqli($servername, $username, $password,$databasename);


$sql = "select firstname,lastname,gender,serviceprovider_id from serviceprovider";
$results = mysqli_query($conn,$sql);


if($results == false){
    echo mysqli_error($conn);
} else {
    $serviceproviders = mysqli_fetch_all($results,MYSQLI_ASSOC);
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Service Providers</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Service Providers</h1>
        
        <table>
            
            
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>gender</th>
            <th>ServiceProviderId</th>
            </tr>
            
            <?php foreach($serviceproviders as $spd): ?>
            <tr>
                <td><?= $spd['firstname'] ?></td>
                <td><?= $spd['lastname'] ?></td>
                <td><?= $spd['gender'] ?></td>
                <td><?= $spd['serviceprovider_id'] ?></td>
                
            </tr>
            <?php endforeach ?>
        
        </table>
    
    </body>

</html>