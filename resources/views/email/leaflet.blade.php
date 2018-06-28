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
            <td><b>Leaflet</b></td>
        </tr>
        <tr>
            <td>Company Name:</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Leaflet Size</td>
            <td>{{$size}}</td>
        </tr>
        <tr>
            <td>Company Business Area:</td>
            <td>{{$BusinessArea}}</td>
        </tr>
        <tr>
            <td>Company Website:</td>
            <td>{{$website}}</td>
        </tr>
        <tr>
            <td>Tagline / Slogan (if any):</td>
            <td>{{$tagline}}</td>
        </tr>
        <tr>
            <td>Company Email Address:</td>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <td>Company Phone Number:</td>
            <td>{{$number}}</td>
        </tr>
        <tr>
            <td>Company Address:</td>
            <td>{{$address}}</td>
        </tr>
        <tr>
            <td>Main Focus:</td>
            <td>{{$focus}}</td>
        </tr>
        <tr>
            <td>Text (soft file, which will be live on leaflet):</td>
            <td>{{$TextSoftFile}}</td>
        </tr>
        <tr>
            <td>Company social media urls. (if any):</td>
            <td>{{$mediaUrl}}</td>
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
