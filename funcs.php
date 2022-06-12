<?php function sel_mess(&$yar){ ?>
<?php if(!empty($yar)):?>
	<?php foreach($yar as $k=>$val_mes):?>
		
			<div class="list_menu">
				<div class="food_container">
					<div class="food_box">
						<picture class="food_img">
							<img class="food_img_st" alt="Картинка продукта" src="image/menu/<?=$val_mes['image']?>">
						</picture>
						<div class="food_title">
							<h3 class="food_title_st"><?=$val_mes['title']?></h3>
						</div>
						<div class="food_content"><?=$val_mes['content']?>
						</div>
						<div class="food_select">
							<div class="food_size">
								<form method="POST" class="food_size_container">
									<div class="food_size_bt" role="button" tabindex="0">
										<input id="r-1<?=$yar[$k][0]?>" type="radio" name="size" onclick="countRab<?=print_r($yar[$k][0],true)?>(value)" value="<?=json_decode($val_mes['price'])[0]?>" checked>
										<label for="r-1<?=$yar[$k][0]?>">23 см</label>										
									</div>
									<div class="food_size_bt" role="button" tabindex="0">
										<input id="r-2<?=$yar[$k][0]?>" type="radio" name="size" onclick="countRab<?=print_r($yar[$k][0],true)?>(value)" value="<?=json_decode($val_mes['price'])[1]?>" >
										<label for="r-2<?=$yar[$k][0]?>">30 см</label>
									</div>
									<div class="food_size_bt" role="button" tabindex="0">
										<input id="r-3<?=$yar[$k][0]?>" type="radio" name="size" onclick="countRab<?=print_r($yar[$k][0],true)?>(value)" value="<?=json_decode($val_mes['price'])[2]?>" >
										<label for="r-3<?=$yar[$k][0]?>">35 см</label>										
									</div>
									<div class="food_size_bt" role="button" tabindex="0">
										<input id="r-4<?=$yar[$k][0]?>" type="radio" name="size" onclick="countRab<?=print_r($yar[$k][0],true)?>(value)" value="<?=json_decode($val_mes['price'])[3]?>" onclick="this.form.submit()">
										<label for="r-4<?=$yar[$k][0]?>">40 см</label>										
									</div>
								</form>
							</div>
							<form method="POST" action="">
								<input type="hidden" name="image" value="<?=$val_mes['image']?>"/>
								<input type="hidden" name="title" value="<?=$val_mes['title']?>"/>
								<input type="hidden" name="quantity" value="1"/>
								<input id="food_price_b<?=print_r($yar[$k][0],true)?>" type="hidden" name="price" value="<?=json_decode($val_mes['price'])[0]?>"/>
								<button type="submit" class="food_basket food_sub<?=print_r($yar[$k][0],true)?>">
									<div class="basket_bt">В корзину</div>
								</button>
							</form>
							<div class="food_price_st" id="food_price_t<?=print_r($yar[$k][0],true)?>">
								<?=print_r(json_decode($val_mes['price'])[0],true);?>
							</div>
							<span class="price_st">₽</span>
						</div>
						<!-- <?=print_r($yar[$k][0],true);?> -->
					</div>
				</div>
			</div>
	<?php endforeach; ?>
<?php  endif; ?>
<?php }?>
<?php 
	if (isset($_POST['image']) && isset($_POST['title']) && isset($_POST['price']) && isset($_POST['quantity'])){
    				// Переменные с формы
    				$image = $_POST['image'];
    				$title = $_POST['title'];
    				$price = $_POST['price'];
    				$quantity = $_POST['quantity'];
    				$amount = $_POST['price'] * $_POST['quantity'];
    
    				//Параметры для подключения
    				$db_host = "127.0.0.1"; 
    				$db_user = "root"; // Логин БД
    				$db_password = "root"; // Пароль БД
    				$db_base = "mybase"; // Имя БД
    				$db_table = "basket";
    
    				try {
    				    //Подключение к базе данных
    				    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    				    // Устанавливаем корректную кодировку
    				    $db->exec("SET NAMES utf8");
    				    //Собираем данные для запроса
    				    $data = array('image' => $image, 'title' => $title, 'price' => $price, 'quantity' => $quantity, 'amount' => $amount); 
    				    
    				    // Подготавливаем SQL-запрос
    				    $query = $db->prepare("INSERT INTO basket (image, title, price, quantity, amount) values (:image, :title, :price, :quantity, :amount)");
    				    
    				    // Выполняем запрос с данными
    				    $query->execute($data);
    				    
    				    // Запишим в переменую, что запрос отрабтал
    				    $result = true;
    				} catch (PDOException $e) {
    				    // Если есть ошибка соединения или выполнения запроса, выводим её
    				    print "Ошибка!: " . $e->getMessage() . "<br/>";
    				}
    
    				// if ($result) {
    				// 	echo "Успех. Информация занесена в базу данных";
    				// }
				}
 ?>