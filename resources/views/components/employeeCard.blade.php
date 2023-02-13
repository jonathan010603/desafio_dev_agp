<div class="employeeCard d-flex justify-content-between align-items-center">
    <div class="d-flex flex-column align-items-start">
        <span class="name-span"><b>{{ $employee->fullname }}</b></span>
        <span> {{ date('d/m/Y', strtotime($employee->birthdate)) }} </span>
    </div>
    <span>
        <a href="{{ route('employees.edit', $employee) }}">
            <button class="editBtn bg-primary text-light" type="button">Editar</button>
        </a>
        <a href="{{ route('employees.remove', ['deleteEmployee' => $employee]) }}">
            <button class="deleteBtn bg-danger text-light" type="button">Excluir</button>
        </a>
    </span>
</div>
