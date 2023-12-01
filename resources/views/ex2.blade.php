<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 2</title>
</head>

<body>
    <div style="display: flex;">
        @for ($i = 1; $i <= 50; $i++)
            @component('components.ex2comp')
                @slot('img')
                    {{ $url . $i }}
                @endslot
            @endcomponent
        @endfor
    </div>
</body>

</html>
