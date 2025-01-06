<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="./icon/logo.png">
    <meta content="rafif,perfume,rafif perfume,per,برفان,برفيزم,رفيف,شركه رفيف" name="keywords">
    <meta content="bakarat roj" name="description">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playwrite+NG+Modern:wght@100..400&display=swap" rel="stylesheet">
    <title>bakarat roj</title>
</head>
<body>
    <div class="img-container container image img-i i inline">
        <center>
        </center>
    </div>
    <div class="in-container inline in information container">
        <h2>bakarat roj outlet orignal perfume 30ml collection</h2>
        <h1 style="margin-left:30px;">750EGP</h1>
        <p>that is most requested product warning:(this product come without the carton)</p>
        <br>
        <div class="rates">
            <i class="fa fa-star rate"></i>
            <i class="fa fa-star rate"></i>
            <i class="fa fa-star rate"></i>
            <i class="fa fa-star rate"></i>
            <i class="fa fa-star rate"></i>
        </div>
        <br>
        <div class="buttons">
            <div class="size">
                <form action="../main.php" method="post">
                    <button name="t-ml" id="tt">40ml</button>
                    <button name="n-ml" id="hh">100ml</button>
                    <p>our collections</p>
                </form>
            </div>
            <br>
            <br>
            <form action="../main.php" method="post">
                <button href="" class="btn" name="order-ba">order now</button>
                <br>
                <button class="cart">add to cart</button>
            </form>
        </div>
        <div class="del"></div>
    </div>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: "Montserrat", sans-serif;
        }

        .image{
            background-image: url("../img/WhatsApp Image 2024-11-23 at 16.36.21_abe05e01.jpg");
            background-size: cover;
        }

        .buttons{
            margin-left: 30px;
        }

        button{
            cursor: pointer;
        }

        .size button{
            color: #daa520;
            background: none;
            padding: 12px 22px;
            border: 2px solid #daa520;
            cursor: pointer;
        }

        .btn{
            background-color: #daa520;
            padding: 14px 24px;
            border-radius: 90px;
            color: black;
            border: none;
            text-decoration: none;
        }

        .cart{
            background: none;
            padding: 14px 24px;
            border-radius: 90px;
            border: #daa520 2px solid;
            color: #daa520;
        }

        .rates{
            color: yellow;
            margin-left: 30px;
        }

        .i{
            background-color: #151517;
            height: 100vh;
            text-align: center;
            align-items: center;
            justify-content: center;
            float: left;
            width: 50%;
        }

        .in{
            float: right;
            background-color: black;
            width: 50%;
            height: 100vh;
            text-align: left;
            color: #daa520;
        }

        .in h2{
            font-size: 40px;
            margin-top: 30px;
            margin-left: 30px;
        }

        .in p{
            margin-left: 30px;
        }

        .inline{
            display: inline-block;
        }

        @media (max-width:1023px){
            .i{
                float: none;
                width: 100%;
                height: 50vh;
            }
            
            .buttons{
                margin-left: 0px;
            }

            .in p{
                margin: 0px;
            }

            .i img{
                height: 250px;
            }

            .in h2{
                font-size: 30px;
                margin-left:0px !important;
            }

            .i img{
                height: 250px;
            }

            .rates{
                margin: 0px;
            }

            .del{
                display: none;
            }

            .in{
                float: none;
                width: 100%;
                height: 70vh;
                text-align: center;
            }
        }
    </style>
    <script>
        alert('warning:(this product come without the carton)');
        document.getElementById('hh').onclick = function(){
            alert('the price for 100ml is 550EGP');
        }
        document.getElementById('tt').onclick = function(){
            alert('the price for 40ml is 250EGP');
        }
    </script>
</body>
</html>