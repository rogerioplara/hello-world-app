<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo!</title>
</head>

<body>
    {{-- <h1>Bem Vindo, {{ $nome }}</h1> --}}
    {{-- <h2>1 + 1 e: {{ 1 + 1 }}</h2>
    {{-- <h3>O código é: Hífens são comentários }}</h3> --}}

    {{-- @if ($nome == 'Rogerio')
        <h1>Sim</h1>
    @elseif ($nome == 'Jaguara')
        <h1>Não</h1>
    @else
        <h1>Não é ninguém</h1>
    @endif

    @for ($i = 0; $i <= 10; $i++)
        <p>O valor de I é {{ $i }}</p>
    @endfor --}}

    {{-- <h1>Receita de bolo</h1>
    @foreach ($ingredientes as $ing)
        <p>
            {{ $ing }} -
            @component('components.botao')
                @slot('cor')
                    blue
                @endslot
                @slot('href')
                    http://google.com.br
                @endslot

                Editar
            @endcomponent

            @component('components.botao')
                @slot('cor')
                    red
                @endslot
                @slot('href')
                    http://globo.com
                @endslot

                Deletar
            @endcomponent
        </p>
    @endforeach --}}


</body>

</html>
