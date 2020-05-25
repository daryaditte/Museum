<?php 
$link = mysqli_connect("localhost", "root", "", "museum");
    if (!$link) {
        echo "Ошибка подключения";
    }

if(isset($_POST['add_fighters'])){ 

    $name = $_POST['name'];
    $constructor = $_POST['constructor'];
    $img = 'img_fighters/'.basename($_FILES['photo']['name']);
    $description = $_POST['description'];
    $wingspan = $_POST['wingspan'];
    $length = $_POST['length'];
    $aircraft_weight = $_POST['aircraft_weight'];
    $engine_type = $_POST['engine_type'];
    $power = $_POST['power'];
    $speed = $_POST['speed'];
    $dal = $_POST['dal'];
    $ceiling = $_POST['ceiling'];
    $armament = $_POST['armament'];
    
    $query = "INSERT INTO fighters (name, constructor, img, description, wingspan, length, aircraft_weight, 
    engine_type, power, speed, dal, ceiling, armament) 
    VALUES ('$name', '$constructor', '$img', '$description', '$wingspan', '$length', 
    '$aircraft_weight', '$engine_type', '$power', '$speed', '$dal', '$ceiling', '$armament')";
    
     $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
}

if(isset($_POST['add_bombers'])){
        
    $name_bombers = $_POST['name_bombers'];
    $constructor_bombers = $_POST['constructor_bombers'];
    $img_bombers = 'img_bombers/'.basename($_FILES['photo']['name']);
    $description_bombers = $_POST['description_bombers'];
    $wingspan_bombers = $_POST['wingspan_bombers'];
    $length_bombers = $_POST['length_bombers'];
    $aircraft_weight_bombers = $_POST['aircraft_weight_bombers'];
    $engine_type_bombers = $_POST['engine_type_bombers'];
    $power_bombers = $_POST['power_bombers'];
    $speed_bombers = $_POST['speed_bombers'];
    $dal_bombers = $_POST['dal_bombers'];
    $ceiling_bombers = $_POST['ceiling_bombers'];
    $armament_bombers = $_POST['armament_bombers'];
    
    $query_bombers = "INSERT INTO bombers (name_bombers, constructor_bombers, img_bombers, description_bombers, wingspan_bombers, 
    length_bombers, aircraft_weight_bombers, 
    engine_type_bombers, power_bombers, speed_bombers, dal_bombers, ceiling_bombers, armament_bombers) 
    VALUES ('$name_bombers', '$constructor_bombers', '$img_bombers', '$description_bombers', '$wingspan_bombers', '$length_bombers', 
    '$aircraft_weight_bombers', '$engine_type_bombers', '$power_bombers', '$speed_bombers', '$dal_bombers', '$ceiling_bombers', 
    '$armament_bombers')";
    
     $result_bombers = mysqli_query($link, $query_bombers) or die("Ошибка " . mysqli_error($link)); 
}
        
if(isset($_POST['add_storm'])){
        
    $name_storm = $_POST['name_storm'];
    $constructor_storm = $_POST['constructor_storm'];
    $img_storm = 'img_storm/'.basename($_FILES['photo']['name']);
    $description_storm = $_POST['description_storm'];
    $wingspan_storm = $_POST['wingspan_storm'];
    $length_storm = $_POST['length_storm'];
    $aircraft_weight_storm = $_POST['aircraft_weight_storm'];
    $engine_type_storm = $_POST['engine_type_storm'];
    $power_storm = $_POST['power_storm'];
    $speed_storm = $_POST['speed_storm'];
    $dal_storm = $_POST['dal_storm'];
    $ceiling_storm = $_POST['ceiling_storm'];
    $armament_storm = $_POST['armament_storm'];
    
    $query_storm = "INSERT INTO storm (name_storm, constructor_storm, img_storm, description_storm, wingspan_storm, 
    length_storm, aircraft_weight_storm, 
    engine_type_storm, power_storm, speed_storm, dal_storm, ceiling_storm, armament_storm) 
    VALUES ('$name_storm', '$constructor_storm', '$img_storm', '$description_storm', '$wingspan_storm', '$length_storm', 
    '$aircraft_weight_storm', '$engine_type_storm', '$power_storm', '$speed_storm', '$dal_storm', '$ceiling_storm', 
    '$armament_storm')";
    
    $result_storm = mysqli_query($link, $query_storm) or die("Ошибка " . mysqli_error($link)); 
}
    
if(isset($_POST['add_seaplane'])){
        
    $name_seaplane = $_POST['name_seaplane'];
    $constructor_seaplane = $_POST['constructor_seaplane'];
    $img_seaplane = 'img_seaplane/'.basename($_FILES['photo']['name']);
    $description_seaplane = $_POST['description_seaplane'];
    $wingspan_seaplane = $_POST['wingspan_storm'];
    $length_seaplane = $_POST['length_storm'];
    $aircraft_weight_seaplane = $_POST['aircraft_weight_seaplane'];
    $engine_type_seaplane = $_POST['engine_type_seaplane'];
    $power_seaplane = $_POST['power_seaplane'];
    $speed_seaplane = $_POST['speed_seaplane'];
    $dal_seaplane = $_POST['dal_seaplane'];
    $ceiling_seaplane = $_POST['ceiling_seaplane'];
    $armament_seaplane = $_POST['armament_seaplane'];
    
    $query_seaplane = "INSERT INTO seaplane (name_seaplane, constructor_seaplane, img_seaplane, description_seaplane, wingspan_seaplane, 
    length_seaplane, aircraft_weight_seaplane, 
    engine_type_seaplane, power_seaplane, speed_seaplane, dal_seaplane, ceiling_seaplane, armament_seaplane) 
    VALUES ('$name_seaplane', '$constructor_seaplane', '$img_seaplane', '$description_seaplane', '$wingspan_seaplane', '$length_seaplane', 
    '$aircraft_weight_seaplane', '$engine_type_seaplane', '$power_seaplane', '$speed_seaplane', '$dal_seaplane', '$ceiling_seaplane', 
    '$armament_seaplane')";
    
    $result_seaplane = mysqli_query($link, $query_seaplane) or die("Ошибка " . mysqli_error($link)); 
}
        
if(isset($_POST['add_auxiliary'])){
        
    $name_auxiliary = $_POST['name_auxiliary'];
    $constructor_auxiliary = $_POST['constructor_auxiliary'];
    $img_auxiliary = 'img_auxiliary/'.basename($_FILES['photo']['name']);
    $description_auxiliary = $_POST['description_auxiliary'];
    $wingspan_auxiliary = $_POST['wingspan_auxiliary'];
    $length_auxiliary = $_POST['length_auxiliary'];
    $aircraft_auxiliary = $_POST['aircraft_weight_auxiliary'];
    $engine_auxiliary = $_POST['engine_auxiliary'];
    $power_auxiliary = $_POST['power_auxiliary'];
    $speed_auxiliary = $_POST['speed_auxiliary'];
    $dal_auxiliary = $_POST['dal_auxiliary'];
    $ceiling_auxiliary = $_POST['ceiling_auxiliary'];
    $armament_auxiliary = $_POST['armament_auxiliary'];
    
    $query_auxiliary = "INSERT INTO auxiliary (name_auxiliary, constructor_auxiliary, img_auxiliary, description_auxiliary,
    wingspan_auxiliary, 
    length_auxiliary, aircraft_auxiliary, 
    engine_type_auxiliary, power_auxiliary, speed_auxiliary, dal_auxiliary, ceiling_auxiliary, armament_auxiliary) 
    VALUES ('$name_auxiliary', '$constructor_auxiliary', '$img_auxiliary', '$description_auxiliary', '$wingspan_auxiliary', '$length_seaplane', 
    '$aircraft_weight_auxiliary', '$engine_type_auxiliary', '$power_auxiliary', '$speed_auxiliary', '$dal_auxiliary', '$ceiling_auxiliary', 
    '$armament_auxiliary')";
    
    $result_auxiliary = mysqli_query($link, $query_auxiliary) or die("Ошибка " . mysqli_error($link)); 

}

if(isset($_POST['add_pilot'])){
    $img_pilot = 'img_pilots/'.basename($_FILES['photo_pilot']['name']);
    $name_pilot = $_POST['name_pilot'];
    $description_pilot = $_POST['description_pilot'];
    
    $query_pilot = "INSERT INTO pilots (img_pilot, name_pilot, description_pilot) 
    VALUES ('$img_pilot', '$name_pilot', '$description_pilot')";
    
    $result_pilot = mysqli_query($link, $query_pilot) or die("Ошибка " . mysqli_error($link)); 

    
}

if(isset($_POST['add_constructor'])){
    $img_constructor = 'img_constructors/'.basename($_FILES['photo_constructor']['name']);
    $name_constructor = $_POST['name_constructor'];
    $description_constructor = $_POST['description_constructor'];
    
    $query_constructor = "INSERT INTO constructors (img_constructor, name_constructor, description_constructor) 
    VALUES ('$img_constructor', '$name_constructor', '$description_constructor')";
    
    $result_constructor = mysqli_query($link, $query_constructor) or die("Ошибка " . mysqli_error($link)); 

    
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админ панель</title>
    <link rel="stylesheet" href="css/style_adminka.css">
</head>
<body>
   <div class="wrap">
         <h1>Авиация: 1939-1945</h1>
        <div class="add-plane">
            <div class="fighters">
                <h2>Истребители</h2>
                   <form enctype="multipart/form-data" action="" method="post">
                    <input type="text" name="name" placeholder="Название самолета"> <br>
                    <input type="text" name="constructor" placeholder="Имя конструктора"> <br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input name="photo" type="file" /> <br>
                    <input type="text" name="description" placeholder="Описание"><br>
                    <input type="text" name="wingspan" placeholder="Размах крыла"><br>
                    <input type="text" name="length" placeholder="Длина"><br>
                    <input type="text" name="aircraft_weight" placeholder="Масса пустого самолета"><br>
                    <input type="text" name="engine_type" placeholder="Тип двигателя"><br>
                    <input type="text" name="power" placeholder="Мощность"><br>
                    <input type="text" name="speed" placeholder="Максимальная скорость"><br>
                    <input type="text" name="dal" placeholder="Дальность полета"><br>
                    <input type="text" name="ceiling" placeholder="Практический потолок"><br>
                    <input type="text" name="armament" placeholder="Вооружение"><br>
                    <button type="submit" name="add_fighters">Добавить истребителя</button>
                </form>
            </div>
            
            <div class="bombers">
                <h2>Бомбардировщики</h2>
                <form enctype="multipart/form-data" action="" method="post">
                    <input type="text" name="name_bombers" placeholder="Название самолета"> <br>
                    <input type="text" name="constructor_bombers" placeholder="Имя конструктора"> <br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input name="photo_bombers" type="file" /> <br>
                    <input type="text" name="description_bombers" placeholder="Описание"><br>
                    <input type="text" name="wingspan_bombers" placeholder="Размах крыла"><br>
                    <input type="text" name="length_bombers" placeholder="Длина"><br>
                    <input type="text" name="aircraft_weight_bombers" placeholder="Масса пустого самолета"><br>
                    <input type="text" name="engine_type_bombers" placeholder="Тип двигателя"><br>
                    <input type="text" name="power_bombers" placeholder="Мощность"><br>
                    <input type="text" name="speed_bombers" placeholder="Максимальная скорость"><br>
                    <input type="text" name="dal_bombers" placeholder="Дальность полета"><br>
                    <input type="text" name="ceiling_bombers" placeholder="Практический потолок"><br>
                    <input type="text" name="armament_bombers" placeholder="Вооружение"><br>
                    <button type="submit" name="add_bombers">Добавить бомбардировщика</button>
                </form>
            </div>
            
            
            <div class="storm">
                <h2>Штурмовики</h2>
                <form enctype="multipart/form-data" action="" method="post">
                    <input type="text" name="name_storm" placeholder="Название самолета"> <br>
                    <input type="text" name="constructor_storm" placeholder="Имя конструктора"> <br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input name="photo_storm" type="file" /> <br>
                    <input type="text" name="description_storm" placeholder="Описание"><br>
                    <input type="text" name="wingspan_storm" placeholder="Размах крыла"><br>
                    <input type="text" name="length_storm" placeholder="Длина"><br>
                    <input type="text" name="aircraft_weight_storm" placeholder="Масса пустого самолета"><br>
                    <input type="text" name="engine_type_storm" placeholder="Тип двигателя"><br>
                    <input type="text" name="power_storm" placeholder="Мощность"><br>
                    <input type="text" name="speed_storm" placeholder="Максимальная скорость"><br>
                    <input type="text" name="dal_storm" placeholder="Дальность полета"><br>
                    <input type="text" name="ceiling_storm" placeholder="Практический потолок"><br>
                    <input type="text" name="armament_storm" placeholder="Вооружение"><br>
                    <button type="submit" name="add_storm">Добавить штурмовик</button>
                </form>
            </div>
            
            <div class="seaplane">
                <h2>Гидросамолеты</h2>
                <form enctype="multipart/form-data" action="" method="post">
                    <input type="text" name="name_seaplane" placeholder="Название самолета"> <br>
                    <input type="text" name="constructor_seaplane" placeholder="Имя конструктора"> <br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input name="photo_seaplane" type="file" /> <br>
                    <input type="text" name="description_seaplane" placeholder="Описание"><br>
                    <input type="text" name="wingspan_seaplane" placeholder="Размах крыла"><br>
                    <input type="text" name="length_seaplane" placeholder="Длина"><br>
                    <input type="text" name="aircraft_weight_seaplane" placeholder="Масса пустого самолета"><br>
                    <input type="text" name="engine_type_seaplane" placeholder="Тип двигателя"><br>
                    <input type="text" name="power_seaplane" placeholder="Мощность"><br>
                    <input type="text" name="speed_seaplane" placeholder="Максимальная скорость"><br>
                    <input type="text" name="dal_seaplane" placeholder="Дальность полета"><br>
                    <input type="text" name="ceiling_seaplane" placeholder="Практический потолок"><br>
                    <input type="text" name="armament_seaplane" placeholder="Вооружение"><br>
                    <button type="submit" name="add_seaplane">Добавить гидросамолет</button>
                </form>
            </div>
            
             
             
            <div class="auxiliary">
                <h2>Вспомогательные</h2>
                <form enctype="multipart/form-data" action="" method="post">
                    <input type="text" name="name_auxiliary" placeholder="Название самолета"> <br>
                    <input type="text" name="constructor_auxiliary" placeholder="Имя конструктора"> <br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input name="photo_auxiliary" type="file" /> <br>
                    <input type="text" name="description_auxiliary" placeholder="Описание"><br>
                    <input type="text" name="wingspan_auxiliary" placeholder="Размах крыла"><br>
                    <input type="text" name="length_auxiliary" placeholder="Длина"><br>
                    <input type="text" name="aircraft_weight_auxiliary" placeholder="Масса пустого самолета"><br>
                    <input type="text" name="engine_type_auxiliary" placeholder="Тип двигателя"><br>
                    <input type="text" name="power_auxiliary" placeholder="Мощность"><br>
                    <input type="text" name="speed_auxiliary" placeholder="Максимальная скорость"><br>
                    <input type="text" name="dal_auxiliary" placeholder="Дальность полета"><br>
                    <input type="text" name="ceiling_auxiliary" placeholder="Практический потолок"><br>
                    <input type="text" name="armament_auxiliary" placeholder="Вооружение"><br>
                    <button type="submit" name="add_auxiliary">Добавить гидросамолет</button>
                </form>
            </div>
        </div>
        
        
        <div class="people">
            <div class="pilots">
                <h2>Летчики</h2>
                <form enctype="multipart/form-data" action="" method="post">
                    <input type="text" name="name_pilot" placeholder="Имя летчика"> <br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input name="photo_pilot" type="file" /> <br>
                    <input type="text" name="description_pilot" placeholder="Описание"><br>
                    <button type="submit" name="add_pilot">Добавить летчика</button>
                </form>
            </div>
            
            <div class="constructors">
                <h2>Конструкторы</h2>
                <form enctype="multipart/form-data" action="" method="post">
                    <input type="text" name="name_constructor" placeholder="Имя конструктора"> <br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input name="photo_constructor" type="file" /> <br>
                    <input type="text" name="description_constructor" placeholder="Описание"><br>
                    <button type="submit" name="add_constructor">Добавить конструктора</button>
                </form>
            </div>
             
            </div>
    </div>
       
   
</body>
</html>