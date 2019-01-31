<html>
<title>Add formoul form </title>
<head>
    <script>
        function validateForm() {
            var T = document.forms["myForm"]["title"].value;
            var C = document.forms["myForm"]["content"].value;
            var I = document.forms["myForm"]["image"].value;
            var CL = document.forms["myForm"]["class"].value;

            if (T != "" && C != "" && I != "" && CL != "") {
                return true;
            } else {
                alert("##### فیلد ها نباید خالی باشد ####");
                return false
            }
        }

        function Clear() {
            document.getElementById("myForm").reset();
        }
    </script>
</head>
<body>
<div align="right">
    <button class="button2" onclick="window.location.href='/PhysicsPHP/getFormoul.php'">get Formoul</button>
    <button class="button2" onclick="window.location.href='/PhysicsPHP/htmlJson.php'">Database</button>
</div>

<form name="myForm" id="myForm" action="AddformoulResult.php" method="post" onsubmit="return validateForm()">

    formoul title : <br>
    <input type="text" name="title"><br>
    formoul content : <br>
    <input type="text" name="content"><br>
    image formoul: <br>
    <input type="text" name="image">
    <br>
    class: <br>
    <input type="text" name="class">
    <br>
    <br>
    <input type="submit" name="btn_submit" value="Save Formoul" class="button">
    <input type="button" name="clear" value="clear" class="button3" onclick="Clear()">
    <br>

    <style>
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            height: 45px;
            width: 150px;
            border-radius: 25px;
        }

        .button2 {
            background-color: #4466af;
            border: none;
            color: white;
            text-align: center;
            font-size: 16px;
            margin: 3px 3px;
            height: 35px;
            width: 120px;
            border-radius: 25px;

        }

        .button3 {
            background-color: #af5744;
            border: none;
            color: white;
            text-align: center;
            float: right;
            font-size: 16px;
            margin: 4px 2px;
            height: 35px;
            width: 120px;
            border-radius: 25px;
        }

        input[type=text] {
            width: 90%;
            padding: 12px 20px;
            margin: 8px 8px;
            border: 2px solid #ccc;
            border-radius: 8px;
        }

        input[type=submit]:hover {
            background-color: #5dd600;
        }

        input[class=button2]:hover {
            background-color: #0a00d6;
        }

        input[type=button]:hover {
            background-color: #ff0019;
        }

        div {
            background: #07d6a0;
        }
    </style>

</form>

</body>
</html>