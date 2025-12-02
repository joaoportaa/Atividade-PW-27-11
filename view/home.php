<!-- Carrossel -->
<div id="carousel" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1501504905252-473c47e087f8" class="d-block w-100">
            <div class="carousel-caption">
                <h5>Matemática</h5>
                <p>Álgebra e cálculo</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1456513080510-3449c76e2c4c" class="d-block w-100">
            <div class="carousel-caption">
                <h5>Português</h5>
                <p>Gramática e literatura</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Matérias -->
<h3 class="mb-3">Matérias</h3>
<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card text-center">
            <div class="card-body">
                <h5>Matemática</h5>
                <p>Álgebra, geometria</p>
                <?php if(isset($_SESSION['usuario_id'])): ?>
                    <a href="/learnflow/perfil" class="btn btn-primary">Adicionar</a>
                <?php else: ?>
                    <a href="/learnflow/auth/login" class="btn btn-outline-primary">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card text-center">
            <div class="card-body">
                <h5>Português</h5>
                <p>Gramática, redação</p>
                <?php if(isset($_SESSION['usuario_id'])): ?>
                    <a href="/learnflow/perfil" class="btn btn-primary">Adicionar</a>
                <?php else: ?>
                    <a href="/learnflow/auth/login" class="btn btn-outline-primary">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card text-center">
            <div class="card-body">
                <h5>História</h5>
                <p>História do Brasil</p>
                <?php if(isset($_SESSION['usuario_id'])): ?>
                    <a href="/learnflow/perfil" class="btn btn-primary">Adicionar</a>
                <?php else: ?>
                    <a href="/learnflow/auth/login" class="btn btn-outline-primary">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>