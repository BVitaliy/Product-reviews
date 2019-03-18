# Product-reviews

Таблиця відгуків містить таку структуру:<br> 
<img src="https://github.com/BVitaliy/BVitalii.github.io/blob/master/Product-reviews/_img/table-reviews.jpg?raw=true"><br> <br> 

Статуси відгуків:
1 - відхилено, 2 - опубліковано, 3 - в черзі;

<p>Відгуки відправляються в БД зі статусом 3;</p>

index.php
- вивід списку відгуків
- форма додавання відгуків

functions.php
- фу-ї для виведення списку відгуків

send.php
- обробка та добаавляння даних з форми в базу даних

В файлі scripts.js написана ф-я для відправки форми за допомогою ajax 


<h3>Ф-ї на сторінці адміна для відгуків</h3>
<h5>functions/approve.php: Зміна статусу для публікації відгуку</h5> 

<h5>functions/reject.php: Відмова в публікації відгуку</h5>

<h5>functions/delete.php: Видалення відгуку</h5> 
