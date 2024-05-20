<?php
$num = 0;
$userss = "SELECT * FROM `userregistration`";
$resultt = mysqli_query($conn, $userss);

if ($resultt) {
    while ($rowuser = mysqli_fetch_assoc($result786)) {
        $num++;
        $fnamen = $rowuser['fname'];
        $lnamen = $rowuser['lname'];
        $usern = $rowuser['username'];
        $mailn = $rowuser['email'];
        $phonen = $rowuser['phone'];
        $gendern = $rowuser['gender'];
        $daten = $rowuser['date'];

        echo "
        <table class='table table-striped table-info table-hover'> 
            <tr class='thead'><th>Number</th><th>$num</th></tr>
            <tr><td>First Name</td><td>$fnamen</td></tr>
            <tr><td>Last Name</td><td>$lnamen</td></tr>
            <tr><td>Username</td><td>$usern</td></tr>
            <tr><td>Email</td><td>$mailn</td></tr>
            <tr><td>Phone Number</td><td>$phonen</td></tr>
            <tr><td>Gender</td><td>$gendern</td></tr>
            <tr><td>Date</td><td>$daten</td></tr>
        </table><hr /><br />";
    }
}
?>
