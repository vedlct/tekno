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
            <td><b>Website</b></td>
        </tr>
        <tr>
            <td>Company Name:</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Company Email:</td>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td>{{$number}}</td>
        </tr>
        <tr>
            <td>Website Type:</td>
            <td>{{$type}}</td>
        </tr>
        <tr>
            <td>Business Detail:</td>
            <td>{{$businessDetail}}</td>
        </tr>
        <tr>
            <td>Number Of Page:</td>
            <td>{{$NumberOfPages}}</td>
        </tr>
        <tr>
            <td>Portfolio Page:</td>
            <td>{{$portfolioPage}}</td>
        </tr>
        <tr>
            <td>Website Content Management:</td>
            <td>{{$ContentManage}}</td>
        </tr>
        <tr>
            <td>Reference Website:</td>
            <td>{{$reference}}</td>
        </tr>
        <tr>
            <td>Social Media URLs:</td>
            <td>{{$mediaUrl}}</td>
        </tr>
        <tr>
            <td>Existing Website (if any):</td>
            <td>{{$ExistingWeb}}</td>
        </tr>
        <tr>
            <td>Other Comments (if any):</td>
            <td>{{$comment}}</td>
        </tr>
        <tr>
            <td>Estimated Development Time:</td>
            <td>{{$EstimatedTime}}</td>
        </tr>
    </table>
</div>
@if($exist==0)
    <h3>Credentials</h3>
    <p> Username : {{$email}}
        <br>
        Password :{{$pass}}
    </p>
@else
    <h3>Login With Your Previous Credentials</h3>
@endif
</body>
</html>
