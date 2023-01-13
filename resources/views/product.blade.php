<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judulHalaman }}</title>
</head>
<body>
    <p>{{ $body }}</p>
    <?php
       function fungsi (int $a, int $b){
        for ($i=0; $i<$a; $i++){
            $b+=$i;
        }
        return $b;

       }
       echo fungsi(12, "6");
        
    ?>
</body>
</html>