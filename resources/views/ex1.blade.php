<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio 1</title>
</head>

<body>
    <div style="display: flex; flex-direction: row;">
        @foreach ($pessoas as $pessoa)
            @component('components.ex1comp', $pessoa)
                {{-- @slot('image')
                    {{ $pessoa['image'] }}
                @endslot

                @slot('nome')
                    {{ $pessoa['nome'] }}
                @endslot

                @slot('idade')
                    {{ $pessoa['idade'] }} Anos
                @endslot

                @slot('birth')
                    {{ $pessoa['birth'] }}
                @endslot --}}
            @endcomponent
        @endforeach
    </div>

    <div style="display: flex; flex-direction: row;">
        @foreach ($pessoas as $p)
            @include('components.ex1comp', $p)
        @endforeach
    </div>
</body>

</html>
