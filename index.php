<!-- 1. На основе верстки из html-документа https://disk.yandex.ru/d/H9_wDMSChowFVg (можно отсюда скопировать: 
https://pastebin.com/H4rsjsNa), необходимо создать php-файл с названием index.php и вставить в этот сайт все что есть в html-документе.
Необходимо создать массив в самом верху php-файла, в котором будет описываться опыт работы (правая верхняя часть сайта). 
Необходимо вставить из массива данные на странице, а именно, название работ, дату и описание для каждой работы.
Если хотите усложнить себе задание, то можете попробовать вывести с помощью цикла эти данные. -->

<?php
$name = 'Evgeniy';
$profession = 'Tester';
$city = 'Gomel, Belarus';
$email = 'Evgeniy007@mail.ru';
$phone = '+37529364xxxx';

$skills = [
    [
        'name' => 'Adobe Photoshop',
        'percent' => 50,
    ],
    [
        'name' => 'Illustrator',
        'percent' => 30,
    ],
    [
        'name' => 'Media',
        'percent' => 60,
    ],
];

$works = [
    [
        "name" => "Проводник пассажирских вагонов",
        "dateStart" => "июль 1999",
        "dateEnd" => "сентябрь 2008",
        "description" => "Гомельский пассажирский участок Бел.ж.д. Обслуживание пассажиров местного и дальнего следования.",
    ],
    [
      "name" => "Старший мастер участка погрузо-разгрузочных работ",
      "dateStart" => "Сентябрь 2009",
      "dateEnd" => "2016",
      "description" => "ОАО Гомельхлебопродукт, филиал Новобелицкий комбинат хлебопродуктов. Организация и управление погрузочно-разгрузочных работ железнодорожным и автомобильным транспортом. Составление отчетности и ведение табеля рабочего времени персонала участка.",
  ],
  [
      "name" => "Заведующий хранилищем",
      "dateStart" => "2016",
      "dateEnd" => "по настоящее время",
      "description" => "Военная часть - 11724. Ведение учетной документации, обеспечение учета наличия, сохранности боеприпасов.",
  ],
];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name ="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
 html,
 body,
 h1,
 h2,
 h3,
 h4,
 h5,
 h6 {
 font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://sun9-51.userapi.com/impf/3Mfy64wGkkdL25P3HVGRHNQwHR3H1QOZSKej3g/GxiS5s2lBDA.jpg?size=1280x886&quality=96&sign=9c2d6184b2a409265457cd36ebae2fd1&type=album"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?php echo $name;?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profession;?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city;?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email;?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone;?></p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i = 0; $i < count($skills); $i++): ?>
            	<p><?= $skills[$i]['name'];?></p>
            	<div class="w3-light-grey w3-round-xlarge w3-small">
              		<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skills[$i]['percent'];?>%"><?= $skills[$i]['percent'];?>%</div>
            	</div>
            <?php endfor; ?>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:30%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
            <?php for ($i = 0; $i < count($works); $i++): ?>
              <div class="w3-container">
              <h5 class="w3-opacity"><b><?=$works[$i]['name'];?> </b></h5>
              <h6 class="w3-text-teal">
                <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                <?=$works[$i]['dateStart'];?> - 
                <?php if ($i == 2): ?> 
                <span class="w3-tag w3-teal w3-round">
                  <?=$works[$i]['dateEnd'];?>
                  </span>
                <?php else: ?> 
                  <?=$works[$i]['dateEnd'];?>
                  <?php endif; ?> 
              </h6>
             <p><?=$works[$i]['description'];?></p>
              <hr>
            </div>
           <?php endfor; ?> 
        </div>
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Belarusian State University of Transport</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2007 - 2013</h6>
            <p>Organization of transportation and management on railway transport</p>
            <hr>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>