<h2>Meu Perfil</h2>
<p>Olá, <strong><?= $_SESSION['usuario_nome'] ?></strong>!</p>

<!-- Adicionar Matéria -->
<div class="card mb-4">
    <div class="card-header">
        <h5>Adicionar Matéria</h5>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="mb-3">
                <input type="text" name="nome" class="form-control" placeholder="Nome da matéria" required>
            </div>
            <div class="mb-3">
                <textarea name="anotacoes" class="form-control" rows="3" placeholder="Anotações..."></textarea>
            </div>
            <button type="submit" name="add_materia" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
</div>

<!-- Minhas Matérias -->
<div class="card">
    <div class="card-header">
        <h5>Minhas Matérias</h5>
    </div>
    <div class="card-body">
        <?php if(empty($materias)): ?>
            <p class="text-muted">Nenhuma matéria adicionada.</p>
        <?php else: ?>
            <?php foreach($materias as $materia): ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6><?= htmlspecialchars($materia['nome']) ?></h6>
                            <a href="/learnflow/perfil?excluir=<?= $materia['id'] ?>" class="btn btn-sm btn-danger"
                               onclick="return confirm('Excluir?')">X</a>
                        </div>
                        <?php if($materia['anotacoes']): ?>
                            <p class="mb-0"><?= nl2br(htmlspecialchars($materia['anotacoes'])) ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>