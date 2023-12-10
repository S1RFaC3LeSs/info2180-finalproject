<?php
require_once 'Filter.php';

$host = 'localhost'; // Database host
$db = 'dolphin_crm'; // Database name
$username =  'username'; // username
$password = 'password'; // password



$conn = new pdo ($host,$username,$password,$db);

if (isset($_GET["All"])){
    $contacts ="SELECT * FROM contacts"; //all query
    $result = $conn=>query($contacts);
}
if (isset($_GET["Sales_lead"])){
    $sales ="SELECT * FROM contacts WHERE type='Sales Lead'"; //all query that holds the type Sales Lead
    $result = $conn=>query($sales);
}
if (isset($_GET["Support"])){
    $support ="SELECT * FROM contacts WHERE type='Support'"; //all query that holds the type support
    $result = $conn=>query($support);
}

?>

<Table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Company</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody id="info">
        <?php foreach ($result as $row): ?>
            <tr>
                <td><?= $row['title']."".$row['firstname']. "".$row['lastname']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['company']; ?></td>
                <td><?= $row['type']; ?></td>
            </tr>
                <?php endforeach ?>
    </tbody>
</Table>
