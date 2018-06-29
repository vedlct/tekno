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
            <td><b>Vector</b></td>
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
            <td>Comments (optional):</td>
            <td>{{$comment}}</td>
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
