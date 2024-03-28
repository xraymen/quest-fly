<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quest Fly</title>
  <style>
    body {
      margin: 0;
      font-family: 'koulen', sans-serif;
      background-color: #FFA6A6;
      color: #000000;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #FFA6A6;
      border-bottom: 3px solid #ffffff;
    }

    header img {
      max-width: 100%;
      height: auto;
      border-style: none;
    }

    header button {
      margin-left: auto;
      border-style: none;
      background-color: #FFA6A6;
    }

    hr {
      border: none;
      height: 1px;
      background-color: #D9D9D9;
      margin: 0;
      font-family: 'koulen';
    }

    main {
      text-align: center;
      padding: 1px;
      width: 100%;
      height: 100%;
      display: block;
      border-style: none;
    }

    main img {
      max-width: 100%;
      height: auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      border-style: none;
    }

    .text-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
      align-items: center;
      font-size: 40px;
    }

    .text-container p {
      margin: 20px 130px;
    }

    .icons {
      display: flex;
      justify-content: center;
      margin-top: 20px;
      align-items: center;
    }

    .icon {
      text-align: center;
      margin: 20px 60px;
      color: #FF8B03;
      padding: 10px 20px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      background-color: #D9D9D9;
      border: none;
      border-radius: 25px;
      font-size: 50px;
      cursor: pointer;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .button-center {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      background-color: #FF8B03;
      color: #FFFFFF;
      border: none;
      border-radius: 25px;
      font-size: 80px;
      cursor: pointer;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      font-family: 'Koulen';
    }

    .section-title {
      color: #FFFFFF;
      margin-top: 135px;
      font-size: 80px;
      display: block;
      text-align: center;
    }

    .text-center {
      text-align: center;
      margin-top: 20px;
      color: #FFFFFF;
      font-size: 32px;
      margin-left: 70px;
      margin-right: 70px;
      
    }

    .white-bar {
      background-color: #FFFFFF;
      height: 3px;
      width: 100%;
    }

    footer {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 20px;
      background-color: #FFA6A6;
      border-top: 1px solid #D9D9D9;
    }

    footer .text-right {
        width: 100%;
        text-align: right;
        font-size: 22px;
    }
    footer .text-left {
      width: 100%;
      text-align: left;
      font-size: 22px;
    }

    @media (min-width: 768px) {
      footer .text-right,
      footer .text-left {
        width: 45%;
      }
    }

    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color: #f0c0c0;
      width: 20%;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      text-align: center;
      border: 5px solid #FFA6A6;
    }

    /* Стили для формы в модальном окне */
    .modal-form input {
      width: 50%;
      margin-bottom: 10px;
      padding: 10px;
      border: 2px solid #FFA6A6;
      border-radius: 5px;
      background-color: #D9D9D9;
      color: #FFFFFF;
      font-family: 'Koulen', sans-serif;
    }

    .modal-form label {
      display: block;
      margin-bottom: 5px;
    }

    .modal-form .checkbox-group {
      display: flex;
      align-items: center;
    }

    .modal-form .checkbox-group input {
      margin-right: 10px;
    }
    .modal-form .submit-button {
      background-color: #FF8B03;
      border: 2px solid #FCB057;
      border-radius: 10px;
      color: #FFFFFF;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      font-family: 'Koulen';
    }

    @media (max-width: 768px) {
      .modal-content {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>

  <header>
    <img src="img/logo.png" alt="Logo">
    <a href="vxod.html"><id="personal-cabinet"></id><img src="img/lk.png" alt="lk"></a>
  </header>

  <hr>
  <main>
    <img src="img/fortnite 2.png" alt="Main Image">

    <div class="text-container">
      <p>time</p>
      <p>price</p>
      <p>age</p>
    </div>

    <div class="icons">
      <div class="icon">2 hours</div>
      <div class="icon">from 150$</div>
      <div class="icon">8-14 years</div>
    </div>

    <button class="button-center" onclick="showModal()">reservation</button>

    <div class="modal" id="reservationModal">
      <div class="modal-content modal-form">
        <h1>reservation</h1>
        <h2>Call us - we will definitely offer something that suits you!</h2>
        <form action="12.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Enter your name">
        <label for="phone">Phone</label>
        <input type="text" id="phone" placeholder="Enter your phone number">
        <div class="checkbox-group">
          <input type="checkbox" id="acceptCheckbox">
          <label for="acceptCheckbox">I agree with the processing of personal data</label>
        </div>
        <button class="submit-button" onclick="submitForm()">choose a program</button>
        </form>
      </div>
    </div>

    <div class="section-title">Program description</div>

<div class="text-center">
      <p>We have developed a program that will help immerse participants in the FORTNITE atmosphere as much as possible. Our presenters will help you correctly calculate the coordinates for landing, practice the skills of a ninja, builder and traveler, prepare a strong decoction, go through the training ground, and find a chest with supplies. Children's outdoor quest FORTNITE will add adrenaline to your holiday!</p>
    </div>
  </main>

  <hr class="white-bar">

  <footer>
    <div class="text-left">
      <p>quests</p>
      <p>characters</p>
      <p>show</p>
    </div>
    <div class="text-right">
      <p>+7 999 - 228 - 78 - 78</p>
      <p>quests.kids@mail.eu</p>
      <p>1116 108th Ave NEBellevue, WA 98004Directions »</p>
    </div>
  </footer>

  <script>
    // JavaScript-код для отображения и скрытия модального окна
    function showModal() {
      var modal = document.getElementById('reservationModal');
      modal.style.display = 'flex';
    }

    function submitForm() {
      // Здесь вы можете добавить логику обработки формы
      // Например, собрать данные и отправить на сервер
      // В данном примере просто скрываем модальное окно
      var modal = document.getElementById('reservationModal');
      modal.style.display = 'none';
    }
  </script>

</body>
</html>
<?php 
require_once('connect.php');
$login = $_POST['login'];
$phone = $_POST['Phone'];
    $sql = "INSERT INTO user (login, password, Email, phone) VALUES ('$login', '$passw', '$email', '$phone')";
    if ($db -> query($sql) === TRUE) {
        echo "Заявка отправлена";
    } else {
        echo "Ошибка: " . $db->error;}
?>
