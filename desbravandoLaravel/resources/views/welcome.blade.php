@extends('layout.main')

@section('title', 'Bem vindo')
@section('content')
    <h1>testando coisas</h1>
    <img src="/image/82317.jpg" alt="imagem ainda desconhecida">
    @if(10>15)

    <p>maior</p>
    @endif

    <P>nome que esta vindo de rotas e: {{ $nome }} e sua idade e {{ $idade }} e sua profissão er {{ $profissao }}</P>

    @if($nome == 'marilu')
    <p>nome e marilu</p>
    @else
    <p>nome não er marilu</p>
    @endif

    @for($i = 0; $i < count($arr); $i++) <p>desbravando array: {{ $arr[$i] }} indise: {{ $i }}</p>
        @endfor

        @php
        $php = 'execultando codigo php';
        echo "<script>
            alert('estou vivo dentro do laravel')
        </script>"
        @endphp
@endsection
