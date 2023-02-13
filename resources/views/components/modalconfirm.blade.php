<div class="modal fade show" id="{{$id}}" tabindex="-1" aria-labelledby="{{$id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="{{$id}}Title">
                    {{ $doing }} colaborador #{{ $employee->id }}
                    <br>
                    {{ $employee->fullname }}
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
