<?php 

	// Параметры для подключения
				$db_host = "127.0.0.1"; 
    			$db_user = "root"; // Логин БД
    			$db_password = "root"; // Пароль БД
    			$db_base = "mybase"; // Имя БД
    			$db_table = "menu_table";
    			global $db0;
    			global $quantity;
    			global $id;


				$db0 = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    			// Устанавливаем корректную кодировку
    			$db0->exec("SET NAMES utf8");
    			// Собираем данные для запроса
    			

    			

				if (isset($_POST['image']) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['size']) && isset($_POST['price'])){
    				// Переменные с формы
    				$image = $_POST['image'];
    				$title = $_POST['title'];
    				$content = $_POST['content'];
    				$size = json_encode($_POST['size'], JSON_UNESCAPED_UNICODE);
    				$price = json_encode($_POST['price'], JSON_UNESCAPED_UNICODE);
    
    				$data0 = array('image' => $image, 'title' => $title, 'content' => $content, 'size' => $size, 'price' => $price);
    			}
    				
    				function get_mess(&$jump) {
    				global $db0;
    				global $data;
    				global $db_table;
    				
					$query = $db0->prepare("SELECT * FROM menu_table WHERE image LIKE '$jump'");
					$query->execute($data);
					return $resl = $query->fetchAll();
					}

?>