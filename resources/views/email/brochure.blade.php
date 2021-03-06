<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
        /*body {*/
            /*font-family: 'Tangerine', Lato;*/
            /*font-size: 15px;*/
        /*}*/

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
        <td><b>Brochure</b></td>
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
        <td>Brochure Size</td>
        <td>{{$size}}</td>
    </tr>
    <tr>
        <td>Brochure Pages:</td>
        <td>{{$pages}}</td>
    </tr>
    <tr>
        <td>Company Business Area:</td>
        <td>{{$businessArea}}</td>
    </tr>
    <tr>
        <td>Company Theme Color:</td>
        <td>{{$themeColor}}</td>
    </tr>
    <tr>
        <td>Tagline / Slogan (if any)</td>
        <td>{{$tagline}}</td>
    </tr>
    <tr>
        <td>Brochure Type (description)</td>
        <td>{{$description}}</td>
    </tr>
    <tr>
        <td>Main Focus:</td>
        <td>{{$focus}}</td>
    </tr>
    <tr>
        <td>TText(soft file, which will be live on leaflet):</td>
        <td>{{$TText}}</td>
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
        <td>{{$estimatedTime}}</td>
    </tr>
</table>
    {{--@if($exist==0)--}}
    {{--<h3>Credentials</h3>--}}
    {{--<p> Username : {{$email}}--}}
        {{--<br>--}}
        {{--Password :{{$pass}}--}}

    {{--</p>--}}

    {{--@else--}}
        {{--<h3>Login With Your Previous Credentials</h3>--}}
    {{--@endif--}}

</div>
</body>
</html>
