<div class="employee-div d-flex justify-content-between align-items-center">
    <div class="employeesInfo-div d-flex flex-column align-items-start">
        <span class="name-span"><b>{{ $employee->fullname }}</b></span>
        <span> {{ date('d/m/Y', strtotime($employee->birthdate)) }} </span>
    </div>
    <span>
        <button>Editar</button>
        <a href="{{ route('employees.remove', ['deleteEmployee' => $employee]) }}">
            <button type="button">Excluir</button>
        </a>
    </span>
</div>
