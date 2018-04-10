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
            <th style="width: 30%">Job Type</th>
            <th>Website</th>
        </tr>
        <tr>
            <td>Company Name:</td>
            <td>{{$name}}</td>
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
</body>
</html>
