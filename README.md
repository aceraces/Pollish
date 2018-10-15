 #Database (unused)
    <script>
        /*
        <?php
        $pollid = $_GET['pollid'];
        $dbServername = 'cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
        $dbUsername = 'tgevu4heav8r9ya3';
        $dbPassword = 'bxvdvshu91dospfk';
        $dbName = 'x7tww49f1zeflsnc';

        $connect = mysqli_connect($dbServername,$dbUsername,$dbPassword, $dbName);
        $query = "SELECT * FROM polls WHERE pollid='$pollid'";
        $q = mysqli_query($connect, $query);
        while($row=mysqli_fetch_array($q)){
            $id=$row[0];
            $title=$row[1];
            $pollid=$row[2];
            $ipaddress=$row[3];
            ?>
            <table>
            <tr>
            <td>
            <?php
            $questions = "SELECT * FROM questions WHERE pollid='$pollid'";
            $q2 = mysqli_query($connect, $questions);
            while($r=mysqli_fetch_array($q)){
                $question=$r[0];
                echo '<tr><td>'.$question.'</td><td>RadioButton</td></tr>';
            }
            }
            ?>
            </td>
            </tr>
            </table>
            */
    </script>