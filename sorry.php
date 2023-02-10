<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: tcb;
            src: url(fonts/TCB_____.TTF);
        }

        * {
            font-family: tcb;
        }

        body {
            margin: 0;
        }

        .message-box {
            width: 100vw;
            height: 100vh;
            background-color: lightcoral;
            color: white;
            text-align: left;
            font-size: 3rem;
            padding: 20%;
            box-sizing: border-box;
        }

        a {
            width: 100px;
            height: 30px;
            background-color: rgb(206, 101, 101);
            border: 1px solid white;
            font-size: 1.5rem;
            color: white;
            padding: 10px 30px;
            box-sizing: content-box;
            text-decoration: none;
            transition: background-color .3s ease;
        }

        a:hover {
            background-color: rgb(230, 101, 101);
        }

        span {
            font-size: 2rem;
        }

        .div1 {
            position: relative;
            left: 35%;
        }
    </style>
</head>

<body>
    <div class="message-box">
        <div class="div1">
            Sorry,<br><span>Please check back later.</span>
            <br>
            <br>
            <a href="portfolio.php">Back</a>
        </div>
    </div>
</body>

</html>