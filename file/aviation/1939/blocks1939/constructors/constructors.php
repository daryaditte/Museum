<?php 
   $link = mysqli_connect("localhost", "root", "", "museum");
    if (!$link) {echo "Ошибка подключения";}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Конструкторы</title>
    <link rel="stylesheet" href="constructors.css">
</head>
<body>
    <?php 
    $query = "SELECT * FROM constructors";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result)) {  ?>
       
    <input type="checkbox" id="esk-.'<?php echo $row['id']; ?>'."/>
    <label for="esk-.'<?php echo $row['id']; ?>'." class="lightbox"><img src="<?php echo $row['img_constructor']; ?>"/>
        <div class="desc">
           <h2><?php echo $row['name_constructor']; ?></h2>
            <p><?php echo $row['description_constructor']; ?>

            </p>
        </div>
    </label>
    <?php } ?>

    
    <div class="grid">
        <h1>Конструкторы</h1>
    <?php 
    $query = "SELECT * FROM constructors";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result)) {  ?>
      <label for="esk-.'<?php echo $row['id']; ?>'." class="grid-item"><img src="<?php echo $row['img_constructor']; ?>"/>
          <p><?php echo $row['name_constructor']; ?></p>
      </label>
    
    <?php } ?> 
      
      
      <div class="back">
          <a href="../../../../../index.html"><img src="../../../../img_navigation/right-double-chevron2.png" alt="..." class="back-to-home">Вернуться в начало</a>
          <a href="../../1939.html"><img src="../../../../img_navigation/left-arrow2.png" alt="..." class="backward">Назад</a>
      </div>
             
    </div>
    
</body>
</html>