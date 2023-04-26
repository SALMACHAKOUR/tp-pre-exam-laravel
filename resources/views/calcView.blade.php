<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/calculer" method="POST">
        @csrf
        <input type="text" name="number1" placeholder={{request() -> number1 ?? "number 1"}}>
        <select name="opr">
            <option value="-" {{"-" == (request() -> opr ?? "+") ? "selected" : ""}}>-</option>
            <option value="+" {{"+" == (request() -> opr ?? "+") ? "selected" : ""}}>+</option>
            <option value="/" {{"/" == (request() -> opr ?? "+") ? "selected" : ""}}>/</option>
            <option value="*" {{"*" == (request() -> opr ?? "+") ? "selected" : ""}}>*</option>
        </select>
        <input type="text" name="number2" placeholder={{request() -> number2 ?? "number 2"}}>
        <input type="submit" value="ok">
    </form>
    le résultat : {{request() -> res ?? 0}}
</body>
</html>