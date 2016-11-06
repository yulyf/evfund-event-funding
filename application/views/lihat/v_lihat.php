<?php
include_once 'application\models\koneksi.php';

// fetch files
$sql = "select filename from tbl_files";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View & Download file</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
</head>
<body>
<br/>
<div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>File Name</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><a href="berkas/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                    <td><a href="berkas/<?php echo $row['filename']; ?>" download>Download</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>