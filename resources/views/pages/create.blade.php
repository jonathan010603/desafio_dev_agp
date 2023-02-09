<x-html>
    <main class="homeContainer-main">
        <x-topBox>
            <span><b>Novo Colaborador</b></span>
        </x-topBox>

        <div class="formContainer-div d-flex flex-column justify-content-between">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('employees.store') }}" method="POST" class="w-100">
                @csrf
                <div class="formField-div">
                    <div class="fullname-div">
                        <label for="fullname">Nome Completo</label>
                        <input type="text" id="fullname" name="fullname" value="{{ old('fullname') }}" required
                            oninput="fullnameCleaner(this)">
                    </div>

                    <div class="nickname-div">
                        <label for="nickname">Apelido</label>
                        <input type="text" id="nickname" name="nickname" value="{{ old('nickname') }}" required
                            oninput="nicknameCleaner(this)">
                    </div>

                    <div class="cpf-div">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}" required
                            minlength="14" maxlength="14" oninput="cpfMask(this)">
                    </div>

                    <div class="birthdate-div">
                        <label for="birthdate">Data de Nascimento</label>
                        <input type="date" id="birthdate" name="birthdate" maxlength="10"
                            value="{{ old('birthdate') }}" required>
                    </div>

                    <div class="role-div">
                        <label for="role">Cargo</label>
                        <input type="text" id="role" name="role" value="{{ old('role') }}" required
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
    <script>
        function mascaraData(val) {
            var pass = val.value;
            var expr = /[0123456789]/;

            for (i = 0; i < pass.length; i++) {
                // charAt -> retorna o caractere posicionado no índice especificado
                var lchar = val.value.charAt(i);
                var nchar = val.value.charAt(i + 1);

                if (i == 0) {
                    // search -> retorna um valor inteiro, indicando a posição do inicio da primeira
                    // ocorrência de expReg dentro de instStr. Se nenhuma ocorrencia for encontrada o método retornara -1
                    // instStr.search(expReg);
                    if ((lchar.search(expr) != 0) || (lchar > 3)) {
                        val.value = "";
                    }

                } else if (i == 1) {

                    if (lchar.search(expr) != 0) {
                        // substring(indice1,indice2)
                        // indice1, indice2 -> será usado para delimitar a string
                        var tst1 = val.value.substring(0, (i));
                        val.value = tst1;
                        continue;
                    }

                    if ((nchar != '/') && (nchar != '')) {
                        var tst1 = val.value.substring(0, (i) + 1);

                        if (nchar.search(expr) != 0)
                            var tst2 = val.value.substring(i + 2, pass.length);
                        else
                            var tst2 = val.value.substring(i + 1, pass.length);

                        val.value = tst1 + '/' + tst2;
                    }

                } else if (i == 4) {

                    if (lchar.search(expr) != 0) {
                        var tst1 = val.value.substring(0, (i));
                        val.value = tst1;
                        continue;
                    }

                    if ((nchar != '/') && (nchar != '')) {
                        var tst1 = val.value.substring(0, (i) + 1);

                        if (nchar.search(expr) != 0)
                            var tst2 = val.value.substring(i + 2, pass.length);
                        else
                            var tst2 = val.value.substring(i + 1, pass.length);

                        val.value = tst1 + '/' + tst2;
                    }
                }

                if (i >= 6) {
                    if (lchar.search(expr) != 0) {
                        var tst1 = val.value.substring(0, (i));
                        val.value = tst1;
                    }
                }
            }

            if (pass.length > 10)
                val.value = val.value.substring(0, 10);
            return true;
        }
    </script>
</x-html>
