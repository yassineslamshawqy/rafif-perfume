<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="f.css">
    <meta content="contact" name="description">
    <link rel="icon" href="./icon/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>contact</title>
</head>
<body>
    <a href="../index.php"><button id="go-back"><</button></a>
    <center>
        <div class="input">
            <br>
            <h1>Contact Us</h1>
            <br>
            <div class="content">
                <form action="../main.php" method="post">
                    <input type="text" placeholder="firstname" class="o-in" id="first" name="uname">
                    <input type="text" placeholder="secondname" class="o-in" id="second">
                    <br>
                    <br>
                    <input type="email" placeholder="email..." class="o-in" id="email" name="email">
                    <input type="date" id="birthday" class="o-in">
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
                    <button class="submit" id="submit" name="submit">submit</button>
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
    </style>
    <button id="day-show"><i class="fa fa-book"></i></button>
    <script src="./f.js"></script>
</body>
</html>