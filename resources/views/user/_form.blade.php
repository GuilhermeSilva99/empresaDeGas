<div class="input-field">
    <label>Nome</label>
    <input type="text" name="name" value="{{isset($funcionario->name)?$funcionario->name:''}}">
</div>
<div class="input-field">
    <label>Cargo</label>
    <input type="text" name="cargo" value="{{isset($funcionario->cargo)?$funcionario->cargo:''}}">
</div>
<div class="input-field">
    <label>Telefone</label>
    <input type="text" name="telefone" value="{{isset($funcionario->telefone)?$funcionario->telefone:''}}">
</div>
