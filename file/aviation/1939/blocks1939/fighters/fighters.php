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
    <link rel="stylesheet" href="fighters.css">
</head>
<body>
<h1>Истребители</h1>
<img src="img_fighters/11_17_13_12_44_15_i-15.png" alt="..." class="sam">
<div class="container-fluid">
   <div class="row">
       <?php 
       $query = "SELECT * FROM fighters";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result)) {
        
       ?>
        <div class="card bg-light mb-3">
              <div class="card-header"> <b><?php echo $row['name']; ?></b> <hr> Конструктор: <b><?php  echo $row['constructor'];?></b> </div>
             <img class="card-img-top" src="<?php echo $row['img']; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"> <?php echo $row['description']; ?> </h5>
                       <p class="card-text">
                        Размах крыла, м: <b><?php echo $row['wingspan']; ?></b>  <br>
                         Длина, м: <b><?php echo $row['length']; ?></b><br>
                         Масса пустого самолета, кг: <b><?php echo $row['	aircraft_weight']; ?></b> <br>
                         Тип двигателя: <b><?php echo $row['engine_type']; ?></b> <br>
                         Мощность: <b><?php echo $row['power']; ?></b> <br>
                         Максимальная скорость:<b> <?php echo $row['speed']; ?></b><br>
                         Дальность полета: <b><?php echo $row['dal']; ?></b> <br>
                         Пракческий потолок: <b><?php echo $row['ceiling']; ?></b> <br>
                         Вооружение: <b><?php echo $row['armament']; ?></b> <br>          
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