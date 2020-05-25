<?php 
   $link = mysqli_connect("127.0.0.1", "root", "", "museum");
    if (!$link) {echo "Ошибка подключения";}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1939-1945</title>
    <link rel="stylesheet" href="../../../../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="auxiliary.css">
</head>
<body>
<h1>Вспомогательные</h1>
<img src="img_auxiliary/" alt="..." class="sam">
<div class="container-fluid">
   <div class="row">
       <?php 
       $query = "SELECT * FROM auxiliary";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result)) {
        
       ?>
        <div class="card bg-light mb-3">
              <div class="card-header"> <?php echo $row['name_auxiliary']; ?> <hr> <?php  echo $row['constructor_auxiliary'];  ?> </div>
             <img class="card-img-top" src="<?php echo $row['img_auxiliary']; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"> <?php echo $row['description_auxiliary']; ?> </h5>
                       <p class="card-text">
                        Размах крыла, м: <?php echo $row['wingspan_auxiliary']; ?>  <br>
                         Длина, м: <?php echo $row['length_auxiliary']; ?><br>
                         Масса пустого самолета, кг: <?php echo $row['	aircraft_weight_auxiliary']; ?> <br>
                         Тип двигателя: <?php echo $row['engine_type_auxiliary']; ?> <br>
                         Мощность: <?php echo $row['power_auxiliary']; ?> <br>
                         Максимальная скорость:<?php echo $row['speed_auxiliary']; ?><br>
                         Дальность полета: <?php echo $row['dal_auxiliary']; ?> <br>
                         Пракческий потолок: <?php echo $row['ceiling_auxiliary']; ?> <br>
                         Вооружение: <?php echo $row['armament_auxiliary']; ?> <br>          
              </div>
            </div>
            <?php } ?>
            
    </div>                          
</div>

<div class="back">
    <a href="../../../../../index.html"><img src="../../../../img_navigation/right-double-chevron.png" alt="..." class="back-to-home">Вернуться в начало</a>
    <a href="../../1939.html"><img src="../../../../img_navigation/left-arrow.png" alt="..." class="backward">Назад</a>
</div>
</body>
</html>