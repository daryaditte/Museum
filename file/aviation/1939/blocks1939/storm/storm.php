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
    <link rel="stylesheet" href="storm.css">
</head>
<body>
<h1>Штурмовики</h1>
<div class="container-fluid">
   <div class="row">
       <?php 
       $query = "SELECT * FROM storm";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result)) {
        
       ?>
        <div class="card bg-light mb-3">
              <div class="card-header"> <?php echo $row['name_storm']; ?> <hr> <?php  echo $row['constructor_storm'];  ?> </div>
             <img class="card-img-top" src="<?php echo $row['img_storm']; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"> <?php echo $row['description_storm']; ?> </h5>
                       <p class="card-text">
                        Размах крыла, м: <?php echo $row['wingspan_storm']; ?>  <br>
                         Длина, м: <?php echo $row['length_storm']; ?><br>
                         Масса пустого самолета, кг: <?php echo $row['aircraft_weight_storm']; ?> <br>
                         Тип двигателя: <?php echo $row['engine_type_storm']; ?> <br>
                         Мощность: <?php echo $row['power_storm']; ?> <br>
                         Максимальная скорость: <?php echo $row['speed_storm']; ?><br>
                         Дальность полета: <?php echo $row['dal_storm']; ?> <br>
                         Пракческий потолок: <?php echo $row['ceiling_storm']; ?> <br>
                         Вооружение: <?php echo $row['armament_storm']; ?> <br>          
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