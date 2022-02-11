<?php
require 'Levenshtein.php';
require 'HammingDist.php';

$result='';
//get Levenshtein distance when requested and will be stored in $result
if(isset($_POST['Levenshtein'])){

  $str1 = $_POST['str1'];
  $str2 = $_POST['str2'];
  $result=  Levenshtein::levenshtein_dis($str1,$str2);

}
//get Hamming distance when requested and will be stored in $result

if(isset($_POST['Hamming'])){

  $str1 = $_POST['str1'];
  $str2 = $_POST['str2'];
  $result=   hammingDist::hamming_dis($str1,$str2);
}
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>php Developer</title>
</head>
<body>
     <div class="content  container">
         <div class=" m-5">
            <form class="row" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post" >
             <div class="col-6">
  <div class="form-group  text-center">
<input class="form-control " name="str1" placeholder="Enter The Text">
  </div>
</div>
<div class="col-6">
  <div class="form-group  text-center">
    <input class="form-control" name="str2"  placeholder="Enter The Text">
      </div>
  
    </div>
    
<hr class="mt-5">
<div class="text-center ">
reset :<?php  echo $result ?>
</div>

<div class="form-action text-center mt-5">
  <button class="btn btn-success" type='submit' name='Hamming'>Hamming </button>
  <button class="btn btn-success"   type='submit' name='Levenshtein'>Levenshtein </button>
</div>
</form>

</div>
     </div>
</body>
</html>