<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include</title>
</head>

<body>
    <h1>Includes</h1>
    {{-- É possível importar com o @component --}}
    {{-- @component('components.component')
    @endcomponent --}}

    {{-- Ou também com o @include, utilizado com componentes estáticos --}}

    {{-- @includeif somente se ela existir --}}
    @includeif('components.component', ['name' => 'Include IF'])

    {{-- @includeWhen(variável, ...) quando o parâmetro é true, útil para permissões de usuário --}}
    @includeWhen(true, 'components.component', ['name' => 'Include WHEN'])

    {{-- @includeUnless(variável, ...) mesma função do WHEN, porém excludente (senão) --}}
    @includeUnless(false, 'components.component', ['name' => 'Include UNLESS'])

    {{-- @includeFirst(['array de componentes'], ['variáveis']) executa o primeiro do array que existir --}}
    @includeFirst(['components.component2', 'components.component'], ['name' => 'Include FIRST'])
</body>

</html>
