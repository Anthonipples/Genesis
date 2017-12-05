<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>Genesis</title>
    <style>

        .file {
            position: relative;
            width:225px;
        }
        .file label {
            background: #39D2B4;
            padding: 5px 20px;
            color: #fff;
            font-weight: bold;
            font-size: .9em;
            transition: all .4s;
        }

        .file input:hover + label,
        .file input:focus + label {
            background: #77a22f;
            color: #fff;
        }



        /* Useless styles, just for demo styles */

        body {
            font-family: "Open sans", "Segoe UI", "Segoe WP", Helvetica, Arial, sans-serif;
            color: #77a22f;
            background: #FCFDFD;
        }
        h1, h2 {
            margin-bottom: 5px;
            font-weight: normal;
            text-align: center;
            color:#aaa;
        }
        h2 {
            margin: 5px 0 2em;
            color: #77a22f;
        }
        form {
            width: 225px;
            margin: 0 auto;
            text-align:center;
        }
        h2 + P {
            text-align: center;
        }
        .txtcenter {
            margin-top: 4em;
            font-size: .9em;
            text-align: center;
            color: #aaa;
        }
        .copy {
            margin-top: 2em;
        }
        .copy a {
            text-decoration: none;
            color: #1ABC9C;
        }
        .logo{
            width:500px;
            margin-right:auto;
            margin-left:auto;
        }
        .submit{
            background: #77a22f;
            width: 100%;
            border: none;
            font-weight: bold;
            color: #fff;
            height: 30px;
            font-size: larger;
            margin-top:25px;
        }
        .upload{
            width:100%;
            height:25px;
        }
    </style>

</head>
<body>
<div class="logo"><img src="logo.png"/>></div>
<h1>Welcome to Genesis</h1>
<h2>Please upload your CSV file</br> containing one column of names</h2>

<form action="genders.php" method="post" enctype="multipart/form-data">
    <div class="file">
        <input type="file" name="file" id="file" class="upload" size="100"/>
        <input type="submit" name="submit" class="submit">
    </div>
</form>

<p class="txtcenter">When Genesis is done processing </br> A list of male or female values will be </br>displayed in the order of your CSV</p>
<p class="txtcenter copy">by <a href="https://github.com/Anthonipples">Anthony Lombard</a><br /></p>

</body>




</html>
