<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
</head>
<body>
    <h1>Upload files to server</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <p><input type="file" name="file"></p>
        <p><input type="submit" value="Submit"></p>
    </form>
    <hr>
    <h2>Images List</h2>




    <?php
    $manager=opendir('./images');
    if($manager):
        while(($image=readdir($manager))!==false):
            if($image!='.'&&$image!='..'):
                echo "<img src='images/$image' width='200px'><br>";
            endif;
        endwhile;
    endif;



    ?>
</body>
</html>