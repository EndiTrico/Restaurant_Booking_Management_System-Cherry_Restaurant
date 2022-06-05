<html>

<head>
    <link rel="stylesheet" href="style_contact.css">
    <link rel="icon" type="image/png" href="./images/restaurant_logoo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="js_contact.js">

    </script>

    <title>Cherry Restaurant | Contact us</title>
</head>

<body>
<?php include "header_admin.php"; ?>

    <div>
        <img class="main_photo" src="./Images/Images_Contact/photo1.png" alt="Photo Contact">
        <img class="main_burgerphoto" src="./Images/Images_Contact/photo2.png" alt="Burger">
        <h1 class="contactus_text">Contact Us</h1>
    </div>

    <div class="contacts_img">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="black_background" src="./Images/Images_Contact/photo5.png">
                    <h4 class="black_text" onmouseover="typeWriter1()">Cherry Restaurant <br> Vila</h4><br>
                    <section id="location1">
                        <ul>
                            <li><span class="span_black">Address: </span>"Mustafa Matohiti"</li><br>
                            <li><span class="span_black">Phone number: </span>+355 69 57 12 565</li><br>
                            <li><span class="span_black">Email: </span>cherryrestaurant_vila@gmail.com</li><br>
                        </ul>
                        <h3 class="reservation_h3"><a href="user_reservation.php">Reservation</a></h3>
                    </section>
                </div>

                <div class="col-md-4">

                    <section class="lottie">
                        <h6>To know the contact's details of each <br>restaurant mouse over on the title</h6>
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_7UVfnn.json" background="transparent" speed="1" style="width: 300px; height: 250px; margin-top: 170px;" loop autoplay>
                        </lottie-player>
                    </section>
                </div>
                <div class="col-md-4">
                    <img class="black_background" src="./Images/Images_Contact/photo5.png">
                    <h4 class="black_text" onmouseover="typeWriter2()">Cherry Restaurant <br> Bllok</h4><br>
                    <section id="location2">
                        <ul>
                            <li><span class="span_black">Address: </span>"Pjetër Bogdani"</li><br>
                            <li><span class="span_black">Phone number: </span>+355 69 57 12 852</li><br>
                            <li><span class="span_black">Email: </span>cherryrestaurant_bllok@gmail.com</li><br>
                        </ul>
                        <h3 class="reservation_h3"><a href="user_reservation.php">Reservation</a></h3>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

</body>

</html>