<nav class="navbar bg-dark w-100">
    <div class="d-flex justify-content-between">
        <a href="{{ route('employees.index') }}" class="navbar-brand text-light">AGP Soluções</a>
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0 flex-row justify-content-between">
            <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="{{ route('employees.index') }}">Lista de Colaboradores</a>
            </li>
            <li class="nav-item ms-4">
                <a class="nav-link text-light" href="{{ route('employees.create') }}">Adicionar colaborador</a>
            </li>
        </ul>
    </div>
</nav>
