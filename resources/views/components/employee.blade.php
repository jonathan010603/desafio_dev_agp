<div class="employee-div d-flex justify-content-between align-items-center">
    <div class="employeesInfo-div d-flex flex-column align-items-start">
        <span class="name-span"><b>{{ $fullname }}</b></span>
        <span> {{ date('d/m/Y', strtotime($birthdate)) }} </span>
    </div>
    <span>
        <button>Editar</button>
        <button onclick="deleteEmployee({{ $id }}, '{{ $fullname }}')">Excluir</button>
    </span>
</div>
