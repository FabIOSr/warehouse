<div>
    <button type="button" class="btn btn-block btn-primary my-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Cadastro de usuário
    </button>
    <br>
    <button type="button" class="btn btn-block btn-outline-primary my-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Cadastro de fornecedor
    </button>
    <br>
    <button type="button" class="btn btn-block btn-outline-primary my-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Notas fiscais
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade bg-secondary" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary trigger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="test">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>        
//modal close trigger after submited
window.addEventListener('close-modal', (event) => {
    $('.trigger').trigger('click');
});
</script>
@endpush
