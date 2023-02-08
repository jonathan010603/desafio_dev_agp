<x-bootstrap>
    <main class="homeContainer-main">
        <div class="topBox-div d-flex align-items-center justify-content-between">
            <span><b>Colaboradores de Agape solucöes</b></span>
            <button>Adicionar</button>
        </div>

        <div class="employees-div">
            @foreach ($employees as $employee)
                <x-employee fullName="{{ $employee->fullName }}" birthDate="{{ $employee->birthDate }}" />
            @endforeach
        </div>
    </main>
</x-bootstrap>
