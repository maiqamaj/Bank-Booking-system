
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
        <meta name="description" content=" يمكنك الآن حجز موعدك في البنك الذي تتعامل معه في أي وقت يناسبك بسهولة دون إضاعة أي  وقت في الانتظار ">
    <title>Bank Booking System </title>
    <style>
        body {
            background-color: #00071c;
            background-image: url('https://www.dbs.com.hk/iwov-resources/media/images/products/deposit/main-banner/deposits-multi-currency-account-1404x630-en.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 50%;
        }

        #Window {
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 99999;
            height: 100%;
            width: 100%;
        }

        .WindowC {
            position: absolute;
            top: 50%;
            left: 50%;
            border-radius: 15px;
            transform: translate(-50%, -50%);
            background: #f8f6fd;
            width: 40%;
            padding: 30px;
        }

        .close {
            color: black;
            float: right;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
        }

        .box1 {
            position: absolute;
            background-color: #ECE5B6;
            width: 300px;
            padding: 30px;
            border-radius: 15px;
        }
        .button {
            margin: 10px auto;
            background-color: #212121;
            width: 85px;
            padding: 5px;
            border-radius: 20px;
            border: 2px outset #fff;
        }
        h3 {
            color: #fafafa
        }
        a {
            text-decoration: none
        }
    </style>
    <script>
        window.onload = function () {
            document.getElementById('closex').onclick = function () {
                document.getElementById('Window').style.display = "none";
            };
            
            var span = document.getElementsByClassName("close")[0];
            // When the user clicks "x" to close this window
            span.onclick = function () {
                document.getElementById('Window').style.display = "none";
            };
        };
    </script>
</head>
<body>
    <div id="Window">
        <div class="WindowC">
            <span class="close">×</span>
            <br>

            <h4 dir="rtl" align="right">الأن احجز موعدك دون الحاجه لأضاعه الوقت في بنكك الذي تتعامل معه والفرع الأقرب لديك </h4>

            <center>
                <span style="font-size:15px" right> يرحب بكم نحن سعيدون لتواجدكم معنا ويسرنا وجودكم في موقعنا الذي يوفر لكم الوقت والجهد </span><br><br>
                <span style="font-size:15px">هل تريد الأستمرار في حجز موعدك في اي وقت يناسبك </span><br><br>
                <span style="font-size:15px"> وفّر وقتك وشاركنا التجربة الجديدة الآن فقط في موقعنا الأول في الأردن كافه </span><br><br>
                <span style="font-size:22px"> <b> Bank Booking system فريق </b></span>
            </center><br><br>

            <center><a id="closex" href="javascript:void(0);"><h2>الاستمرار لحجز موعد</h2></a></center>

        </div>
    </div>
    <BR>
    <center> <h1><b> Welcome to Bank Booking System  </b></h1></center>
    <BR>
    <BR>
    <center> <h2> <b>Please Choose The Bank  </b></h2></center>
    <BR>
    <BR>
    <BR>
    <BR>
    <BR>
    <div class="box1" style="left:100px; top:220px">
        <center>
            <a href="https://www.hbtf.com/ar/pages/default.aspx" target="_blank"> <img src="https://s3-eu-west-1.amazonaws.com/static.jbcgroup.com/amd/pictures/d616ca7e6f79c9cd92b1ab92cb7f5cc0.jpg" height="100" width="300" alt="بنك القاهرة عمان(Cairo Amman Bank)" title="بنك القاهرة عمان(Cairo Amman Bank)">  </a>
            <h2>Cairo Amman Bank</h2><BR>
            <div class="button">
                <a href="http://localhost/Cairo1.php"><h3>click here </h3></a>
        </center>
    </div> </div>
    <BR>
    <div class="box1" style="left:500px;top:220px">
        <center>
            <a href="https://www.cab.jo/ar" target="_blank">
                <img src="https://khaberni.b-cdn.net/uploads/news_model/2019/02/main_image5c6176886dc3b.png" height="100" width="300" alt="بنك الإسكان للتجارة والتمويل (Housing Bank)" title="بنك الإسكان للتجارة والتمويل (Housing Bank)">
            </a><h2>Housing Bank</h2><BR>
            <div class="button">
                <a href="http://localhost/housing1.php"><h3>click here </h3></a>
        </center>
    </div> </div> <BR>
    <div class="box1" style="left:900px;top:220px">
        <center>
            <a href="https://www.jordanislamicbank.com/" target="_blank">
                <img src="https://www.arabnak.com/wp-content/uploads/2015/12/%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D8%A7%D8%B3%D9%84%D8%A7%D9%85%D9%8A-%D8%A7%D9%84%D8%A7%D8%B1%D8%AF%D9%86%D9%8A.jpg" height="100" width="300" alt="البنك الإسلامي الأردني (Jordan Islamic Bank)" title="البنك الإسلامي الأردني (Jordan Islamic Bank)">
            </a> <h2>Jordan Islamic Bank</h2> <BR>
            <div class="button">
                <a href="http://localhost/islamic1.php"><h3>click here </h3></a>
        </center>
    </div>
    </div>
</body>
</html>