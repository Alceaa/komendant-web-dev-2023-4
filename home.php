<?php	
    if(isset($_POST['secondname'])){
        $secondname=$_POST['secondname'];
    }
    if(isset($_POST['firstname'])){
        $firstname=$_POST['firstname'];
    }
    if(isset($_POST['middlename'])){
        $middlename=$_POST['middlename'];
    }
    if(isset($_POST['email'])){
        $email=$_POST['email'];
    }
    if(isset($_POST['source'])){
        $source=$_POST['source'];
    }
    require 'header.html';
?>
    <body>
        <div class="content">
        <?php
        if($secondname != '' | $firstname != ''){
            echo '<h2>Здравствуйте, '.$secondname.' '.$firstname.' '.$middlename.'!'.'</h2>'; 
        }
        else{
            echo '<h2>Здравствуйте!</h2>';
        }
        if ($_POST['source'] == 'search'){ 
            echo '<p>Спасибо за ваше предложение:</p>';
            echo '<textarea>'.$_POST['text'].'</textarea>';
        }else{
            echo '<p>Мы рассмотрим Вашу жалобу:</p>';
            echo '<textarea>'.$_POST['text'].'</textarea>';
        }
        if (isset($_POST['f']) & $_POST['f'] != '') echo '<p>Вы приложили следующий файл: <I>'.$_POST['f'].'</I></p>';
        echo '<div class="button">';
        echo '<a class="btn" href="index.php?SN='.$secondname.'&FN='.$firstname.'&MN='.$middlename.'&E='.$email.'&S='.$source.'">Заполнить снова</a>';
        echo '</div>';
        ?>
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