<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 60%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th{
            text-align: center;
        }

        /*tr:nth-child(even) {*/
            /*background-color: #dddddd;*/
        /*}*/
    </style>
</head>
<body>


<div align="center">
    <table>
        <tr>
            <td style="width: 30%">Job Type</td>
            <td>Corporate-CI</td>
        </tr>
        <tr>
            <td>Company Name:</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Company Official Email Address:</td>
            <td>{{$mail}}</td>
        </tr>

        <tr>
            <td>Company Business Area:</td>
            <td>{{$BusinessArea}}</td>
        </tr>
        <tr>
            <td>Company Theme Color:</td>
            <td>{{$themeColo}}</td>
        </tr>
        <tr>
            <td>Company Phone number:</td>
            <td>{{$number}}</td>
        </tr>
        <tr>
            <td>Company Address:</td>
            <td>{{$address}}</td>
        </tr>
        <tr>
            <td>Company Official Email Address:</td>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <td>Name and Designation for visiting cards:</td>
            <td>{{$designation}}</td>
        </tr>
        <tr>
            <td>QR CODE:</td>
            <td>{{$qr}}</td>
        </tr>
        <tr>
            <td>CI Types:</td>
            <td>{{$ciType}}</td>
        </tr>
        <tr>
            <td>Estimated Time:</td>
            <td>{{$EstimatedTime}}</td>
        </tr>
    </table>
</div>
</body>
</html>
