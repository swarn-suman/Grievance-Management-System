<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
    $query1 = "SELECT * FROM `complaints`";
    $result = mysqli_query($conn, $query1);
    $pend = 0;
    $full = 0;
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $cme = $row['pending'];
            if ($cme == '1') {
                $pend++;
            }
        }
    }
    $full += $pend;

    $query1 = "SELECT * FROM `completedcomp`";
    $result = mysqli_query($conn, $query1);
    $compl = 0;
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $full++;
            $compl++;
        }
    }

    $query1 = "SELECT * FROM `inprogresscomp`";
    $result = mysqli_query($conn, $query1);
    $inpro = 0;
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $inpro++;
            $full++;
        }
    }
}
?>
