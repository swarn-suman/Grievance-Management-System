<?php
$query1 = "SELECT * FROM `complaints`";
$result = mysqli_query($conn, $query1);
$num = 0;

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $cme = $row['pending'];
        if ($cme == '1') {
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
            echo "Complaint-category: <span id='span'>$cate</span><br />
                Complaint-Subcategory: <span id='span'>$subcate</span><br />
                Complaint-Nature: <span id='span'>$nat</span><br />
                Complaint-Date: <span id='span'>$da</span><br />
                COMPLAINT > <span id='span'>$co</span><br /></h6><br /><hr />";
        }
    }
}
?>
