<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> Cairo Amman Bank </title>
    <style>
        body {
            background-color: #f5f5f5;
            border: 10px solid #274f05;
            padding: 5px
        }

        .in {
            background: #274f05;
            padding: 7px;
            border: 2px outset #fafafa;
            color: #fafafa
        }

        fieldset {
            background: #fafafa;
        }

        a {
            text-decoration: none
        }
    </style>
    <script>

    </script>
</head>
<body>
    <center><h1> Cairo Amman Bank </h1></center>
    <div dir="rtl" align="right">
        <h2> احجز موعدك قبل زيارة الفرع بأتباع الخطوات التالية</h2>
        <ol style=" color:#d61209 ;">
            <li> اولا عليك الألتزام بكافه الشروط </li>
            <li> لا يسمح للعميل حجز أكثر من دور واحد  </li>
            <li> وجب عليك احضار رقم الحجز وألا سيتم الغاء طلبك </li>
            <br>

            <ul style=" color:#000 ;">
                <li>أدخل بياناتك الشخصية </li>
                <li>ادخل فرعك الذي تتعامل معه </li>
                <li>أدخل تفاصيل الموعد </li>
                <li>اختر الوقت المناسب مع اليوم الذي تريده </li>
                <li>عليك التواجد بالبنك قبل 10 الى 20 دقيقه من موعدك المحدد ومن ثم أدخل رقم الحجز </li>
        </ol>
        </ul>
        <h3>خطوة: 2-1 تسجيل البيانات الشخصية</h3>
    </div>
    <form >
        <fieldset>
            <legend class="in">Booking Information</legend>

            <strong>Choose your branch</strong>
            <label for="branch"></label>
            <input dir="ltr" align="right" placeholder="الرجاء اختيار الفرع" list="Branch" id="branch" name="branch" />
            <datalist id="Branch">
                <option value="فرع الشميساني">
                <option value="فرع القويسمه">
                <option value="فرع مرج الحمام">
                <option value="فرع شارع مكه">
                <option value="فرع ضاحية الياسمين">
                <option value="فرع عمان">
                <option value="فرع فندق الماريوت">
                <option value="فرع ماركا">
                <option value="فرع مستشفى الجامعة الأردنية">
                <option value="فرع صويلح">
                <option value="فرع أبو علندا">
                <option value="فرع أسواق السلام">
                <option value="فرع ابو نصير">
                <option value="فرع البيادر">
                <option value="فرع الرابية">
                <option value="فرع السيتي مول">
                <option value="فرع الصويفية">
                <option value="فرع العبدلي">
                <option value="فرع المحطة">
                <option value="فرع النزهة">
                <option value="فرع الهاشمي الشمالي">
                <option value="فرع الوحدات">
                <option value="فرع ام اذينة">
                <option value="فرع جبل الحسين">
                <option value="فرع جبل اللويبده">
                <option value="فرع جبل عمان">
                <option value="فرع خلدا">
                <option value="فرع زارا مول">
                <option value="فرع شارع الحرية">
                <option value="فرع شارع المدينة المنورة">
                <option value="فرع طبربور">
                <option value="فرع عبدون">
                <option value="فرع قصر العدل">
                <option value="فرع مستشفى الامير حمزه">
                <option value="فرع مكة مول">
                <option value="فرع وادي صقره">
                <option value="مكتب جمرك عمان">
                <option value="مكتب كوزمو">

            </datalist>
            <br>
            <div class="word-spacing: 800px" >
                <br>
            </div>
            <strong>The Service</strong>
            <label for="service"></label>
            <input placeholder="الرجاء إختيار الخدمة" list="Service" id="service" name="service" />
            <datalist id="Service">
                <option value="السحب والايداع">
                <option value="صرف شيكات">
                <option value="خدمه العملاء">
                <option value="البطاقات الائتمانيه">

            </datalist>
            <br><br>
            <strong>The Date</strong>
            <input type="date" name="date" value="" id ="date" placeholder="الرجاء إختيار التاريخ" >
            <br><br>
            <strong>The Time</strong>
            <label for="time"></label>
            <input placeholder="الرجاء إختيار الوقت" list="Time" id="time" name="time" type="time" />

            <datalist id="Time">

                <option value="10:00">
                <option value="10:15">
                <option value="10:30">
                <option value="10:45">
                <option value="11:00">
                <option value="11:15">
                <option value="11:30">
                <option value="11:45">
                <option value="12:30">
                <option value="12:45">
                <option value="13:00">
                <option value="13:15">
                <option value="13:30">
                <option value="13:45">
                <option value="14:00">
                <option value="14:15">
                <option value="14:30">
                <option value="14:45">

            </datalist>
        </fieldset>
    </form>
    <br>

    <a href="http://localhost/bankbookingsystem.php"> <input class="in" type="button" style="min-width:80px" value="Back"></a>
    <a href="http://localhost/Cairo2.php" ><input type="submit" class="in" style="float: right; min-width:80px"  value="Next Step" ></input ></a>
</body>
</HTML>