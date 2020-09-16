<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8">
        <title> Jordan Islamic Bank </title>
        <style>
            body {
                background-color: #f5f5f5;
                border: 10px solid #8b1f01;
                padding: 5px
            }

            .in {
                background: #8b1f01;
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
    </head>
    <body>

        <center><h1>Jordan Islamic Bank </h1></center>
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

        <form  method="POST" action="islamic2.php">
            <fieldset>
                <legend class="in">Booking Information</legend>

                <strong><span style="color: #d61209">*</span>Choose your branch</strong>
               
                <label for="branch"></label>
                <input dir="ltr" align="right" placeholder="الرجاء اختيار الفرع" list="Branch" id="branch" name="branch" />
                <datalist id="Branch">
                    <option value="فرع ابو نصير">
                    <option value="فرع البيادر">
                    <option value="فرع الجبيهة">
                    <option value="فرع الجيزة">
                    <option value="فرع الشميساني">
                    <option value="فرع الصويفية">
                    <option value="فرع اللويبدة">
                    <option value="فرع المدينة الرياضية">
                    <option value="فرع المستشفى الاسلامي">
                    <option value="فرع الوحدات">
                    <option value="فرع تلاع العلي">
                    <option value="فرع جبل التّاج">
                    <option value="فرع جبل الحسين">
                    <option value="فرع جبل النزهة">
                    <option value="فرع جبل النصر">
                    <option value="فرع جبل عمان">
                    <option value="فرع حي نزال">
                    <option value="فرع خلدا">
                    <option value="فرع سحاب">
                    <option value="فرع سقف السيل">
                    <option value="فرع شارع الحرية">
                    <option value="فرع شارع عبدالله غوشة">
                    <option value="فرع صويلح">
                    <option value="فرع ضاحية الياسمين">
                    <option value="فرع طارق طبربور">
                    <option value="فرع عبدون">
                    <option value="فرع عمان">
                    <option value="فرع عين الباشا">
                    <option value="فرع ماركا الجنوبية">
                    <option value="فرع ماركا الشمالية">
                    <option value="فرع مرج الحمام">
                    <option value="فرع ناعور">
                    <option value="مكتب الاستقلال مول">
                    <option value="مكتب الجبيهة">
                    <option value="مكتب المدينة الصناعية - سحاب">
                    <option value="مكتب المرج">
                    <option value="مكتب ضاحية الرشيد">
                    <option value="مكتب عمان مول ( سي تاون )">
                    <option value="مكتب وادي السير">

                </datalist>
                <br><br>

                <strong><span style="color: #d61209">*</span>The Service</strong>
                <label for="service"></label>
                <input placeholder="الرجاء إختيار الخدمة" list="Service" id="service" name="service" />
                <datalist id="Service">
                    <option value="السحب والايداع">
                    <option value="صرف شيكات">
                    <option value="خدمه العملاء">
                    <option value="البطاقات الائتمانيه">

                </datalist>
                <br><br>
                <strong><span style="color: #d61209">*</span>The Date</strong>
                <input type="date" name="date" id ="date" value="" placeholder="الرجاء إختيار التاريخ" >
                <br><br>
                <strong><span style="color: #d61209">*</span>The Time</strong>
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
            <br>
             <a href="http://localhost/bankbookingsystem.php"> <input type="button" class="in" style="min-width:80px" value="Back"></a>
        <a href="http://localhost/islamic2.php"><input type="submit" class="in" style="float: right; min-width:80px" value="Next Step"></input ></a>
        </form>
        <br>

       
    </body>
    </HTML>