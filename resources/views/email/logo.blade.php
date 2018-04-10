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
            <tr style="width: 30%">Job Type</tr>
            <tr>Logo</tr>
        </tr>
        <tr>
            <td>Company Name:</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Logo Shape:</td>
            <td>{{$logoShape}}</td>
        </tr>

        <tr>
            <td>Prefered Color:</td>
            <td>{{$preferedColor}}</td>
        </tr>
        <tr>
            <td>Business Type:</td>
            <td>{{$businessType}}</td>
        </tr>
        <tr>
            <td>Other comments:</td>
            <td>{{$comment}}</td>
        </tr>

    </table>
</div>
</body>
</html>
