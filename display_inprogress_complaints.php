<?php
$num = 0;
$query1 = "SELECT * FROM `complaints`";
$seeme = "SELECT * FROM `inprogresscomp`";
$resolt = mysqli_query($conn, $seeme);

if ($resolt) {
    while ($cmp = mysqli_fetch_assoc($resolt)) {
        $tellme = $cmp['user'];
        if ($user == $tellme) {
            $inid = $cmp['compnum'];
            $remark = $cmp['remarks'];
            $result = mysqli_query($conn, $query1);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    if ($id == $inid) {
                        $num++;
                        $cate = $row['category'];
                        $subcate = $row['subcategory'];
                        $nat = $row['nature'];
                        $da = $row['date'];
                        $fil = $row['file'];
                        $co = $row['comp'];
                        echo "<h5 class='tr'>Number:$num</h5>
                        <h6>
                        Remark :<span id='remark'>$remark</span><br />";

                        echo "File: ";
                        if ($fil == "" || $fil == '0') {
                            echo "<span id='span'>No file</span><br />";
                        } else {
                            echo "<a href='$fil' target='_blank'>view file</a><br />";
                        }
                        
                        echo "Complaint-category: <span id='span'>$cate</span><br />
                        Complaint-Subcategory: <span id='span'>$subcate</span><br />
                        Complaint-Nature: <span id='span'>$nat</span><br />
                        Complaint-Date: <span id='span'>$da</span><br />
                        COMPLAINT > <span id='span'>$co</span><br /></h6><br /><hr />";
                    }
                }
            }
        }
    }
}

if ($num == 0) {
    echo "Still there is no record";
}
?>
