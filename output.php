<?php
include_once('karyawan.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900" rel="stylesheet">

</head>
<body>
    <h1>Data Karyawan Perusahaan</h1>
    <div class="filter">
        <ul class="button">   
                <li>
                    Filter by status : 
                </li> 
                <form method="post">
                    <input type="submit" name='buttonAll' value="All"></input>
                    <input type="submit" name='buttonFulltime' value="Fulltime"></input>
                    <input type="submit" name='buttonParttime' value="Parttime"></input>
                </form>     
        </ul>
    </div>

    <table class="content">
    <thead>
        <tr>
        <th>No.</th>
        <th>Nama Lengkap</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Level</th>
        <th>Status</th>
        <th>Gaji</th>
        </tr>
    </thead>
    <tbody>
    
    <?php if(array_key_exists('buttonAll', $_POST)){?>
        <tr>
        <?php for($i=0;$i<count($array1);$i++){ ?>
            <td> <?php echo $array1[$i] ?></td> 
        <?php } ?>  
        </tr>
        <tr>
        <?php for($i=0;$i<count($array2);$i++){ ?>
            <td> <?php echo $array2[$i] ?></td> 
        <?php } ?>  
        </tr>
        <tr>
        <?php for($i=0;$i<count($array3);$i++){ ?>
            <td> <?php echo $array3[$i] ?></td> 
        <?php } ?>  
        </tr>
        <tr>
        <?php for($i=0;$i<count($array4);$i++){ ?>
            <td> <?php echo $array4[$i] ?></td> 
        <?php } ?>  
        </tr>
        <tr>
        <?php for($i=0;$i<count($array5);$i++){ ?>
            <td> <?php echo $array5[$i] ?></td> 
        <?php } ?>  
        </tr>
    <?php } ?>


    <?php if(array_key_exists('buttonFulltime', $_POST)){?>
        <tr>
        <?php for($i=0;$i<count($array1);$i++){ ?>
            <td> <?php echo $array1[$i] ?></td> 
        <?php } ?>  
        </tr>
        <tr>
        <?php for($i=0;$i<count($array3);$i++){ ?>
            <td> <?php echo $array3[$i] ?></td> 
        <?php } ?>  
        </tr>
        <tr>
        <?php for($i=0;$i<count($array5);$i++){ ?>
            <td> <?php echo $array5[$i] ?></td> 
        <?php } ?>  
        </tr>
    <?php } ?>


    <?php if(array_key_exists('buttonParttime', $_POST)){?>
        <tr>
        <?php for($i=0;$i<count($array2);$i++){ ?>
            <td> <?php echo $array2[$i] ?></td> 
        <?php } ?>  
        </tr>
        <tr>
        <?php for($i=0;$i<count($array4);$i++){ ?>
            <td> <?php echo $array4[$i] ?></td> 
        <?php } ?>  
        </tr>
    <?php } ?>

    </tbody>
    </table>
</body>
</html>