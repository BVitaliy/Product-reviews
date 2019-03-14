<?php
    $title = "Сторінка відгуків";
    require "header.php";
?>
   
   <div class="reviews-page">
    <div class="container">
        <h1>Відгуки</h1>
<!--        Список відгуків-->
        <div class="reviews-list">
            <div class="review-item">
                <div class="review-header">
                    <div class="review-photo">
                        <img src="img/photo.png" alt="">
                    </div>
                    <div class="review-info">
                        <a href="" class="name">Vitalii</a>
                        <div class="date">14.03.2019</div>
                    </div>
                </div>
                <div class="review-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates explicabo laudantium possimus. Quisquam repudiandae ducimus voluptates error, tempore qui tenetur suscipit temporibus veniam facere aperiam eum, praesentium quaerat corrupti vero.
                </div>
            </div>
            <div class="review-item">
                <div class="review-header">
                    <div class="review-photo">
                        <img src="img/photo.png" alt="">
                    </div>
                    <div class="review-info">
                        <a href="" class="name">Serg</a>
                        <div class="date">14.03.2019</div>
                    </div>
                </div>
                <div class="review-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates explicabo laudantium possimus. Quisquam repudiandae ducimus voluptates error, tempore qui tenetur suscipit temporibus veniam facere aperiam eum, praesentium quaerat corrupti vero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam tempore possimus mollitia, veritatis quidem labore quisquam voluptatem repellat totam, quam eveniet distinctio eius, odit et ratione! Eligendi a repellat quas.
                </div>
            </div>            
        </div>
<!--        Форма для відгука-->
        <div class="review-form">
            <h2>Залишіть відгук</h2>
            <form action="">
                <div class="form-group">
                    <label for="email">E-mail <em>*</em></label>
                    <input type="email" name="email" class="form-control" id="email" required>
                    <div class="error"></div>
                </div>
                <div class="form-group">
                    <label for="name">Ім'я</label>
                    <input type="text" name="name" class="form-control" id="name">
                    <div class="error"></div>
                </div>  
                <div class="form-group">
                    <label for="photo">Фото</label>
                    <input type="file" name="photo" class="form-control" id="photo">
                </div>               
                <div class="form-group">
                    <label for="text">Текст відгуку <em>*</em></label>
                    <textarea name="text" id="text" class="form-control" required></textarea>
                    <div class="error"></div>
                </div> 
                <input type="submit" class="btn btn-primary" value="Відправити">
            </form>
        </div>
    </div>
</div>

<?php
    require "footer.php"
?>