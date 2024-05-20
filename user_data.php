<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
    $query1 = "SELECT * FROM `userloginfo`";
    $result = mysqli_query($conn, $query1);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $user = $row['user'];
            echo $user;
        }
    }

    $query1 = "SELECT * FROM `userregistration`";
    $result = mysqli_query($conn, $query1);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($user == $row['username']) {
                $fname = $row['fname'];
                $lname = $row['lname'];
                $email = $row['email'];
                $phone = $row['phone'];
                $gender = $row['gender'];
                $pass = $row['pass'];
            }
        }
    }

    $query1 = "SELECT * FROM `complaints`";
    $result = mysqli_query($conn, $query1);
    $pend = 0;
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($user == $row['user']) {
                $cme = $row['pending'];
                if ($cme == '1') {
                    $pend++;
                }
            }
        }
    }

    $query1 = "SELECT * FROM `completedcomp`";
    $result = mysqli_query($conn, $query1);
    $compl = 0;
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($user == $row['user']) {
                $compl++;
            }
        }
    }

    $query1 = "SELECT * FROM `inprogresscomp`";
    $result3 = mysqli_query($conn, $query1);
    $inpro = 0;
    if ($result3) {
        while ($row = mysqli_fetch_assoc($result3)) {
            if ($user == $row['user']) {
                $inpro++;
            }
        }
    }
}
?>
