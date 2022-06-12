<?php
	// ini_set('display_errors', 1);
	error_reporting(-1);
	require_once 'funcs.php';
	require_once 'connect.php';

	// if (!empty($_POST)){
	// 	header("Location: {$_SERVER['PHP_SELF']}") ;
	// 	exit();
	// }
	//За отправку нового созданного поста, надо закомментировать
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.cdnfonts.com/css/gotham-pro" rel="stylesheet">
	<link rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link href="style.less" type="text/css" rel="stylesheet/less"/>
	<link rel="icon" href="data:;base64,iVBORwOKGO="/>
	<script src="less.js" type="text/javascript"></script>
	<script>less.watch();</script>
	<title>This a test-Less</title>
</head>
<body class="desktop">
	<div id="root">
		<div class="heads">
			<?php include 'header.php'; ?>
			<div class="main">
				<div class="content">
					<div class="image-slider swiper-container">
						<div class="image-slider__wrapper swiper-wrapper">
							<div class="image-slider__slide swiper-slide">
								<div class="image-slider__image"><img src="image/sw-1.jpg" alt="Картинка"></div>
							</div>
							<div class="image-slider__slide swiper-slide">
								<div class="image-slider__image"><img src="image/sw-2.jpg" alt="Картинка"></div>
							</div>
							<div class="image-slider__slide swiper-slide">
								<div class="image-slider__image"><img src="image/sw-3.jpg" alt="Картинка"></div>
							</div>
							<div class="image-slider__slide swiper-slide">
								<div class="image-slider__image"><img src="image/sw-4.jpg" alt="Картинка"></div>
							</div>
							<div class="image-slider__slide swiper-slide">
								<div class="image-slider__image"><img src="image/sw-5.jpg" alt="Картинка"></div>
							</div>
							<div class="image-slider__slide swiper-slide">
								<div class="image-slider__image"><img src="image/sw-6.jpg" alt="Картинка"></div>
							</div>
							<div class="image-slider__slide swiper-slide">
								<div class="image-slider__image"><img src="image/sw-7.png" alt="Картинка"></div>
							</div>
							<div class="image-slider__slide swiper-slide">
								<div class="image-slider__image"><img src="image/sw-8.jpg" alt="Картинка"></div>
							</div>
							<div class="image-slider__slide swiper-slide">
								<div class="image-slider__image"><img src="image/sw-9.jpg" alt="Картинка"></div>
							</div>
							<div class="image-slider__slide swiper-slide">
								<div class="image-slider__image"><img src="image/sw-10.jpg" alt="Картинка"></div>
							</div>
						</div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
						<div class="swiper-pagination"></div>
					</div>
					<div class="wrappen">
						<div class="nav-menu">
							<span style="width:12.5%">
								<a class="nav_box" href="#pizza">
									<img class="img_icon" alt="pizza" src="image/pizza.svg">
									<span class="text_icon">Пицца</span>
								</a>
							</span>
							<span style="width:12.5%">
								<a class="nav_box" href="#zakuski">
									<img class="img_icon" alt="zakuski" src="image/free.svg">
									<span class="text_icon">Закуски</span>
								</a>
							</span>
							<span style="width:12.5%">
								<a class="nav_box" href="#napitki">
									<img class="img_icon" alt="napitki" src="image/drinks.svg">
									<span class="text_icon">Напитки</span>
								</a>
							</span>
							<span style="width:12.5%">
								<a class="nav_box" href="#sauce">
									<img class="img_icon" alt="sauce" src="image/sauces.svg">
									<span class="text_icon">Соусы</span>
								</a>
							</span>
							<span style="width:12.5%">
								<a class="nav_box" href="#deserty">
									<img class="img_icon" alt="deserty" src="image/dessert.svg">
									<span class="text_icon">Десерты</span>
								</a>
							</span>
							<span style="width:12.5%">
								<a class="nav_box" href="#hot">
									<img class="img_icon" alt="hot" src="image/hot.svg">
									<span class="text_icon">Горячее</span>
								</a>
							</span>
							<span style="width:12.5%">
								<a class="nav_box" href="#combo">
									<img class="img_icon" alt="combo" src="image/combobox.svg">
									<span class="text_icon">Комбо</span>
								</a>
							</span>
							<span style="width:12.5%">
								<a class="nav_box veg_box" href="#vegan">
									<img class="img_icon veg_st" alt="vegan" src="image/vegan.svg">
									<span class="text_icon">Веган</span>
								</a>
							</span>
						</div>
						<aside class="basket" style="top:80px;">
							<div class="padd_top mar_bott">
								<div class="basket_pict1"></div>
								<div class="basket_pict2"></div>
								<div class="bask_cont_box1 bask_cont_box2">
									<div class="bask_icon">
										<svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.2 23.2c-1.32 0-2.4 1.08-2.4 2.4 0 1.32 1.08 2.4 2.4 2.4 1.32 0 2.4-1.08 2.4-2.4 0-1.32-1.08-2.4-2.4-2.4zM4 4v2.4h2.4l4.32 9.12-1.68 2.88c-.12.36-.24.84-.24 1.2 0 1.32 1.08 2.4 2.4 2.4h14.4v-2.4H11.68c-.12 0-.24-.12-.24-.24v-.12l1.08-2.04h8.88c.96 0 1.68-.48 2.04-1.2l4.32-7.8c.24-.24.24-.36.24-.6 0-.72-.48-1.2-1.2-1.2H9.04L7.96 4H4zm19.2 19.2c-1.32 0-2.4 1.08-2.4 2.4 0 1.32 1.08 2.4 2.4 2.4 1.32 0 2.4-1.08 2.4-2.4 0-1.32-1.08-2.4-2.4-2.4z" fill="currentColor" fill-rule="nonzero">
											</path>
										</svg>
									</div>
									<div class="bask_text_box bask_text_cont">
										<div class="bask_st1">
											<div class="bask_st2">Корзина
											</div>
										</div>
										<div class="arrow_st1 arrow_st2">
											<div class="arrow_bt"></div>
										</div>
									</div>

										<?php 
										if (isset($_POST['quantity']) && isset($_POST['id']) && isset($_POST['price'])){
										$quantity = $_POST['quantity'];
										$id = $_POST['id'];
										$amount = $_POST['price'] * $_POST['quantity'];
										
										if ($quantity<1) {
										$data0 = array('id' => $id);
    				    				$query = $db0->prepare("DELETE FROM basket WHERE id = :id");
    				    				
										}
										else{
    				    				$data0 = array('id' => $id, 'quantity' => $quantity, 'amount' => $amount);
    				    				$query = $db0->prepare("UPDATE basket SET quantity = :quantity, amount = :amount WHERE id = :id");
    				    				
    				    				}$query->execute($data0);
    				    				}
										?>

										<!-- <div class="bask_cart">
											<div class="bask_cart_img">
												<img src="image/pizza-box.jpg" alt="empty cart"></div>
											<div>Корзина пуста. Выберите пиццу из меню или повторите предыдущий заказ</div>
										</div> -->
										<?php 
											
    										global $data0;
											$query1 = $db0->prepare("SELECT * FROM basket");
											$query1->execute($data0);
											$mes_bask = $query1->fetchAll();?>
										<?php foreach($mes_bask as $k_b=>$val_bask):?>
											<div class="box_basket">
												<div class="box_name">
													<div class="box_name_img"><img class="box_img" alt="Картинка продукта" src="image/menu/<?=$val_bask['image']?>"></div>
													<div class="box_name_t"><?=$val_bask['title']?></div>
												</div>
												<div class="box_price">
													<div class="box_price_v">
														<form method="POST" onsubmit="call(); return false" action="">
														<div class="countBoxf">
														<button onclick="countBox1(<?=$val_bask['quantity']?>,<?=$val_bask['id']?>)" type="submit" class="box_price_b"><div class="box_price_svg"><svg width="1em" height="1em" viewBox="0 0 9 2" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.996" y="0.25" width="8.005" height="1.501" rx="0.75" fill="#fff"></rect></svg></div></button>

														<div class="box_v_st countBoxm<?=$val_bask['id']?>"><?=$val_bask['quantity']?></div>
														
														<button onclick="countBox2(<?=$val_bask['quantity']?>,<?=$val_bask['id']?>)" type="submit" class="box_price_b"><div class="box_price_svg"><svg width="1em" height="1em" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><path d="M12.514 5.276H8.42V1.183c0-1.578-2.448-1.578-2.448 0v4.093H1.881c-1.578 0-1.578 2.448 0 2.448h4.092v4.093c0 1.578 2.448 1.578 2.448 0V7.724h4.093c1.578 0 1.578-2.448 0-2.448z"></path></svg></div></button>
														</div>
														
														<input type="hidden" name="id" value="<?=$val_bask['id']?>"/>
														<input class="countBoxp<?=$val_bask['id']?>" type="hidden" name="quantity" value="<?=$val_bask['quantity']?>"/>
														<input type="hidden" name="price" value="<?=$val_bask['price']?>">
														</form>
													</div>
													<div class="box_price_p"><?=$val_bask['price']?><span class="box_p_st">₽</span></div>
												</div>
											</div>
											<?php static $sum_price = 0;
											$sum_price += $val_bask['price'] * $val_bask['quantity']; ?>
										<?php endforeach; ?>
										<div class="food_basket_sum"><div class="food_sum_t">Сумма заказа:</div>
										<div class="food_sum_n"><?=$sum_price?><span class="box_p_st">₽</span></div></div>
										<form method="POST" onsubmit="call(); return false">
											<div class="food_basket_st" type="submit"><input type="hidden" name="sum_price" value="<?=$sum_price?>"><a class="food_basket" href="/"><div class="basket_bt">Оформить</div></a></div>
										</form>
								</div>
							</div>
						</aside>
						<div class="menu_container">
							<?php $name_food=['pizza'=>'Пицца','zakuski'=>'Закуски','napitki'=>'Напитки','sauce'=>'Соусы','deserty'=>'Десерты','hot'=>'Горячее','combo'=>'Комбо','vegan'=>'Веган']; ?>
							
							<?php foreach ($name_food as $key => $value): ?>
							<section class="menu_box" id="<?=$key?>">
							<h4 class="item-st"><?=$value?></h4>
							<div class="food_wrapper">
							<?php switch ($key):
							 case 'pizza':?>
							<?php 
							$stry = 'pizza%'; 
							$messages = get_mess($stry);
							$messages = sel_mess($messages);
							break; 
							?>

							<?php case 'zakuski':?>
							<?php 
							$stry = 'appetizer%'; 
							$messages = get_mess($stry);
							$messages = sel_mess($messages); 
							break;
							?>

							<?php case 'napitki':?>
							<?php 
							$stry = 'drink%'; 
							$messages = get_mess($stry);
							$messages = sel_mess($messages); 
							break;
							?>

							<?php case 'sauce':?>
							<?php 
							$stry = 'sauce%'; 
							$messages = get_mess($stry);
							$messages = sel_mess($messages); 
							break;
							?>

							<?php case 'deserty':?>
							<?php 
							$stry = 'dessert%'; 
							$messages = get_mess($stry);
							$messages = sel_mess($messages); 
							break;
							?>

							<?php case 'hot':?>
							<?php 
							$stry = 'hot%'; 
							$messages = get_mess($stry);
							$messages = sel_mess($messages); 
							break;
							?>

							<?php case 'combo':?>
							<?php 
							$stry = 'combo%'; 
							$messages = get_mess($stry);
							$messages = sel_mess($messages); 
							break;
							?>

							<?php case 'vegan':?>
							<?php 
							$stry = 'vegan%'; 
							$messages = get_mess($stry);
							$messages = sel_mess($messages);
							break;
							?>
							</div>
							<?php endswitch; ?>
							</section>
							<?php  endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="dady">
				<!-- Отправка новых товаров в БД -->
				<!-- <form method="POST" action="" onsubmit="call(); return false">
					<input type="text" name="image" placeholder="Картинка"/>
					<input type="text" name="title" placeholder="Заголовок"/>
					<input class="text_area" type="text" name="content" placeholder="Текст"/>
					<?php for ($i=1; $i <= 4; $i++): 
						$size_array=[23,30,35,40];
						?>
						<div class="form_size_price-item">
							<?php $i-- ?>
							<label for="s-<?=$i?>">Размер -> <?=$size_array[$i]?> см</label>
							<input id="s-<?=$i?>" type="hidden" name="size[]" value="<?=$size_array[$i]?>"/>
							<?php $i++ ?>
							<input id="s-<?=$i?>" type="text" name="price[]" placeholder="Цена - <?=$i?>"/>
						</div>
					<?php endfor; ?>
					<input type="submit" value="Отправить"/>
				</form> -->

				<?php //За отправку нового поста нужно раскомментировать
				// if (isset($_POST['image']) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['size']) && isset($_POST['price'])){
    // 				// Переменные с формы
    // 				$image = $_POST['image'];
    // 				$title = $_POST['title'];
    // 				$content = $_POST['content'];
    // 				$size = json_encode($_POST['size'], JSON_UNESCAPED_UNICODE);
    // 				$price = json_encode($_POST['price'], JSON_UNESCAPED_UNICODE);
    
    // 				//Параметры для подключения
    // 				$db_host = "127.0.0.1"; 
    // 				$db_user = "root"; // Логин БД
    // 				$db_password = "root"; // Пароль БД
    // 				$db_base = "mybase"; // Имя БД
    // 				$db_table = "menu_table";
    
    // 				try {
    // 				    //Подключение к базе данных
    // 				    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    // 				    // Устанавливаем корректную кодировку
    // 				    $db->exec("SET NAMES utf8");
    // 				    //Собираем данные для запроса
    // 				    $data = array('image' => $image, 'title' => $title, 'content' => $content, 'size' => $size, 'price' => $price); 
    				    
    // 				    // Подготавливаем SQL-запрос
    // 				    $query = $db->prepare("INSERT INTO $db_table (image, title, content, size, price) values (:image, :title, :content, :size, :price)");
    				    
    // 				    // Выполняем запрос с данными
    // 				    $query->execute($data);
    				    
    // 				    // Запишим в переменую, что запрос отрабтал
    // 				    $result = true;
    // 				} catch (PDOException $e) {
    // 				    // Если есть ошибка соединения или выполнения запроса, выводим её
    // 				    print "Ошибка!: " . $e->getMessage() . "<br/>";
    // 				}
    
    // 				if ($result) {
    // 					echo "Успех. Информация занесена в базу данных";
    // 				}
				// }
				 ?>
			</div>
			<?php include 'footer.php'; ?>
		</div>
	</div>
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script src="script.js"></script>
</body>
</html>