<div class="formContainer__fields d-flex">
    <div class="formContainer__fullname">
        <label for="fullname">Nome Completo</label>
        <input type="text" id="fullname" name="fullname" value="{{ old('fullname') }}" required
            oninput="fullnameCleaner(this)">
    </div>

    <div class="formContainer__nickname">
        <label for="nickname">Apelido</label>
        <input type="text" id="nickname" name="nickname" value="{{ old('nickname') }}" required
            oninput="nicknameCleaner(this)">
    </div>

    <div class="formContainer__cpf">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}" required minlength="14"
            maxlength="14" oninput="cpfMask(this)">
    </div>

    <div class="formContainer__birthdate">
        <label for="birthdate">Data de Nascimento</label>
        <input type="date" id="birthdate" name="birthdate" maxlength="10" value="{{ old('birthdate') }}" required>
    </div>

    <div class="formContainer__role">
        <label for="role">Cargo</label>
        <input type="text" id="role" name="role" value="{{ old('role') }}" required
            oninput="roleCleaner(this)">
    </div>
</div>
