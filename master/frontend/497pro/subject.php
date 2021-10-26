<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <title> مادة </title>
    <link rel="stylesheet" href="assets/css/sty.css">
    <link rel="stylesheet" href="assets/css/styles.css">



    <script>
        var DARK_THEME = document.getElementById('dark_theme');
        var HEAD = document.getElementsByTagName('head')[0];
        var CURRENT_THEME = 'light';


        const AAA = "#181F25";
        const BBB = '#EFF1F2';
    </script>
    <script>
        var CURRENT_THEME = 'dark';
    </script>


</head>

<body onload="pageloaded()">

    <div class="sidebar-main-container" id="sidebar">
        <a href="" class="noSelect">
            <img class='sidebar-logo' src="" alt="">
        </a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <a id="mainpage" href="index.php" class="sidebar-item-container noSelect">
            <div class="sidebar-item-title">
                المواد
            </div>
            <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
              </svg>


            <a id="addcourse" href="add.php" class="sidebar-item-container noSelect">
                <div class="sidebar-item-title">
                    أضف مادة
                </div>
                <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </a>
            <a id="addclo" href="" class="sidebar-item-container noSelect">
                <div class="sidebar-item-title">
                    أضف clo
                </div>
                <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </a>



          
<?php 	
$db = new mysqli('localhost','root','','ABET');
	
   
// Database connection
ini_set("display_errors", "1");
error_reporting(E_ALL);

?>

<?php
if (isset($_GET['id'])) {
    $result = mysqli_query($db, "SELECT * FROM course WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
}

?>












    </div>

    <div class="overlay stopScroll noSelect" id="overlay" onclick="close_sidebar()"></div>



    <div class="body">









        <form action="" method="POST" class="main-card" id="">


            <div class="inputs">
                <div class="title">
                    <h2><?php echo $row['name'];?> </h2>
                </div>
               

            </div>



        </form>
    </div>

    <footer>



    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
        openConsoleUrl = "https://www.google.com"
    </script>
    <script>
        (function() {
            try {
                var $_console$$ = console;
                Object.defineProperty(window, "console", {
                    get: function() {
                        if ($_console$$._commandLineAPI)
                            throw "Sorry, for security reasons, the script console is deactivated ";
                        return $_console$$
                    },
                    set: function($val$$) {
                        $_console$$ = $val$$
                    }
                })
            } catch ($ignore$$) {}
        })();
    </script>
    <script>
        document.addEventListener('keydown', function() {
            if (event.keyCode == 123) {
                //   alert("You Can not Do This! 5");
                window.location.href = openConsoleUrl;
                return false;
            } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
                //   alert("You Can not Do This! 4");
                window.location.href = openConsoleUrl;
                return false;
            } else if (event.ctrlKey && event.keyCode == 85) {
                //   alert("You Can not Do This! 3");
                window.location.href = openConsoleUrl;
                return false;
            }
        }, false);

        if (document.addEventListener) {
            document.addEventListener('contextmenu', function(e) {
                // alert("You Can not Do This! 2");
                e.preventDefault();
                window.location.href = openConsoleUrl;
            }, false);
        } else {
            document.attachEvent('oncontextmenu', function() {
                //   alert("You Can not Do This! 1");
                window.event.returnValue = false;
                window.location.href = openConsoleUrl;
            });
        }
    </script>
    <script>
        const addMaximumScaleToMetaViewport = () => {
            const el = document.querySelector('meta[name=viewport]');

            if (el !== null) {
                let content = el.getAttribute('content');
                let re = /maximum\-scale=[0-9\.]+/g;

                if (re.test(content)) {
                    content = content.replace(re, 'maximum-scale=1.0');
                } else {
                    content = [content, 'maximum-scale=1.0'].join(', ')
                }

                el.setAttribute('content', content);
            }
        };

        const disableIosTextFieldZoom = addMaximumScaleToMetaViewport;

        // https://stackoverflow.com/questions/9038625/detect-if-device-is-ios/9039885#9039885
        const checkIsIOS = () =>
            /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;

        if (checkIsIOS()) {
            disableIosTextFieldZoom();
        }
    </script>
  



</body>

</html>