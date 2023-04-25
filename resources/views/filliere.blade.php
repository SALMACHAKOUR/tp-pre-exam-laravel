<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>filiere</td>
            <td>{{$filiere}}</td>
        </tr>
        <tr>
            <td>formation</td>
            <td>{{$formation}}</td>
        </tr>
        <tr>
            <td>stagiaire</td>
            {{-- @if(isset($stagiaire))
                <td>{{$stagiaire}}</td>
            @else
                <td>{{date("Y")}}</td>
            @endif --}}
            <td>{{$stagiaire ?? date("Y")}}</td>
        </tr>
        <tr>
            <td>groupe</td>
            <td>{{$groupe}}</td>
        </tr>
    </table>
</body>
</html>