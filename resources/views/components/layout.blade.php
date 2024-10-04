
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-top: 40px;
            padding: 0;


        }
        /* .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            position: fixed;
            color:white;
            top: 0;
            right: 0;
            left: 0;
            display: flex;
            flex: 1;
        } */
         body{
            margin-top: 50px;

         }
         .logbook{
            margin-right:70%;
         }
        nav {
            background-color: blue;
            color: #fff;
            padding: 1em;
            text-align: center;
            position: fixed;
            left: 0;
            right: 0;
            top: 0px;

        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav li {
            display: inline-block;
            margin-right: 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
        }


        .container {
            max-width: 800px;
            margin: 40px auto;
            display: flex;
            flex-direction:row;
            flex-wrap: wrap;
            justify-content: center;
        }
        .box {
            flex-basis: 45%;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(23, 4, 4, 0.1);
        }
        footer {
            background-color: blue;
            color: #fff;
            padding: 20px;
            text-align: center;
            clear: both;
        }
        .footer-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
        }
        .footer-links a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }
        .footer-info p {
            color: #fff;
            margin-bottom: 10px;
        }
        .footer-social a {
            color: #fff;
            margin-right: 20px;
        }
        h2{
            Color:#333333;
            font-size: 20px;
            Line Height: 1.5;
        }
        p{
            Color:#333333;
            font-size: 15px;
            Line Height: 1.5;
        }
    </style>
</head>
<body>
    <nav>

        <ul>
            <ul>
                <li class="logbook"><a href="/">SiwesLog</a></li>

                <li><a href="{{ route('login') }}" id="login-link">Login</a></li>
                @auth

                @endauth
                <li><a href="{{ route('register') }}" id="register-link">Register</a></li>
                <li><a href="{{ route('help') }}" id="help-link">Help</a></li>
            </ul>

        </ul>
    </nav>
 {{ $slot }}
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="">Login</a>
                <a href="">Register</a>
                <a href="">Help</a>
            </div>
            <div class="footer-info">
                <p>&copy; 2024 Logbook. All rights reserved.</p>
                <p>Designed and Developed by Sam </p>
            </div>
            <div class="footer-social">
                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Add event listeners to navigation links
        // document.getElementById('login-link').addEventListener('click', function(event) {
        //     event.preventDefault();
        //     alert('Login link clicked!');
        // });

        // document.getElementById('register-link').addEventListener('click', function(event) {
        //     event.preventDefault();
        //     alert('Register link clicked!');
        // });

        // document.getElementById('help-link').addEventListener('click', function(event) {
        //     event.preventDefault();
        //     alert('Help link clicked!');
        // });

        // Add some interactive functionality to the logbook boxes
        const boxes = document.querySelectorAll('.box');
        boxes.forEach(box => {
            box.addEventListener('mouseover', function() {
                this.style.boxShadow = '0 0 20px rgba(23, 4, 4, 0.3)';
            });
            box.addEventListener('mouseout', function() {
                this.style.boxShadow = '0 0 10px rgba(23, 4, 4, 0.1)';
            });
        });
             // Add animation to the header
        document.querySelector('.header').animate([
            { transform: 'translateY(-100px)' },
            { transform: 'translateY(0px)' }
        ], {
            duration: 1500,
            easing: 'ease-in-out'
        });

        // Add animation to the footer
        document.querySelector('footer').animate([
            { transform: 'translateY(100px)' },
            { transform: 'translateY(0px)' }
        ], {
            duration: 1500,
            easing: 'ease-in-out',
            delay: 1000
        });
    </script>

</body>
</html>

