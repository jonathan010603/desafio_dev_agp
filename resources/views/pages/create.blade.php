<x-html>
    <main>
        <x-topdiv>
            <span><b>Novo Colaborador</b></span>
        </x-topdiv>

        <div class="formContainer d-flex flex-column justify-content-between">
            <x-formErrorWrapper />
            <form action="{{ route('employees.store') }}" method="POST" class="w-100">
                @csrf
                <x-formFields />
                <div class="d-flex flex-row justify-content-between w-100">
                    <a href="{{ route('employees.index') }}"><button type="button">Cancelar</button></a>
                    <button type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </main>
</x-html>
