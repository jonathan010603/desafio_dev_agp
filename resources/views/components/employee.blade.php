<div class="employee-div d-flex justify-content-between align-items-center">
    <div class="employeesInfo-div d-flex flex-column align-items-start">
        <span class="name-span"><b>{{ $fullName }}</b></span>
        <span> {{ date('d/m/Y', strtotime($birthDate)) }} </span>
    </div>
    <span>
        <button>Editar</button>
        <button>Excluir</button>
    </span>
</div>
