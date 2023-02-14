<x-html>
    <main>
        <x-topdiv>
            <span><b>Colaboradores de Ágape soluções</b></span>
            <a href="{{ route('employees.create') }}"><button class="bg-light text-primary">Adicionar</button></a>
        </x-topdiv>

        <div class="employeesWrapper">
            @foreach ($employees as $employee)
                <x-employeeCard :employee="$employee" />
            @endforeach
        </div>

        @isset($deleteEmployee)
            <x-modalconfirm id="confirmDelete" :employee="$deleteEmployee" doing="Excluindo">
                <form action="{{ route('employees.destroy', $deleteEmployee) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer justify-content-center">
                        <button class="cancelBtn" type="button" data-bs-dismiss="modal">Cancelar</button>
                        <button class="saveBtn" type="submit">Confirmar</button>
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
