<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

        <meta charset="utf-8">
        <title> Housing Bank </title>
        <style>
            body {
                background-color: #f5f5f5;
                border: 10px solid #1e156d;
                padding: 5px
            }

            .in {
                background: #1e156d;
                padding: 7px;
                border: 2px outset #fff;
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

        <center><h1>Housing Bank </h1></center>
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
        <form method="POST" action="housing2.php">
            <fieldset>
                <legend class="in">Booking Information</legend>

                <strong><span style="color: #d61209">*</span>Choose your branch</strong>
                <label for="branch"></label>
                <input dir="ltr" align="right" placeholder="الرجاء اختيار الفرع" list="Branch" id="branch" name="branch" required/>
                <datalist id="Branch">
                    <option value="فرع شارع المطار">
                    <option value="مكتب حي الروابي ">
                    <option value="مكتب العبدلي مول">
                    <option value="فرع دابوق">
                    <option value="فرع المركز الرئيسي">
                    <option value="فرع العبدلي">
                    <option value="فرع جبل الحسين">
                    <option value="فرع النزهة">
                    <option value="فرع السلام">
                    <option value="فرع جبل عمان">
                    <option value="فرع المدينة">
                    <option value="فرع شارع الامير محمد">
                    <option value="فرع الحاووز">
                    <option value="فرع رأس العين">
                    <option value="فرع شارع عرار">
                    <option value="فرع المجمع التجاري">
                    <option value="فرع المدينة الرياضية">
                    <option value="فرع الجاردنز">
                    <option value="فرع الرابية">
                    <option value="فرع المدينة المنورة">
                    <option value="فرع تلاع العلي">
                    <option value="فرع الجبيهة">
                    <option value="فرع ابو نصير">
                    <option value="فرع شارع المدينة الطبية">
                    <option value="فرع سيتي مول">
                    <option value="فرع البيادر">
                    <option value="مكتب ضاحيه الامير راشد">
                    <option value="فرع عبدالله غوشه">
                    <option value="فرع الاطفال">
                    <option value="فرع شارع مكة">
                    <option value="فرع ام اذينه">
                    <option value="فرع ام السماق">
                    <option value="فرع جاليريا مول/الصويفية">
                    <option value="فرع بارك بلازا">
                    <option value="فرع عبدون">
                    <option value="فرع حديقة بنك الاسكان /عبدون">
                    <option value="فرع تاج مول">
                    <option value="فرع الخدمات المصرفية الخاصة">
                    <option value="فرع زهران">
                    <option value="فرع دير غبار ">
                    <option value="فرع الهاشمي الشمالي">
                    <option value="فرع طارق">
                    <option value="فرع ماركا">
                    <option value="فرع حي الامير حسن">
                    <option value="فرع الاشرفية">
                    <option value="فرع الوحدات">
                    <option value="مكتب مجمع انطلاق السفريات الخارجية ">
                    <option value="فرع حي نزال">
                    <option value="فرع ضاحية الياسمين">
                    <option value="فرع القويسمه">
                    <option value="فرع شارع الحرية">
                    <option value="فرع الاذاعة">
                    <option value="فرع أبو علندا">
                    <option value="فرع الجويدة">
                    <option value="فرع سحاب">
                    <option value="فرع السوق المركزي">
                    <option value="فرع الموقر">
                    <option value="فرع مدينة الملك عبدالله الثاني">
                    <option value="فرع مرج الحمام">
                    <option value="فرع ناعور">
                    <option value="فرع المطار">
                    <option value="فرع الجيزة">
           
 
                </datalist>
                <br><br>

                <strong><span style="color: #d61209">*</span>The Service</strong>
                <label for="service"></label>
                <input placeholder="الرجاء إختيار الخدمة" list="Service" id="service" name="service" required/>
                <datalist id="Service">
                    <option value="السحب والايداع">
                    <option value="صرف شيكات">
                    <option value="خدمه العملاء">
                    <option value="البطاقات الائتمانيه">

                </datalist>
                <br><br>
                <strong><span style="color: #d61209">*</span>The Date</strong>
                <input type="date" name="date" id ="date" value="" placeholder="الرجاء إختيار التاريخ" required>
                <br><br>
                <strong><span style="color: #d61209">*</span>The Time</strong>
                <label for="time"></label>
                <input placeholder="الرجاء إختيار الوقت" list="Time" id="time" name="time" type="time" required/>

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
        <a href="http://localhost/housing2.php"><input type="submit" class="in" style="float: right;min-width:80px" value="Next Step"></input ></a>
        </form>
        
       
    </body>
    </HTML>  
