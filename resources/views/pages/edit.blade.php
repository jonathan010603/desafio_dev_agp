<x-html>
    <main>
        <x-topdiv>
            <span><b>Editar Colaborador #{{ $employee->id }}<br>{{ $employee->fullname }}</b></span>
        </x-topdiv>

        <div class="formContainer d-flex flex-column justify-content-between">
            <x-formErrorWrapper />
            <form action="{{ route('employees.update', $employee) }}" method="POST" class="w-100">
                @csrf
                @method('PUT')
                <x-formFields :employee="$employee" />
                <div class="d-flex flex-row justify-content-between w-100">
                    <a href="{{ route('employees.index') }}"><button class="cancelBtn" type="button">Cancelar</button></a>
                    <button class="saveBtn" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </main>
</x-html>
