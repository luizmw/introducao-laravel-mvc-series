<x-layout title="Nova Série">

    <form action="/series/salvar" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome da série</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <input type="submit" name="enviar" id="enviar" value="Adicionar" class="btn btn-primary">
    </form>
    
</x-layout>
