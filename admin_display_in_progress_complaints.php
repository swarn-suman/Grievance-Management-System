<?php
$num = 0;
$query1 = "SELECT * FROM `complaints`";
$seee = "SELECT * FROM `inprogresscomp`";
$reso = mysqli_query($conn, $seee);

if ($reso) {
    while ($inpro = mysqli_fetch_assoc($reso)) {
        $inid = $inpro['compnum'];
        $result = mysqli_query($conn, $query1);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                if ($id == $inid) {
                    $num++;
                    $usr = $row['user'];
                    $cate = $row['category'];
                    $subcate = $row['subcategory'];
                    $nat = $row['nature'];
                    $da = $row['date'];
                    $fil = $row['file'];
                    $co = $row['comp'];

                    echo "<h5 class='tr'>
                        <form method='POST' action='solveinpro1.php'>
                            <input type='text' name='user' value='$usr' class='now'>
                            <input type='text' name='compid' value='$id' class='now'>
                            <input type='submit' value='complete it' style='float:right;margin:0px;' class='btn btn-secondary'>
                        </form>
                        Number:$num
                        User: $usr
                    </h5>";
                    echo "<h6>File: ";
                    if ($fil == "" || $fil == '0') {
                        echo "<span id='span'>No file</span><br />";
                    } else {
                        echo "<a href='$fil' target='_blank'>view file</a><br />";
                    }
                    echo "Complaint-category:<span id='span'> $cate</span><br />
                        Complaint-Subcategory: <span id='span'>$subcate</span><br />
                        Complaint-Nature: <span id='span'>$nat</span><br />
                        Complaint-Date: <span id='span'>$da</span><br />
                        COMPLAINT > <span id='span'>$co</span><br /></h6><br /><hr />";
                }
            }
        }
    }
}
?>
