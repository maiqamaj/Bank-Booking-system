
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
            background: #fafafa
        }

        a {
            text-decoration: none
        }
    </style>
</head>
<body>

    <br>

    <div dir="rtl" align="right">
        <h3>استكمال الأجراءات لحجز موعد في بنك الأسلامي الأردني</h3>
        <h3>خطوة: 2-2 تسجيل البيانات الشخصية</h3>
    </div>
    <br>
    <form method="POST" action="islamicphp.php">
        <fieldset>
            <legend class="in">Personal Information</legend>
            <strong>Your Name</strong>	 <input type="text" id="Name" name="Name" value="" placeholder="ادخل اسمك الثلاثي" required>
            <br> <br>
            <strong>Your National Number</strong>	 <input type="text" id="national_number" name="national_number" value="" placeholder="ادخل رقمك الوطني" required>
            <br><br>
            <strong>Your E-mail</strong>	 <input type="text" id="email" name="email" value="" placeholder="ادخل بريدك الألكتروني" required>
            <br><br>
            <strong>Your Phone Number</strong>	 <input type="text" id="phone_number" name="phone_number" value="" placeholder="ادخل رقم هاتفك" required>
            <br><br>
        </fieldset>
        <br>
        <hr>
        <br>
        <label><b>ملاحظاتكم حول متصفحنا <b></label>
        <br>
        <textarea cols="50" rows="6" name="note" value="" placeholder=" اترك ملاحظتك هنا "></textarea>
        <br><br>
    </form>

    <a href="http://localhost/islamic1.php">  <input class="in" type="button" style="min-width:150px" value="Previous Step"></a>


    <input class="in" type="submit" style="float: right; min-width:150px" value="Appointment Booking"></input >
</body>

</HTML>

