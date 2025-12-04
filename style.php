 <!DOCTYPE html>
<html>
<head>
 <style>
        body {
            background-color: #ffffff;
            color: black;
        }
        ul { list-style-type: none;
            font-size: 110%;
            margin: 0;
            padding: 0;
            width: 135px;
            background-color: #DB6E00;
            position: fixed;
            height: 100%;
            overflow: 70%;
        }
        li a {
            display: block;
            color: black;
            padding: 8px 5px;
            text-decoration: none;
        }

        li a.active {
            background-color: #385A2A;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: #385A2A;
            color: black;
        }

        h2, h3, p {
            color: black;
        }

        .two {
            background-color: #F9A319;
            color: white;
            width: 100%;
            height: 150px;
        }

        .baixo {
            background-color: #DB6E00;
            height: 25px;
            width: 100%;
        }

        @media (max-width: 768px) {
            ul {
                position: relative;
                width: 100%;
                height: auto;
            }
        }
        img {
        width: 250px;
        height: 130px;
        }
        .img_login {
        width: 150px;
        height: 75px;
        }
        table{
        margin-left: 130px;
        margin-right: 100px;
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 1576px;
        }
        td, th {
        border: 2px solid #dddddd;
        text-align: left;
        padding: 9px;
        }
        tr:nth-child(even) {
        background-color: #dddddd;
        }
        .two_web {
            background-color: #F9A319;
            color: white;
            width: 100%;
            height: 80px;
        }
        .col {
            margin-left: 30%;
            margin-right: 30%;
            margin-top: 30px;
        }
        .testbtn {
        background-color: #418d23ff;
        color: white;
        font-size: 15px;
        padding: 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }

        .testbtn:hover {
        background-color: #385A2A;
        }
    </style>
</head>
</html>
