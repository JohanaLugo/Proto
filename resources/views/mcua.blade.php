@extends('templates.master')

@section ('header')
@stop

@section ('div')
<h1 style="font-size: 275% ; color: black" align="center">๐ช ๐ฒโ๐ดโ๐ปโ๐ฎโ๐ฒโ๐ฎโ๐ชโ๐ณโ๐นโ๐ดโ ๐จโ๐ฎโ๐ทโ๐จโ๐บโ๐ฑโ๐ฆโ๐ทโ ๐บโ๐ณโ๐ฎโ๐ซโ๐ดโ๐ทโ๐ฒโ๐ชโ๐ฒโ๐ชโ๐ณโ๐นโ๐ชโ ๐ฆโ๐จโ๐ชโ๐ฑโ๐ชโ๐ทโ๐ฆโ๐ฉโ๐ดโ ๐</h1>
@stop

@section ('nav')
<br>
<div class="content-b"><h4>Aceleracion Angular</h4>
<form action="{{route('firme')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="w" class="form-label">W=</label>
        <input type="text" class="round" name="w" id="w" placeholder="Escriba la Velocidad Angular">
    &nbsp &nbsp
        <label for="t" class="form-label">T=</label>
        <input type="text" class="round" name="t" id="t" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Aceleracion Angular 2</h4>
<form action="{{route('form2')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="wf" class="form-label">Velocidad angular final=</label>
        <input type="text" class="round" name="wf" id="wf" placeholder="Escriba la Velocidad Angular Final">
        &nbsp &nbsp
        <label for="wi" class="form-label">Velocidad angular inicial=</label>
        <input type="text" class="round" name="wi" id="wi" placeholder="Escriba la Velocidad Angular Inicial">
     </div>
     <div class="mb-3">
        <label for="t" class="form-label">T=</label>
        <input type="text" class="round" name="t" id="t" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Posicion</h4>
<form action="{{route('form2')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="wf" class="form-label">Velocidad angular final=</label>
        <input type="text" class="round" name="wf" id="wf" placeholder="Escriba la Velocidad Angular Final">
    &nbsp &nbsp
        <label for="wi" class="form-label">Velocidad angular inicial=</label>
        <input type="text" class="round" name="wi" id="wi" placeholder="Escriba la Velocidad Angular Inicial">
    </div>
     <div class="mb-3">
        <label for="t" class="form-label">T=</label>
        <input type="text" class="round" name="t" id="t" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Posicion</h4>
<form action="{{route('form3')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="p" class="form-label">Posicion</label>
        <input type="text" class="round" name="p" id="p" placeholder="Escriba la Posiciรณn">
    &nbsp &nbsp
        <label for="wi" class="form-label">Velocidad angular inicial=</label>
        <input type="text" class="round" name="wi" id="wi" placeholder="Escriba la Velocidad Angular Inicial">
    &nbsp &nbsp
        <label for="t" class="form-label">T=</label>
        <input type="text" class="round" name="t" id="t" placeholder="Escriba el Tiempo">
    </div>
    <div class="mb-3">
        <label for="a" class="form-label">โ=</label>
        <input type="text" class="round" name="a" id="a" placeholder="Escriba la Aceleraciรณn Angular">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Velocidad Angular Final</h4>
<form action="{{route('form4')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="wi" class="form-label">Velocidad angular inicial=</label>
        <input type="text" class="round" name="wi" id="wi" placeholder="Escriba la Velocidad Angular Inicial">
    &nbsp &nbsp
        <label for="t" class="form-label">T=</label>
        <input type="text" class="round" name="t" id="t" placeholder="Escriba el Tiempo">
    &nbsp &nbsp
        <label for="a" class="form-label">โ=</label>
        <input type="text" class="round" name="a" id="a" placeholder="Escriba la Aceleraciรณn Angular">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Velocidad Angular Final</h4>
<form action="{{route('form5')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="wi" class="form-label">Velocidad angular inicial=</label>
        <input type="text" class="round" name="wi" id="wi" placeholder="Escriba la Velocidad Angular Inicial">
    &nbsp &nbsp
        <label for="p" class="form-label">Posicion=</label>
        <input type="text" class="round" name="p" id="p" placeholder="Escriba la Posiciรณn">
    </div>
     <div class="mb-3">
        <label for="a" class="form-label">โ=</label>
        <input type="text" class="round" name="a" id="a" placeholder="Escriba la Aceleraciรณn Angular">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Aceleracion Tangencial</h4>
<form action="{{route('form6')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="ra" class="form-label">r=</label>
        <input type="text" class="round" name="ra" id="ra" placeholder="Escriba el Radio">
    &nbsp &nbsp
        <label for="a" class="form-label">โ=</label>
        <input type="text" class="round" name="a" id="a" placeholder="Escriba la Aceleraciรณn Angular">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<br>
@stop

@section ('footer')
@stop