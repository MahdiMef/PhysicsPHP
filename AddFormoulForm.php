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
    </script>
</head>
<body>

<form name="myForm" action="AddformoulResult.php" method="post" onsubmit="return validateForm()">
    <br>
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
    <input type="submit" name="btn_submit" value="Submit"
           class="button">

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

        input[type=text] {
            width: 90%;
            padding: 12px 20px;
            margin: 8px 8px;
            border: 1px solid #ccc;
            border-radius: 8px;

        }

        input[type=submit]:hover {
            background-color: #49a000;
        }


    </style>

</form>
</body>
</html>