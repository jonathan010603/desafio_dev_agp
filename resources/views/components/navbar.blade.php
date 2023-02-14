<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a href="{{ route('employees.index') }}" class="navbar-brand text-light">AGP Soluções</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="/img/hamburger.svg" alt=""></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page"
                        href="{{ route('employees.index') }}">Lista de
                        Colaboradores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('employees.create') }}">Adicionar colaborador</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
