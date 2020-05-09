<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="container">
        <h2>Форма связи</h2>
        <div class="form_wrap">
            <form action="./index.php" method="post">
                <div class="row d-flex flex-column align-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10 col-12">
                        <div class="input_wrap">
                            <label for="name">Имя</label>
                            <input type="text" id="name" name="name" placeholder="Иван" class="input" 
                            value="<?= (isset($oldInput['name']))? $oldInput['name']:'' ?>">
                            <?php if(isset($errors['name'])): ?>
                            <div class="error">
                                <?= $errors['name'] ?>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 col-12">
                        <div class="input_wrap">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="iii@ddd.df" class="input"
                                value="<?= (isset($oldInput['email']))? $oldInput['email']:'' ?>">
                            <?php if(isset($errors['email'])): ?>
                            <div class="error">
                                <?= $errors['email'] ?>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 col-12">
                        <div class="input_wrap">
                            <label for="phone">Phone</label>
                            <input type="phone" id="phone" name="phone" placeholder="380507473951"
                                class="input" value="<?= (isset($oldInput['phone']))? $oldInput['phone']:'' ?>">
                            <?php if(isset($errors['phone'])): ?>
                            <div class="error">
                                <?= $errors['phone'] ?>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 col-12">
                        <div class="input_wrap">
                            <label for="subject">Тема вопроса</label>
                            <select name="subject" id="subject" name="subject">
                                <option>Проблема с подключением к ресурсу</option>
                                <option>Проблема отправки формы</option>
                                <option>Вопрос оплаты</option>
                                <option>Хотите сообщить об ошибке на сайте</option>
                                <option>Другой вопрос</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 col-12">
                        <div class="input_wrap">
                            <label for="message">Ваш вопрос</label>
                            <textarea type="text" id="message" name="message" class="input">
                            <?= (isset($oldInput['message']))? $oldInput['message']:'' ?>
                            </textarea>
                            <?php if(isset($errors['message'])): ?>
                            <div class="error">
                                <?= $errors['message'] ?>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 col-12 d-flex flex-column align-content-center">
                        <div class="input_wrap center">
                            <input type="submit" name="submit" value="Submit" class="btn">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="result">
            <?php 
           
        ?>
        </div>

    </div>
    <script src='https://code.jquery.com/jquery-3.5.0.min.js'></script>
    <script src="./script/script.js"></script>

</body>

</html>