<x-html>
    <main class="homeContainer-main">
        <x-topBox>
            <span><b>Colaboradores de Ágape soluções</b></span>
            <a href="{{ route('employees.create') }}"><button>Adicionar</button></a>
        </x-topBox>

        <div class="employees-div">
            @foreach ($employees as $employee)
                <x-employee :employee="$employee" />
            @endforeach
        </div>

        @isset($deleteEmployee)
            <x-modalconfirm id="confirmDelete" :employee="$deleteEmployee" doing="Excluindo">
                <form action="{{ route('employees.destroy', $deleteEmployee) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Confirmar</button>
                    </div>
                </form>
            </x-modalconfirm>

            <script>
                $(document).ready(() => $('#confirmDelete').modal('show'));
                $('#confirmDelete').on('hide.bs.modal', () => window.location = '/');
            </script>
        @endisset
    </main>
</x-html>
