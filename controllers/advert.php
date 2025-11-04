<?php
include ("../db/db.php");
$errMsg = '';


function transliterate($string) {
    $converter = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e',
        'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
        'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ъ' => '',
        'ы' => 'y', 'ь' => "'", 'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E',
        'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M',
        'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U',
        'Ф' => 'F', 'Х' => 'Kh', 'Ц' => 'Ts', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Shch', 'Ъ' => '',
        'Ы' => 'Y', 'Ь' => "'", 'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya'
    );
  
    return strtr($string, $converter);
}







// КОД ДЛЯ ДОБАВЛЕНИЯ ОБЪЯВЛЕНИЯ START
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-adv'])){


    if (!empty($_FILES['image']['name'])){
        $imgName = time() . "_" . $_FILES['image']['name'];

        $imgName = transliterate($imgName);

        $fileTmpName = $_FILES['image']['tmp_name'];
        $destination = "../otherImages/users_adverts/" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);
        if ($result){
            $_POST['image'] = $imgName;
        } else {
            echo $errMsg = "Ошибка загрузки изображения на сервер!";
        }
    } else{
        echo $errMsg = "Ошибка получения картинки!";
    }







    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    if ($title === '' || $description === '' || $price === '' || $image === ''){
        echo $errMsg = "Не все поля заполнены!";
    } else {
        
        $post = [
            'id_users' => $_SESSION['id'],
            'title' => $title,
            'description' => $description,
            'price' => $price,
            //'image' => $image
            'image' => $_POST['image']
            
        ];
   
        $id = insert('advert', $post);

        header('location: '. 'https://ya-sam.com.ru/' . "pages/catalog.php");
        //$adverts = selectOne('advert', ['id' => $id]);
        //$_SESSION['id'] = $adverts['id'];
        //$_SESSION['username'] = $user['username'];
        //$_SESSION['birthday'] = $user['birthday'];
        //$_SESSION['user_type'] = $user['user_type'];
        //$_SESSION['email'] = $user['email'];
        //$_SESSION['admin'] = $user['admin'];

        /*if($_SESSION['admin']){
            header('location: '. 'http://localhost/' . "pages/admin.php");
        } else{
            header('location: '. 'http://localhost/');
            }
        } */
    }
}  
    
else {
    $errMsg = "Ошибка! Обратитесь к администратору";
}
// КОД ДЛЯ ДОБАВЛЕНИЯ ОБЪЯВЛЕНИЯ END

?>