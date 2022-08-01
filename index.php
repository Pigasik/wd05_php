<?php

session_start(); // никогда ничего перед ней не должно выводиться! (сессия не будет запущена)

include_once 'db.php';
include_once 'my_function.php';
include('Worker.php');
include('Form.php');
$res = mysqli_query($connection, 'select * FROM posts');
$posts = mysqli_fetch_all($res, MYSQLI_ASSOC);

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

// 2. Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public 
// методы setName, getName, setAge, getAge, setSalary, getSalary.
// Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
// Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

	$workerIvan = new Worker();
	$workerIvan->setName('Иван');
	$workerIvan->setAge(25);
	$workerIvan->setSalary(1000);

	$workerVasya = new Worker();
	$workerVasya->setName('Вася');
	$workerVasya->setAge(26);
	$workerVasya->setSalary(2000);

	$sumSalary = $workerIvan->getSalary() + $workerVasya->getSalary();
	$sumAge = $workerIvan->getAge() + $workerVasya->getAge();

	echo "Сумма зарплат: $sumSalary<br>";
	echo "Сумма возрастов: $sumAge<br>";

// 3. Дополните класс Worker из предыдущей задачи private методом checkAge, который будет 
// проверять возраст на корректность (от 1 до 100 лет). 
//Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).

    $workerIvan = new Worker();
	$workerIvan->setName('Иван');
	$workerIvan->setAge(101);
	$workerIvan->setSalary(1000);

	$workerVasya = new Worker();
	$workerVasya->setName('Вася');
	$workerVasya->setAge(26);
	$workerVasya->setSalary(2000);

	$sumSalary = $workerIvan->getSalary() + $workerVasya->getSalary();
	$sumAge = $workerIvan->getAge() + $workerVasya->getAge();

	echo "Сумма зарплат: $sumSalary<br>";
	echo "Сумма возрастов: $sumAge<br>";

// 4. Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). 
// Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ). 
// Сделайте также public методы getName, getSalary.
// Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

    $workerDima = new Worker('Дима', 25, 1000);
	$multiplication = $workerDima->getAge() * $workerDima->getSalary();
	echo "Прозиведение возраста и зарплаты: $multiplication<br>";

// 5. Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge,
// getAge. Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), 
// а также методы public getSalary и setSalary. Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. 
// Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи. Сделайте класс Student, 
// который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.

    $workerIvan = new Worker();
	$workerIvan->setName('Иван');
	$workerIvan->setAge(25);
	$workerIvan->setSalary(1000);

	$workerVasya = new Worker();
	$workerVasya->setName('Вася');
	$workerVasya->setAge(26);
	$workerVasya->setSalary(2000);

	$sumSalary = $workerIvan->getSalary() + $workerVasya->getSalary();
	$sumAge = $workerIvan->getAge() + $workerVasya->getAge();

	echo "Сумма зарплат: $sumSalary<br>";
	echo "Сумма возрастов: $sumAge<br>";

//7. Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open, close. 
// Каждый метод принимает массив атрибутов.
    $form = new Form();

	echo $form->open(['action'=>'index.php', 'method'=>'POST']);
    echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
    echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
    echo $form->submit(['value'=>'Отправить']);
    echo $form->close();

//8.Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов и 
// textarea после отправки. То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть. 
// Мало ли что-то пойдет не так, например, форма некорректно заполнена, а введенные данные из нее пропали и их следует вводить заново. 
// Этого следует избегать.
    $form = new SmartForm();
    echo $form->open();
    echo $form->input('login');
    echo $form->password('password');
    echo $form->submit('Отправить');
    echo $form->close();

// 9.Создайте класс Cookie - оболочку над работой с куками. Класс должен иметь следующие методы: установка куки set(имя куки, ее значение),
// получение куки get(имя куки), удаление куки del(имя куки).
    $cok = new Cookie();
    $cok->setCookie('cuki','42323232');
    
    $cok->delCookie("cuki");
    echo $cok->getCookie('cuki');

//10. Создайте класс Session - оболочку над сессиями. Он должен иметь следующие методы: создать переменную сессии, получить переменную, 
//удалить переменную сессии, проверить наличие переменной сессии. Сессия должна стартовать (session_start) в методе __construct.
    $ses = new Session();
    $ses->name='ses';
    $ses->text='3232232';
    $ses->createSession();
    $ses->delSession();
    echo $ses->provSession();

//11. Реализуйте класс Flash, который будет использовать внутри себя класс Session из предыдущей задачи (именно использовать, 
// а не наследовать). Этот класс будет использоваться для сохранения сообщений в сессию и вывода их из сессии. Зачем это нужно: 
// такой класс часто используется для форм. Например на одной странице пользователь отправляет форму, мы сохраняем в сессию сообщение
// об успешной отправке, редиректим пользователя на другую страницу и там показываем сообщение из сессии. Класс должен иметь 
// да метода - setMessage, который сохраняет сообщение в сессию и getMessage, который получает сообщение из сессии.
    $flash=new Flash($ses,'767665');
    $flash->reductFlash();
    echo $flash->vivodFlash();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Nested row for non-featured blog posts-->
            <div class="row">

                <?php foreach($posts as $post):
                    //$shortText = shortText($post['content']);
                    ?>
            
                <div class="col-lg-12">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="/<?=$post['img']?>" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2022</div>
                            <h2 class="card-title h4"><?=$post['title']?></h2>
                            <p class="card-text"><?=$shortText?></p>
                            <a class="btn btn-primary" href="/page.php?id=<?=$post['id']?>">Read more →</a>
                        </div>
                    </div>
                    <!-- Blog post-->
                <?php endforeach; ?>
            
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Web Design</a></li>
                                <li><a href="#!">HTML</a></li>
                                <li><a href="#!">Freebies</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">JavaScript</a></li>
                                <li><a href="#!">CSS</a></li>
                                <li><a href="#!">Tutorials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>