<form action="{{ route('contatos.store') }}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-xl-12">
            <input name="nome" type="text" class="form-control bg-light border-0" placeholder="Seu nome" style="height: 55px;"  value="{{old('nome')}}">
        </div>
        <div class="col-12">
            <input name="email" type="email" class="form-control bg-light border-0" placeholder="Seu E-mail" style="height: 55px;" value="{{old('email')}}">
        </div>
        <div class="col-12">
            <input name="telefone" type="tel" class="form-control bg-light border-0" placeholder="Seu Telefone" style="height: 55px;" value="{{old('telefone')}}">
        </div>
        <div class="col-12">
            <select name="assunto" class="form-select bg-light border-0" style="height: 55px;">
                {{-- <option selected>--assunto--</option> --}}
                <option value="Informação">Informação</option>
                <option value="Educação Inclusiva">Educação Inclusiva</option>
                <option value="Avaliação Diagnóstica">Avaliação Diagnóstica</option>
                <option value="Consultoria">Consultoria</option>
                <option value="Desenvolvimento Web">Desenvolvimento Web</option>
            </select>
        </div>
        <div class="col-12">
            <textarea name="mensagem" class="form-control bg-light border-0" rows="3" placeholder="Mensagem">{{old('mensagem')}}</textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-dark w-100 py-3" type="submit">Solicitar Contato</button>
        </div>
    </div>
</form>
