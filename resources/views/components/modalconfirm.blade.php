<div class="modal fade show" id="confirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    {{ $doing }} colaborador #{{ $deleteEmployee->id }}
                    <br>
                    {{ $deleteEmployee->fullname }}
                </h1>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja fazer isso?
            </div>
            {{ $slot }}
        </div>
    </div>
</div>
