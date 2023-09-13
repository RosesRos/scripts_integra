<?php

print_r("<form action='amo.php' method='post'>");
echo <<<EOT
    <div>
        <label for="name">Имя</label>
        <input type="text" name="name" id="name"/>
    </div>
    <div>
        <label for="phone1">Первый Телефон</label>
        <input type="tel" name="phone1" id="phone1" />
        <br/>
        <label for="phone2">Второй Телефон</label>
        <input type="tel" name="phone2" id="phone2" />
    </div>

    <div>
        <label for="email1">Первая Электронная Почта</label>
        <input type="email" name="email1" id="email1" />
        <br/>
        <label for="email2">Вторая Электронная Почта</label>
        <input type="email" name="email2" id="email2" />
    </div>
    <div>
        <button type="submit">Создать Контакт</button>
    </div>

EOT;

print_r("</form>");


?>