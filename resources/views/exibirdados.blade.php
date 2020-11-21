@include('welcome')

@if(count($lista) == 0)
    <p>Não existem dados na lista</p>
@else
    <p>Existem dados na lista</p>
@endif

@foreach($lista as $item)
    <p>{{ $item }}</p>
@endforeach