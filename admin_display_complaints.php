<?php
$query1 = "SELECT * FROM `complaints`";
$result = mysqli_query($conn, $query1);

if ($result) {
    $num = 0;

    echo "<br /><br /><h4>Pending Complaints<hr /></h4>";
    while ($row = mysqli_fetch_assoc($result)) {
        $count = $row['pending'];
        if ($count == '1') {
            $num++;
            $id = $row['id'];
            $usr = $row['user'];
            $cate = $row['category'];
            $subcate = $row['subcategory'];
            $nat = $row['nature'];
            $da = $row['date'];
            $fil = $row['file'];
            $co = $row['comp'];

            echo "<h5 class='tr'>
                <form method='POST' action='solvepend1.php'>
                    <input type='text' name='user' value='$usr' class='now'>
                    <input type='text' name='compid' value='$id' class='now'>
                    <input type='submit' value='solve it' style='float:right;margin:0px;' class='btn btn-info'>
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
                Complaint-Subcategory:   <span id='span'>$subcate</span><br />
                Complaint-Nature:        <span id='span'>$nat</span><br />
                Complaint-Date:          <span id='span'>$da</span><br />
                COMPLAINT >               <span id='span'>$co</span><br />
            </h6><br /><hr />";
        }
    }

    echo "<br /><br /><h4>In-progress Complaints<hr /></h4>";
    $num = 0;
    $inp = "SELECT * FROM `inprogresscomp`";
    $reso = mysqli_query($conn, $inp);

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
                            Complaint-Subcategory:   <span id='span'>$subcate</span><br />
                            Complaint-Nature:        <span id='span'>$nat</span><br />
                            Complaint-Date:          <span id='span'>$da</span><br />
                            COMPLAINT >               <span id='span'>$co</span><br />
                        </h6><br /><hr />";
                    }
                }
            }
        }
    }

    echo "<br /><br /><h4>Completed Complaints<hr /></h4>";
    $num = 0;
    $cmp = "SELECT * FROM `completedcomp`";
    $reso = mysqli_query($conn, $cmp);

    if ($reso) {
        while ($coomp = mysqli_fetch_assoc($reso)) {
            $cid = $coomp['compnum'];
            $remark = $coomp['remark'];
            $result = mysqli_query($conn, $query1);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    if ($id == $cid) {
                        $num++;
                        $usr = $row['user'];
                        $cate = $row['category'];
                        $subcate = $row['subcategory'];
                        $nat = $row['nature'];
                        $da = $row['date'];
                        $fil = $row['file'];
                        $co = $row['comp'];
                        echo "<h5 class='tr'>
                            Number:$num  
                            User: $usr  
                        </h5>
                        <h6>
                            Remark :<span id='remark'>$remark</span><br />
                            File: ";
                        if ($fil == "" || $fil == '0') {
                            echo "<span id='span'>No file</span><br />";
                        } else {
                            echo "<a href='$fil' target='_blank'>view file</a><br />";
                        }
                        echo "Complaint-category:<span id='span'> $cate</span><br />
                            Complaint-Subcategory:   <span id='span'>$subcate</span><br />
                            Complaint-Nature:        <span id='span'>$nat</span><br />
                            Complaint-Date:          <span id='span'>$da</span><br />
                            COMPLAINT >               <span id='span'>$co</span><br />
                        </h6><br /><hr />";
                    }
                }
            }
        }
    }
}
?>
