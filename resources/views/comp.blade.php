<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Components</title>
</head>

<body>
    <h1>Components</h1>

    {{-- ao abrir a tag x-comp o blade interpreta como um componente --}}
    {{-- sintaxe base: <x-componente></x-componente> --}}
    <x-comp>
        {{-- Dessa forma o html é executado dentro do componente --}}
        <p>Teste</p>
        <h1>Testando</h1>
    </x-comp>
</body>

</html>
