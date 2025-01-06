<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="f.css">
    <meta content="order" name="description">
    <link rel="icon" href="./icon/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>order</title>
</head>
<body>
    <a href="../index.php"><button id="go-back"><</button></a>
    <center>
        <div class="input">
            <br>
            <h1>Order now</h1>
            <br>
            <div class="content">
                <form action="../main.php" method="post">
                    <input type="text" placeholder="firstname" class="o-in" id="first" name="username">
                    <input type="text" placeholder="secondname" class="o-in" id="second">
                    <br>
                    <br>
                    <input type="number" placeholder="phonenumber..." class="o-in" id="email" name="phone">
                    <input type="text" id="birthday" class="o-in" placeholder="address" name="address">
                    <br>
                    <br>
                    <label class="margin" for="country">Choose your country:</label>
                    <select class="margin" id="country" name="country" form="country">
                        <option value="Egypt">Egypt</option>
                        <option value="saudia">Suadia</option>
                        <option value="Yemen">Yemen</option>
                        <option value="seria">seria</option>
                        <option value="Russia">russia</option>
                    </select>
                    <br>
                    <br>
                    <button class="submit" id="submit" name="sent">submit</button>
                </form>
                <div class="n" id="n">
                    <h4 id="first-d">...</h4>
                    <h4 id="second-d">...</h4>
                    <h4 id="third-d">...</h4>
                    <h4 id="fourth-d">...</h4>
                </div>
            </div>
        </div>
    </center>
    <div class="loader-main" id="loader">
        <center>
            <span class="loader"></span>
        </center>
    </div>
    <style>
        .loader {
            width: 100px;
            height: 30px;
            display: flex;
            margin-top: 300px;
        }
        
        .loader:before,
        .loader:after {
            content: "";
            flex: 1;
            margin: 0 5px;
            background: #ffffff;
            clip-path: polygon(0 10px,calc(100% - 15px) 10px,calc(100% - 15px) 0,100% 50%,calc(100% - 15px) 100%,calc(100% - 15px) calc(100% - 10px),0 calc(100% - 10px));
            animation: l3 .5s infinite alternate;
        }
        .loader:after {
            --s:-1;
        }
        
        @keyframes l3 {
            0%  {transform: scaleX(var(--s,1)) translate(-4px)}
            100%{transform: scaleX(var(--s,1)) translate( 4px)}
        }
        
        .loader-main{
            background-color:#daa520;
            z-index: 100;
            width: 100%;
            height: 100vh;
            position: fixed;
        }
        @media(max-width:700px){
            .loader{
                margin-top: 270px;
            }
        }
        *{
    margin: 0px;
    padding: 0px;
}

body{
    background-color: black;
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

body::after{
    content: '';
    height: 100%;
    width: 100%;
    background-color: #daa520;
    position: absolute;
    z-index: 2;
    opacity: 1;
    clip-path: circle(40% at right 70%);
}

.input{
    background-color: #151517;
    height: 500px;
    border-radius: 16px;
    width:900px;
    position: relative;
    top:10px;
    font-family: "Montserrat", sans-serif;
    text-align: left;
}

.input h1{
    color: #daa520;
    margin-left: 23px;
    margin-top: 17px;
}

.content{
    z-index: 3;
}

.o-in{
    height: 30px;
    margin-left: 23px;
}

.margin{
    margin-left: 23px;
    color:#daa520;
}

#country{
    color: black;;
}

.nav-item{
    display: inline-block;
}

.nav-link{
    color: #ffffd9;
    text-decoration: none;
}

#go-back{
    color: #ffffd9;
    background-color: #daa520;
    width: 25px;
    height: 25px;
    border-radius: 90px;
    border: none;
    position: fixed;
    top: 10px;
    cursor: pointer;
    text-decoration: none;
    left: 10px;
}

.submit{
    margin-left: 23px;
    background-color: #daa520;
    color: #ffffd9;
    width: 140px;
    border: none;
    height: 24px;
    transition: 0.7s;
    border-radius: 5px;
    cursor: pointer;
}

.submit:hover{
    background: none;
    border: 1px solid #e94f37;
}

#particles-js{
    background-color: #393e41;
    width: 100%;
    height: 100vh;
    z-index: -5;
}

.n{
    margin-left: 23px;
    color: #ffffd9;
}

#day-show{
    background-color: #f6f7eb;
    color: #2a2e30;
    border-radius: 90px;
    width: 25px;
    height: 25px;
    border: none;
    position: fixed;
    bottom: 10px;
    left: 10px;
    cursor: pointer;

}

.n{
    display: none;
}

@media (max-width:1023px){
    .input{
        width: 300px;
    }

    body::after{
        z-index: -1;
    }
}
    </style>
    <button id="day-show"><i class="fa fa-book"></i></button>
    <script>
        setTimeout(function(){
            document.getElementById('loader').style.display = 'none';
        },1000);
    </script>
</body>
</html>