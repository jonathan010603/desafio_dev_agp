<x-html>
    <main>
        <x-topBox>
            <span><b>Editar Colaborador #{{ $employee->id }}<br>{{ $employee->fullname }}</b></span>
        </x-topBox>

        <div class="formContainer d-flex flex-column justify-content-between">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('employees.update', $employee) }}" method="POST" class="w-100">
                @csrf
                @method('PUT')
                <div class="formContainer__fields">
                    <div class="fullname-div">
                        <label for="fullname">Nome Completo</label>
                        <input type="text" id="fullname" name="fullname" value="{{ $employee->fullname }}" required
                            oninput="fullnameCleaner(this)">
                    </div>

                    <div class="nickname-div">
                        <label for="nickname">Apelido</label>
                        <input type="text" id="nickname" name="nickname" value="{{ $employee->nickname }}" required
                            oninput="nicknameCleaner(this)">
                    </div>

                    <div class="cpf-div">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" value="{{ $employee->cpf }}" required
                            minlength="14" maxlength="14" oninput="cpfMask(this)">
                    </div>

                    <div class="birthdate-div">
                        <label for="birthdate">Data de Nascimento</label>
                        <input type="date" id="birthdate" name="birthdate" maxlength="10"
                            value="{{ $employee->birthdate }}" required>
                    </div>

                    <div class="role-div">
                        <label for="role">Cargo</label>
                        <input type="text" id="role" name="role" value="{{ $employee->role }}" required
                            oninput="roleCleaner(this)">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between w-100">
                    <a href="{{ route('employees.index') }}"><button type="button">Cancelar</button></a>
                    <button type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </main>
</x-html>
