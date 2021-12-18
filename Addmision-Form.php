<?php
include("connection.php");
session_start();
error_reporting();

$user = $_SESSION['email'];
if($user == true){

  
}
else{
   // echo"Wrong Name or Password";
    
    header('location: login.php');
    
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <title>Study Application Form a Simple Appointment form Responsive Widget :: w3layouts</title>
    <meta name="keywords" content="Study Application Form Responsive widget, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- stylesheets -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- google fonts  -->

    <!-- Page Title -->
    <title>Shah Abdul Latif University</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">
    <style>
       
        body a {
            color: red;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
            -ms-transition: 0.5s all;
            text-decoration: none;
        }
        
        body a:hover {
            text-decoration: none;
        }
        
        body a:focus,
        a:hover {
            text-decoration: none;
        }
        .heading h1{
            color: #0f0e10;
        }
        .heading{
            color: #fff;
        }
        input[type="button"],
        input[type="submit"] {
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
            -ms-transition: 0.5s all;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
            font-family: 'Josefin Sans', sans-serif;
            /* font-family: 'Lato', sans-serif; */
        }
        
        p {
            margin: 0;
        }
        
        ul {
            margin: 0;
            padding: 0;
        }
        
        li {
            list-style-type: none;
        }
        
        label {
            margin: 0;
        }
        
        a:focus,
        a:hover {
            text-decoration: none;
            outline: none;
        }
        /*-- //Reset-Code --*/
        
    
        
        .heading {
            text-align: center;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }
        
        .heading h1 {
            margin-bottom: 25px;
            text-transform: uppercase;
            font-weight: 500;
        }
        
        .heading h2 {
            font-weight: 400;
        }
        
        .heading p {
            font-size: 16px;
            margin-top: 20px;
        }
        
        .container {
            width: 820px;
            margin: auto;
            padding: 30px 30px 20px;
            box-sizing: border-box;
            background-color: rgb(2, 72, 85);
        }
        
        label.form-label {
            display: inline-block;
            width: 30%;
            font-weight: 400;
            letter-spacing: 1px;
            vertical-align: top;
        }
        
        .form-input {
            display: inline-block;
            width: 69%;
        }
        
        ul.field-list li {
            margin: 15px 0px;
        }
        
        select {
            width: 99%;
            padding: 4px;
            background-color: #fff;
            outline: none;
        }
        
        .dob select {
            width: 33%;
        }
        
        input[type="text"] {
            /*   margin: 15px 0px; */
            padding: 7px 10px;
            box-sizing: border-box;
            background-color: #fff;
            border: none;
            outline: none;
            width: 99%;
            color: #0f0e10;
        }
        
        span.form-sub-label input[type="text"] {
            margin: 10px 0px 20px;
            width: 49%;
        }
        
        span.form-required {
            color: red;
        }
        
        label.form-label1 {
            display: inline-block;
            margin: 15px 0px;
            letter-spacing: 1px;
        }
        
        label.type-of-test {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
            margin-left: 10px;
            letter-spacing: 1px;
            font-weight: 100;
            font-size: 14px;
        }
        
        textarea {
            width: 98%;
            background-color: #fff;
            outline: none;
        }
        
        input[type="submit"] {
            display: block;
            margin: auto;
            padding: 10px 25px;
            margin-top: 25px;
            background-color: #0e075f;
            border: none;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
            outline: 0;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background: #14059e;
            color: white;
        }
        
        input.year {
            width: 31% !important;
            padding: 6px;
        }
        
        input[type="email"] {
            padding: 7px;
            background-color: #fff;
            border: 0;
            width: 95%;
            color: #0f0e10;
            outline: none;
        }
        
        span.form-sub-label {
            position: relative;
        }
        
        label.form-sub-label1 {
            position: absolute;
            bottom: -30px;
            left: 15px;
            min-height: 14px;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
        }
        label, p{
            color: #fff;
        }
        .btn{
            background-color: #24a0ed;
            border: none;
            width: 120px;
            height: 40px;
            border-radius: 5px;
            color: #fff;

        }
        
        input[type="checkbox"] {
            vertical-align: middle;
        }
        
         ::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: #024d88;
        }
        
         ::-moz-placeholder {
            /* Firefox 19+ */
            color: #024d88;
        }
        
         :-ms-input-placeholder {
            /* IE 10+ */
            color: #024d88;
        }
        
         :-moz-placeholder {
            /* Firefox 18- */
            color: #024d88;
        }
        
        .copyright p {
            text-align: center;
            padding: 15px 5px;
            letter-spacing: 1px;
            font-size: 15px;
        }
        
        .copyright a {
            color: #e91e63;
        }
        
        .copyright a:hover {
            color: red;
        }
        /* respoinsive */
        
        @media screen and (max-width: 640px) {
            .container {
                width: 560px;
                margin: auto;
                padding: 30px 15px 20px;
            }
        }
        
        @media screen and (max-width: 600px) {
            .w3ls-banner {
                background-position: 70% center;
            }
            label.type-of-test {
                display: inline-block;
                width: 140px;
            }
        }
        
        @media screen and (max-width: 568px) {
            .container {
                width: 450px;
            }
            label.type-of-test {
                width: 40%;
            }
            label.form-sub-label1 {
                position: absolute;
                bottom: -28px;
                left: 5px;
                font-size: 13px;
                display: block;
            }
        }
        
        @media screen and (max-width: 480px) {
            .container {
                width: 430px;
                padding: 17px 10px 20px;
            }
        }
        
        @media screen and (max-width: 414px) {
            .form-input {
                width: 100%;
            }
            .container {
                width: 350px;
            }
            label.form-label {
                width: 100%;
                margin-bottom: 7px;
            }
            input.year {
                width: 41% !important;
            }
            label.form-sub-label1 {
                bottom: -22px;
                left: 4px;
                font-size: 13px;
                letter-spacing: 1px;
            }
            .heading h2 {
                font-size: 22px;
            }
            .dob select {
                width: 42%;
            }
            select.day {
                width: 47px;
            }
            input[type="email"] {
                width: 95%;
            }
            textarea {
                width: 97%;
            }
        }
        
        @media screen and (max-width: 384px) {
            .heading h1 {
                margin-bottom: 20px;
                font-size: 30px;
            }
        }
        
        @media screen and (max-width: 375px) {
            .container {
                width: 320px;
            }
            label.type-of-test {
                width: 40%;
                margin-left: 5px;
            }
            label.form-sub-label1 {
                bottom: -25px;
            }
            input.year {
                width: 39% !important;
            }
            .heading h2 {
                font-size: 20px;
            }
            .heading p {
                font-size: 15px;
                margin-top: 15px;
            }
            span.form-sub-label input[type="text"] {
                margin: 0px 0px 20px;
            }
        }
        
        @media screen and (max-width: 320px) {
            .heading h1 {
                margin-bottom: 20px;
                font-size: 24px;
            }
            .container {
                width: 270px;
                padding: 15px 5px 15px;
            }
            .heading h2 {
                font-size: 17px;
            }
            .heading p {
                font-size: 13px;
                margin-top: 15px;
            }
            .dob select {
                width: 38%;
            }
            span.form-sub-label input[type="text"] {
                margin: 0px 0px 21px;
                width: 99%;
            }
            input.year {
                width: 40% !important;
                margin-top: 0px !important;
            }
            label.type-of-test {
                width: 36%;
                margin-left: 7px;
                font-size: 14px;
            }
            input[type="email"] {
                width: 93.5%;
            }
            select.day {
                width: 47px !important;
            }
            textarea {
                width: 97%;
            }
            input[type="text"] {
                width: 99%;
            }
            label.form-label1 {
                margin: 8px 0px;
            }
            .copyright p {
                font-size: 14px;
            }
        }
        /* //respoinsive */
        
        .logo {
            width: 100%;
            max-width: 80px;
        }
    </style>
</head>

<body>
    <div class="w3ls-banner">
        <div class="heading">
            <h1>Admission Application Form</h1>
        </div>
        <div class="container">
            <center>
                <a href="index.html">
                    <img src="./images/logo.jpg" class="logo"></a>
            </center> <br>
            <div class="heading">
                <h2>SHAH ABDUL LATIF UNIVERSITY KHAIRPUR<br> Sindh, Pakistan</h2>
                <p>Application Form For Admission in Bachelor's Program Academic Year-2022</p>
            </div>
            <div class="agile-form">
                <form action="/" method="post">
                    <ul class="field-list">
                        <hr>

                        <center>
                            <p>Personal</p>
                        </center>
                        <li>
                            <label class="form-label">  
								Full Name 
								<span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="full_name" placeholder="Candidate Name" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label"> 
								Father Name 
								<span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="father_name" placeholder="Candidate Father Name" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label"> 
								Surname 
								<span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mother_name" placeholder="Candidate Caste" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label"> 
								Guardian's Name<sub>(if other than father)</sub>
								<span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mother_name" placeholder="Candidate Guardian/Father" required>
                            </div>
                        </li>
                        <label class="form-label"> 
                            CNIC.No
                            <span class="form-required"> * </span>
                        </label>
                        <div class="form-input">
                            <input type="text" name="mother_name" placeholder="Candidate CNIC XXXXX-XXXXXXX-X" required>
                        </div>
                        </li>
                        <li>
                            <label class="form-label">
							   Date of Birth
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input dob">
                                <span class="form-sub-label">
									<select name="day" class="day">
										<option>&nbsp;</option>
										
										<option value="1"> 1 </option>
										<option value="2"> 2 </option>
										<option value="3"> 3 </option>
										<option value="4"> 4 </option>
										<option value="5"> 5 </option>
										<option value="6"> 6 </option>
										<option value="7"> 7 </option>
										<option value="8"> 8 </option>
										<option value="9"> 9 </option>
										<option value="10"> 10 </option>
										<option value="11"> 11 </option>
										<option value="12"> 12 </option>
										<option value="13"> 13 </option>
										<option value="14"> 14 </option>
										<option value="15"> 15 </option>
										<option value="16"> 16 </option>
										<option value="17"> 17 </option>
										<option value="18"> 18 </option>
										<option value="19"> 19 </option>
										<option value="20"> 20 </option>
										<option value="21"> 21 </option>
										<option value="22"> 22 </option>
										<option value="23"> 23 </option>
										<option value="24"> 24 </option>
										<option value="25"> 25 </option>
										<option value="26"> 26 </option>
										<option value="27"> 27 </option>
										<option value="28"> 28 </option>
										<option value="29"> 29 </option>
										<option value="30"> 30 </option>
										<option value="31"> 31 </option>
									</select>
									<label class="form-sub-label1"> Day </label>
								</span>
                                <span class="form-sub-label">
									<select name="month">
										<option>&nbsp;</option>
										<option value="January"> January </option>
										<option value="February"> February </option>
										<option value="March"> March </option>
										<option value="April"> April </option>
										<option value="May"> May </option>
										<option value="June"> June </option>
										<option value="July"> July </option>
										<option value="August"> August </option>
										<option value="September"> September </option>
										<option value="October"> October </option>
										<option value="November"> November </option>
										<option value="December"> December </option>
									 </select>
									<label class="form-sub-label1"> Month </label>
								</span>
                                <span class="form-sub-label">
									<input type="text" class="year" name="year" placeholder=" Enter Year" required>
									<label class="form-sub-label1"> Year </label>
								</span>
                            </div>
                        </li>
                        <label class="form-label"> 
                            Religion
                            <span class="form-required"> * </span>
                        </label>
                        <div class="form-input">
                            <input type="text" name="mother_name" placeholder="Candidate Religion" required>
                        </div>
                        </li>
                        <li>
                            <label class="form-label">
							   Gender
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <select class="form-dropdown form-control   " name="gender" required>
									
									<option value="Male" selected> Choose Gender </option>
									<option value="Male"> Male </option>
									<option value="Female"> Female </option>
									
								</select>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							   Email Address
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Enter your Email Address" title="Enter your Same Login Email Address" required>
                            </div>
                        </li>

                        <li>
                            <label class="form-label">
							   Mobile Number
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Candidate Mobile No XXXX-XXXXXXX" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							   Address
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Permanent Address
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Postal Address 
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                District
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                State / Province
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Postal / Zip Code
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="" required>
                            </div>
                        </li>

                        <li>
                            <label class="form-label">
                                Country 
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							  Employed or Not
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Are You Employed any Where (yes/no) if yes Dept" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Candidate Passport Size Photo
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="file" id="img" name="img" accept="image/*" required>
                            </div>
                        </li>

                        <hr>
                        <center>
                            <p>Academic Record S.S.C-II</p>
                        </center>

                        <li>
                            <label class="form-label">
                                Major Subject S.S.C-II<sub></sub>
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Major Subject S.S.C-II" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Year
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Year S.S.C-II (passing year)" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Seat No.
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Seat No S.S.C-II" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Total Marks 
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Total Marks S.S.C-II" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Obtained Marks
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Obtained Marks S.S.C-II" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Class Division
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Class Division/Grade S.S.C-II" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Board/University
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Board/University" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                S.S.C-II Marksheet
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="file" id="img" name="img" accept="image/*" required>
                            </div>
                        </li>
                        <hr>

                        <center>
                            <p>Academic Record H.S.C-II</p>
                        </center>

                        <li>
                            <label class="form-label">
                                Major Subject H.S.C-II<sub></sub>
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Major Subject H.S.C-II" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Year
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Year H.S.C-II (passing year)" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Seat No.
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Seat No H.S.C-II" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Total Marks 
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Total Marks H.S.C-II" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Obtained Marks
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Obtained Marks H.S.C-II" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Class Division
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Class Division/Grade H.S.C-II" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Board/University
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Board/University" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                H.S.C-II Marksheet
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="file" id="img" name="img" accept="image/*" required>
                            </div>
                        </li>
                        <hr>
                        <center>
                            <p>Choose of the Campus and Departements for Admission in the Oder of Preference</p>
                        </center>
                        <li>
                            <label class="form-label">
							  Campus
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <select class="form-dropdown" name="gender" required>
									<option value="">&nbsp;</option>
									<option value="degree"selected> Choose Campus </option> 
									<option value="degree"> Main Campus Khairpur</option>
									<option value="pg">Shikarpur Campus </option>
								</select>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							  Department 1
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <select class="form-dropdown" name="gender" required>
									<option value="">&nbsp;</option>
									<option value="degree"selected> Choose Departement 1</option> 
									<option value="degree"> English </option>
									<option value="pg">Chemistry </option>
									<option value="pg">Physics </option>
									<option value="pg">Math </option>
									<option value="pg">Computer Science </option>
									<option value="pg">information Tecnology </option>
									<option value="pg">IBA </option>
									<option value="pg">Urdu </option>
									<option value="pg">Law </option>
									<option value="pg">COMMERCE </option>
									<option value="pg">PUBLIC ADMINISTRATION</option>
									<option value="pg">PHARMACY </option>
									<option value="pg">MICROBIOLOGY </option>
									<option value="pg">ZOOLOGY </option>
									<option value="pg">BOTANY </option>
									<option value="pg">ARCHAEOLOGY</option>
									<option value="pg">GEOGRAPHY </option>
									<option value="pg">STATISTICS</option>
									<option value="pg">MICROBIOLOGY </option>
									<option value="pg">PAKISTAN STUDIES</option>
									<option value="pg">ECONOMICS </option>
									<option value="pg">ISLAMIC STUDIES </option>
									<option value="pg">POLITICAL SCIENCE </option>
									<option value="pg">MEDIA & COMMUNICATION STUDIES</option>
									
								</select>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							  Department 2
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <select class="form-dropdown" name="gender" required>
									<option value="">&nbsp;</option>
									<option value="degree"selected> Choose Departement 2</option> 
									<option value="degree"> English </option>
									<option value="pg">Chemistry </option>
									<option value="pg">Physics </option>
									<option value="pg">Math </option>
									<option value="pg">Computer Science </option>
									<option value="pg">information Tecnology </option>
									<option value="pg">IBA </option>
									<option value="pg">Urdu </option>
									<option value="pg">Law </option>
									<option value="pg">COMMERCE </option>
									<option value="pg">PUBLIC ADMINISTRATION</option>
									<option value="pg">PHARMACY </option>
									<option value="pg">MICROBIOLOGY </option>
									<option value="pg">ZOOLOGY </option>
									<option value="pg">BOTANY </option>
									<option value="pg">ARCHAEOLOGY</option>
									<option value="pg">GEOGRAPHY </option>
									<option value="pg">STATISTICS</option>
									<option value="pg">MICROBIOLOGY </option>
									<option value="pg">PAKISTAN STUDIES</option>
									<option value="pg">ECONOMICS </option>
									<option value="pg">ISLAMIC STUDIES </option>
									<option value="pg">POLITICAL SCIENCE </option>
									<option value="pg">MEDIA & COMMUNICATION STUDIES</option>
									
								</select>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							  Department 3
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <select class="form-dropdown" name="gender" required>
									<option value="">&nbsp;</option>
									<option value="degree"selected> Choose Departement 3</option> 
									<option value="degree"> English </option>
									<option value="pg">Chemistry </option>
									<option value="pg">Physics </option>
									<option value="pg">Math </option>
									<option value="pg">Computer Science </option>
									<option value="pg">information Tecnology </option>
									<option value="pg">IBA </option>
									<option value="pg">Urdu </option>
									<option value="pg">Law </option>
									<option value="pg">COMMERCE </option>
									<option value="pg">PUBLIC ADMINISTRATION</option>
									<option value="pg">PHARMACY </option>
									<option value="pg">MICROBIOLOGY </option>
									<option value="pg">ZOOLOGY </option>
									<option value="pg">BOTANY </option>
									<option value="pg">ARCHAEOLOGY</option>
									<option value="pg">GEOGRAPHY </option>
									<option value="pg">STATISTICS</option>
									<option value="pg">MICROBIOLOGY </option>
									<option value="pg">PAKISTAN STUDIES</option>
									<option value="pg">ECONOMICS </option>
									<option value="pg">ISLAMIC STUDIES </option>
									<option value="pg">POLITICAL SCIENCE </option>
									<option value="pg">MEDIA & COMMUNICATION STUDIES</option>
									
								</select>
                            </div>
                        </li>
                        <li>
                            <label class="form-label1">
								Course description.
							</label>
                            <div class="form-input2">
                                <textarea rows="5" cols="20" name="textarea"></textarea>

                            </div>
                        </li>
                    </ul>
                    <center>
                    <button class="btn" type="submit" name="submit"> Submit </button>
                    </center>
                </form>
            </div>
        </div>

    </div>
</body>

</html>