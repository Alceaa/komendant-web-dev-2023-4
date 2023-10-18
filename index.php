<?php	
	include 'header.html';
?>
        <div class="modal-form">
			<form name="feedback" method="post" action="home.php">
				<p><h2>Форма обратной связи</h2></p>
				<p><b>Фамилия:</b>
					<input type="text" name="secondname" size="40" value=<?php if (isset($_GET['SN'])) {echo $_GET['SN'];} ?>>
				</p>
				<p><b>Имя:</b>
					<input type="text" name="firstname" size="40" value=<?php if (isset($_GET['FN'])) {echo $_GET['FN'];} ?>>
				</p>
				<p><b>Отчество:</b>
					<input type="text" name="middlename" size="40" value=<?php if (isset($_GET['MN'])) {echo $_GET['MN'];} ?>>
				</p>
                <p><b>Почта:</b>
					<input type="text" name="email" size="40" placeholder="your_mail@mail.com" value=<?php if (isset($_GET['E'])) {echo $_GET['E'];} ?>>
				</p>
				<p><b>Откуда узнали о нас:</b>
					<input type="radio" name="source" value="search" <?php if (isset($_GET['S']) && $_GET['S'] == "search") {echo 'checked';} ?>>Реклама из интернета
					<input type="radio" name="source" value="friends" <?php if (isset($_GET['S']) && $_GET['S'] == "friends") {echo 'checked';} ?>>Рассказали друзья
				</p>
				<p><b>Тип обращения:</b>
					<select size="1" style="width: 200px;" name="type">
						<option selected value="1" name="suggest">Предложение</option>
						<option value="2" name="complain">Жалоба</option>					
					</select>
				</p>
				<p><b>Текст обращения:</b>
					<textarea rows="10" cols="45" name="text"></textarea>
				</p>
				<p><b>Прикрепите дополнительные файлы:</b>
					<input type="file" name="f">
				</p>
				<p><b>Согласие на обработку персональных данных</b>
					<input type="checkbox" name="pd">
				<p>
				<input type="submit" value="Отправить">
			</form>
		</div>
	</body>
	<footer>
	    <div class="footer-container">
		    <div class="footer-item">
			    <h3>О сайте</h3>
				<a>Данная страница является результатом четвертой лабораторной работой (Веб-технологии)</a>		
			</div>
			<div class="footer-item">
			    <h3>Контакты</h3>
			    <ul class="footer-ul">
				    <li><a href="">maks.komendant@yandex.ru</a></li>
					<li><a>+79259257991</a>	</li>
				</ul>
			</div>
		</div>
	</footer>
</html>