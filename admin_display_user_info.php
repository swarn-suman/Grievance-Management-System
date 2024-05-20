<?php
$num = 0;
$users = "SELECT * FROM `userloginfo`";
$result78 = mysqli_query($conn, $users);

if ($result78) {
    while ($rowuser = mysqli_fetch_assoc($result78)) {
        $num++;
        $fnamen = $rowuser['fname'];
        $lnamen = $rowuser['lname'];
        $usern = $rowuser['user'];
        $daten = $rowuser['date'];

        echo "
        <table class='table table-striped table-danger table-hover'>
            <tr class='thead'><th>Number</th><th>$num</th></tr>
            <tr><td>First Name</td><td>$fnamen</td></tr>
            <tr><td>Last Name</td><td>$lnamen</td></tr>
            <tr><td>Username</td><td>$usern</td></tr>
            <tr><td>Date</td><td>$daten</td></tr>
        </table><hr /><br />";
    }
}
?>
