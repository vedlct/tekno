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
            <td>Banner</td>
        </tr>
        <tr>
            <td>Company Name:</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Banner Size</td>
            <td>{{$size}}</td>
        </tr>
        <tr>
            <td>Headline(if ready):</td>
            <td>{{$Headline}}</td>
        </tr>
        <tr>
            <td>Company Business Area:</td>
            <td>{{$BusinessArea}}</td>
        </tr>
        <tr>
            <td>Banner Type:</td>
            <td>{{$BannerType}}</td>
        </tr>
        <tr>
            <td>Comments (optional):</td>
            <td>{{$comment}}</td>
        </tr>


        <tr>
            <td>Text (soft file, which will be live on leaflet):</td>
            <td>{{$TextSoftFile}}</td>
        </tr>

        <tr>
            <td>References (if any):</td>
            <td>{{$reference}}</td>
        </tr>
        <tr>
            <td>Estimated Time:</td>
            <td>{{$EstimatedTime}}</td>
        </tr>
    </table>
</div>
</body>
</html>
