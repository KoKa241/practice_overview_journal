<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <style>

    body {
      padding-top: 60px; 
    }
    .footer {
      background-color: #f8f9fa;
      padding: 20px 0;
      text-align: center;
    }
  </style>
    <title>Document</title>
</head>
<body>
    <?php
    require("header.php");
    ?>

  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h2>Reviews</h2>
        <ul class="list-group">
          <li class="list-group-item">
          <p class="text-start"><strong>Yulia</strong></p>  
          Review 1
        </li>
          <li class="list-group-item">
          <p class="text-start"><strong>Vlad</strong></p>    
          Review 2
        </li>
          <li class="list-group-item">
          <p class="text-start"><strong>Max</strong></p>    
          Review 3
        </li>
        </ul>
        <br>
        <h2>Write review</h2>
        <?php
        if (checkCoockie()) { ?>
        <form>
          <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" id="name" placeholder="Введите ваше имя">
          </div>
          <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Введите ваш отзыв"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" id = 'send_form'>Отправить</button>
        </form>
    
    <?php } 
    else {
    ?>
    <div class="container mt-5">
    <div class="alert alert-danger" role="alert">
      Please, <a href="login.php" class="alert-link">log in</a> to leave a review.
    </div>
  </div>
    <?php
    }
    ?>
        
      </div>
    </div>
    
  </div>
  

    <?php
    require("footer.php");
    ?> 


    <script src="js/bootstrap.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script>
        function sendingAlert()    {
            Swal.fire("SweetAlert2 is working!");
        }
        document.getElementById("send_form").addEventListener("click", sendingAlert);
    </script>
</body>
</html>