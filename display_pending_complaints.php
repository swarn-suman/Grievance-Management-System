<?php
$query1 = "SELECT * FROM `complaints`";
$result = mysqli_query($conn, $query1);
$num = 0;
if ($result) {
    echo "<table class='table'><tr class='tr'>";
    echo "<th>Number</th><th>Category</th><th>Sub-Category</th><th>Nature</th><th>Date & Time</th><th>File</th><th>Complaints</th></tr>";
    $num = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        if ($user == $row['user']) {
            $cme = $row['pending'];
            if ($cme == '1') {
                $num++;
                $cate = $row['category'];
                $subcate = $row['subcategory'];
                $nat = $row['nature'];
                $da = $row['date'];
                $fil = $row['file'];
                $co = $row['comp'];
                echo "<tr class='tr'>
                <td>$num</td>
                <td>$cate</td>
                <td>$subcate</td>
                <td>$nat</td>
                <td>$da</td>";
                if ($fil == "" || $fil == '0') {
                    echo "<td>No file</td>";
                } else {
                    echo "<td><a href='$fil' target='_blank'>view file</a></td>";
                }
                echo "<td style='width:200px;'>";
                echo $co;
                echo "</td>
                </tr>";
            }
        }
    }
    echo "</table>";
}
if ($num == 0) {
    echo "Still there is no record";
}
?>
