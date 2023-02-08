<x-html>
    <main class="homeContainer-main">
        <x-topBox>
            <span><b>Novo Colaborador</b></span>
        </x-topBox>

        <div class="formContainer-div d-flex flex-column justify-content-between">
            <form action="{{ route('employees.store') }}" method="POST" class="w-100">
                <div class="fullName-div">
                    <label for="fullName">Nome completo</label>
                    <input type="text" id="fullName" name="fullName">
                </div>

                <div class="nickName-div">
                    <label for="nickName">Apelido</label>
                    <input type="text" id="nickName" name="nickName">
                </div>

                <div class="cpf-div">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf">
                </div>

                <div class="birthDate-div">
                    <label for="birthDate">Data Nascimento</label>
                    <input type="text" id="birthDate" name="birthDate">
                </div>

                <div class="role-div">
                    <label for="role">Cargo</label>
                    <input type="text" id="role" name="role">
                </div>
            </form>
            <div class="d-flex justify-content-between">
                <button>Cancelar</button>
                <button>Salvar</button>
            </div>
        </div>
    </main>
</x-html>
