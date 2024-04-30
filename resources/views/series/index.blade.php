{{-- View com exibição das séries cadastradas no database e opção de incluir nova série --}}
<x-layout title="Séries">

    <a href="/series/create" class="btn btn-outline-primary mb-2" >Nova série</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>

</x-layout>
