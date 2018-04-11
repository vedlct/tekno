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
            <td>Vector</td>
        </tr>
        <tr>
            <td>Company Name:</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Comments (optional):</td>
            <td>{{$comment}}</td>
        </tr>

    </table>
</div>
</body>
</html>
