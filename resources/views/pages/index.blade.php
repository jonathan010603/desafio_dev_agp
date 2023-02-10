<x-html>
    <main class="homeContainer-main">
        <x-topBox>
            <span><b>Colaboradores de Ágape soluções</b></span>
            <a href="{{ route('employees.create') }}"><button>Adicionar</button></a>
        </x-topBox>

        <div class="employees-div">
            @foreach ($employees as $employee)
                <x-employee id="{{$employee->id}}" fullname="{{ $employee->fullname }}" birthdate="{{ $employee->birthdate }}" />
            @endforeach
        </div>
    </main>
</x-html>
