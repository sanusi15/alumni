<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


    <!-- mycss -->
    <link rel="stylesheet" href="<?= base_url('assets/css/glash.css'); ?>">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="content">
                <h2>01</h2>
                <h3>Card One</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ipsam impedit consequuntur mollitia, non soluta laborum officiis distinctio?</p>
                <a href="">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2>02</h2>
                <h3>Card Two</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ipsam impedit consequuntur mollitia, non soluta laborum officiis distinctio?</p>
                <a href="">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2>03</h2>
                <h3>Card Three</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ipsam impedit consequuntur mollitia, non soluta laborum officiis distinctio?</p>
                <a href="">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2>03</h2>
                <h3>Card Three</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ipsam impedit consequuntur mollitia, non soluta laborum officiis distinctio?</p>
                <a href="">Read More</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript" src="<?= base_url('assets/js/vanilla-tilt.js'); ?>"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 25,
            speed: 400,
            glare: 1,
        });
    </script>


</body>

</html>