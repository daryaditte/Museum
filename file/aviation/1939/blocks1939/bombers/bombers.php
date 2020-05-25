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
    <link rel="stylesheet" href="bombers.css">
</head>
<body>
<h1>Бомбардировщики</h1>
<img src="img_bombers/rb-17.png" alt="..." class="sam">
<div class="container-fluid">
   <div class="row">
       <?php 
       $query = "SELECT * FROM bombers";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result)) {
        
       ?>
        <div class="card bg-light mb-3">
              <div class="card-header"> <?php echo $row['name_bombers']; ?> <hr> <?php  echo $row['constructor_bombers'];  ?> </div>
             <img class="card-img-top" src="<?php echo $row['img_bombers']; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"> <?php echo $row['description_bombers']; ?> </h5>
                       <p class="card-text">
                        Размах крыла, м: <?php echo $row['wingspan_bombers']; ?>  <br>
                         Длина, м: <?php echo $row['length_bombers']; ?><br>
                         Масса пустого самолета, кг: <?php echo $row['	aircraft_weight_bombers']; ?> <br>
                         Тип двигателя: <?php echo $row['engine_type_bombers']; ?> <br>
                         Мощность: <?php echo $row['power_bombers']; ?> <br>
                         Максимальная скорость:<?php echo $row['speed_bombers']; ?><br>
                         Дальность полета: <?php echo $row['dal_bombers']; ?> <br>
                         Пракческий потолок: <?php echo $row['ceiling_bombers']; ?> <br>
                         Вооружение: <?php echo $row['armament_bombers']; ?> <br>          
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