@extends('layout.main')

@section('title', 'Criar Evento')
@section('content')

<div id="event-create-container" class="col-md-12 pffset-md-12">
    <h1> Crie um evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Selecione uma imagem para o Evento : </label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="informe um nome para o evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="informe a cidade do evento">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="informe a descrição do evento">
        </div>
        <div class="form-group">
            <label for="title">Informe a data do evento:</label>
            <input type="date" class="form-control" id="" name="" placeholder="informe um nome para o evento">
        </div>
        <div class="form-group">
            <label for="title">Evento e Privado ?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar evento">
    </form>
</div>

@endsection