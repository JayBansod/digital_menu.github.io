<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Digital Restaurant Menu</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-image: url(image/woodBackground.jpeg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            width: 98vw;
            padding-left: 10px;
            padding-right: 10px;
        }

        header {
            /* background: linear-gradient(rgb(18 20 28), rgb(82 177 182)); */
            background: #000046;  fallback for old browsers
background: -webkit-linear-gradient(to bottom, #1CB5E0, #000046);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #1CB5E0, #000046); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            

            color: white;
            border: 10px double white;
            border-radius: 10px;
            margin: 10px;
            margin-left: auto;
            margin-right: auto;
            padding: 5px;
            font-family: cursive;
            font-size: 17px;
            font-weight: bolder;
            text-align: center;
        }

        main {
            background-color: rgba(174, 174, 174, 0.425);
            color: whitesmoke;
            font-family: cursive;
            font-size: 25px;
            font-weight: bold;
            padding: 70px;
            text-align: center;
            border: 5px solid white;
            border-radius: 15px;
            margin: 10px;
            margin-bottom: 20px;
            height: 63vh;
        }

        #welcome {
            margin-left: auto;
            margin-right: auto;
            margin-top: 4vh;
            margin-bottom: 3vh;
        }

        #form {
            padding-top: 40px;
            padding-bottom: 40px;
            color: white;
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
                "Lucida Sans", Arial, sans-serif;
            font-size: 16px;
            font-weight: 600;
        }

        input {
            text-align: center;
            width: 250px;
            height: 50px;
            color: black;
            font-size: 14px;
            background-color: white;
            border: 5px double black;
            border-radius: 10px;
        }

        input:hover {
            background-color: rgb(230, 230, 230);
        }

        #button {
            width: 160px;
            height: 45px;
            font-size: 17px;
            font-weight: bold;
            background-color: rgb(230, 230, 230);
        }

        #button:hover {
            background-color: gray;
            color: white;
            cursor: pointer;
            border: 5px double white;
        }

        #button:active {
            background-color: white;
            color: black;
        }

        footer {
            overflow: hidden;
            font-family: "Courier New", Courier, monospace;
            font-weight: bold;
            padding: 8px;
            background-color: rgb(69, 69, 69);
            color: white;
            border: 4px solid white;
            border-radius: 12px;
            margin: 10px;
            margin-bottom: 0px;
            text-align: right;
        }
    </style>
</head>

<body>
    <header>
        <h1>Foodies</h1>
    </header>

    <main>
        <section id="welcome">
            Welcome to our digital restaurant menu!!!
            <section id="form">
                <form action="products.php" >
                    <input type="number" name="nam" id="tableNumber" placeholder="ENTER TABLE NUMBER" min="1"
                        max="10" required />
                    <br /><br />
                    <input type="submit" value="SUBMIT" id="button" />
                </form>
                <form action="user_bag.php" method="post">
                
                </form>
                <input type="hidden" name="nam" id="tableNumber" placeholder="ENTER TABLE NUMBER" min="1"
                        max="10" required />
            </div>
            </section>
    </main>

    <footer>Copyright @ 2022</footer>
</body>

</html>