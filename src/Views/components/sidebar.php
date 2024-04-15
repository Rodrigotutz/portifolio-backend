<!-- Button trigger modal -->
<button type="button" class="btn" style="position: fixed;" data-bs-toggle="modal" data-bs-target="#sidebar">
<i class="bi bi-list text-white fs-4"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="sidebar" tabindex="-1" aria-labelledby="sidebar" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen" style="width: 200px;">
    <div class="modal-content">
      <div class="modal-header" style="border:none;">
        <h5 class="modal-title text-muted fw-bold">Rodrigo Tutz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex flex-column gap-3 text-dark">
        <ul class="navbar-nav navbar-dark gap-3">
            <li class="nav-item bg-dark text-white rounded-3 container">
                <a href="<?= $router->route('web.index')?>" class="nav-link active fs-6"><i class="bi bi-house-fill"></i> Inicio</a>
            </li>
            <li class="nav-item bg-dark rounded-3 container">
                <a href="<?= $router->route('web.apps') ?>" class="nav-link fs-6"><i class="bi bi-terminal-fill"></i> Apps</a>
            </li>
            <li class="nav-item bg-dark rounded-3 container">
                <a href="<?= $router->route('web.certifieds') ?>" class="nav-link fs-6"><i class="bi bi-patch-check-fill"></i> Cerficados</a>
            </li>
            <li class="nav-item bg-dark rounded-3 container">
                <a href="<?= $router->route('web.contact') ?>" class="nav-link fs-6"><i class="bi bi-telephone-fill"></i> Contato</a>
            </li>
        </ul>
      </div>
      <div class="container mb-3">
        <ul class="navbar-nav navbar-dark gap-3">
          <li class="nav-item bg-dark text-white rounded-3 container">
              <a href="https://github.com/rodrigotutz" target="_blank" class="nav-link active fs-6"><i class="bi bi-github"></i> Github  </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>