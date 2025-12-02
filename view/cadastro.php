<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4>Cadastro</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Cadastrar</button>
                </form>
                <p class="mt-3 text-center">
                    Já tem conta? <a href="/learnflow/auth/login">Faça login</a>
                </p>
            </div>
        </div>
    </div>
</div>