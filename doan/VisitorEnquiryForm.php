<?php
    include_once('layouts/header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>VISITOR FROM</title>
    <style>
        body{
            background: url("./images/hinh34.jfif");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            min-height: 100%;
        }
    </style>
    <script>
        function checkForm() {

            var fullname = document.getElementById("fullname").value;
            var email = document.getElementById("email").value;
            var location = document.getElementById("location").value;
            var enquiry = document.getElementById("enquiry").value;
                let newWin = window.open("", "", "width=400,height=170");
                {
                    newWin.document.write("<h3>Congratulation..!!!<\/h3>");
                    newWin.document.write("<b>Your Name: </b>" + fullname + "</br>");
                    newWin.document.write("<b>Your Email: </b>" + email + "</br>");
                    newWin.document.write("<b>Your are from: </b>" + location + "</br>");
                    newWin.document.write("<b>Your Details Enquiry: </b>" + enquiry + "</br>");
                }
        }
    </script>
</head>
<body>
    <br><br>
    <div align="center">
        <table frame="" bordercolor="#008000" bgcolor="#FFFFFF" cellspacing="0">
            <form>
                <tr>
                    <td colspan="2" align="center">
                        <font color="#FF9900" size=5>VISITOR ENQUIRY FORM</font>
                    </td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td>
                        :<input type="text" name="fullname" id="fullname" required placeholder="your name here">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        :<input type="email" name="email" id="email" required placeholder="youremail@gmail.com">
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        :<input type="radio" name="gender" id="gender" required value="male"> Male
                        <input type="radio" name="gender" id="gender" required value="female"> Female
                    </td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td>
                        :<select name="location" id="location" required>
                            <option value="">--Select your location--</option>
                            <option value="VietNam">VietNam</option>
                            <option value="Malaysia">ThaiLan</option>
                            <option value="Indonesia">Lao</option>
                            <option value="Singapore">UK</option>
                            <option value="Myanmar">USA</option>
                            <option value="China">China</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Please write your enquiry :</td>
                    <td>
                        <textarea name="enquiry" id="enquiry" cols="40" rows="5"
                            placeholder="Type your enquiries here..." required></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" onclick=" checkForm()" value="Submit">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>    
    </div>
</body>
</html>
<?php
    include_once('layouts/footer.php');
?>