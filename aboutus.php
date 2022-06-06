<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style_aboutus.css">
    <link rel="icon" type="image/png" href="./images/restaurant_logoo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Cherry Restaurant | About us</title>
</head>

<body>
    <?php include "header.php"; ?>


    <div>
        <img class="photo" src="./Images/Images_aboutus/photo5.jpg">
        <h1 class="aboutus_text">About Us</h1>
    </div>

    <div class="opening_hours">
        <div class="container reveal">
            <div class="row">
                <div class="col-md-6">
                    <div class="lottie">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_qlbkliir.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay>
                        </lottie-player>
                    </div>
                </div>

                <div class="col-md-6" style="margin-right: -100px;">
                    <img src="./Images/Images_aboutus/photo6.png">
                    <h3>Opening Hours:</h3><br>
                    <p>Monday................................................9:00 AM - 12:00 AM</p>
                    <p>Tuesday................................................9:00 AM - 12:00 AM</p>
                    <p>Wednesday.........................................9:00 AM - 12:00 AM</p>
                    <p>Thursday..............................................9:00 AM - 12:00 AM</p>
                    <p>Friday....................................................9:00 AM - 12:00 AM</p>
                    <p>Saturday..............................................9:00 AM - 12:00 AM</p>
                    <p>Sunday.................................................9:00 AM - 12:00 AM</p>
                </div>
            </div>
        </div>
    </div>

    <div class="story1">
        <div class="container reveal">
            <div class="row">
                <div class="col-md-6">
                    <h2>Our Story</h2>
                    <p>A good story begins with “Once upon a time…”
                        Ours, begins with: “Once upon a time, there was a man with a vision…”
                        In his vision, Cherry wouldn’t be just another business – but it would be the beginning of
                        something great; Cherry wouldn’t be just another restaurant – but it would be a place where
                        people could spend quality time; Cherry wouldn’t be a place where you are simply served – but
                        a
                        place where you could feel welcomed and appreciated; to him Cherry wouldn’t be just a brand –
                        but
                        something that could truly represent him and his passions.
                        He knew that he couldn’t give life to his vision alone, so he created a team of people with the
                        same
                        passion and drive, and together brought Cherry to life – the restaurants cherished by
                        hundreds of
                        people in Tirana.</p>
                </div>

                <div class="col-md-6">
                    <img class="story1_img" src="./Images/Images_aboutus/photo1.jpg">
                </div>
            </div>
        </div>
    </div>

    <div class="story2">
        <div class="container reveal">
            <div class="row">
                <div class="col-md-6">
                    <img class="story2_img" src="./Images/Images_aboutus/photo2.jpg">
                </div>

                <div class="col-md-6">
                    <p>
                        We knew that the way to people’s hearts is only through real, good food. So we started making
                        our pasta by hand, fresh every morning. Homemade bread is baked in our wood-fired oven every
                        day. We produce our own extra virgin olive oil, from the finest olives in the Albanian south
                        coast. Meat, cheeses, salamis, vegetables and every product is hand-picked and of the highest
                        quality. We perfected the recipes of all the classic pizzas and tested dozens of new ones. We
                        were the first to introduce in Tirana pizzas with Burrata mozzarella, with Philadelphia and
                        truffle, with Nutella (to die for), and so many others.
                        Success didn’t come overnight, but all the hard work was totally worth it. Every praise
                        motivated us to work even harder; every returning customer was a victory; having all our tables
                        filled, was a dream come true.</p>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.addEventListener('scroll', reveal);

        function reveal() {
            var reveals = document.querySelectorAll('.reveal');

            for (var i = 0; i < reveals.length; i++) {

                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                } else {
                    reveals[i].classList.remove('active');
                }
            }
        }
    </script>

    <?php include "footer.php"; ?>

</body>

</html>