<div class="modal fade" id="successModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-{{ session('bg') ? 'danger' : 'success' }}">
                <h4 class="modal-title text-light">{{ session('title') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">

                <h5 class="align-center text-{{ session('bg') ? 'danger' : 'success' }}"><i class="fas fa-exclamation-triangle text-danger"></i>
                    {{ session('showModal') }}</h5>

            </div>
            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-{{ session('bg') ? 'danger' : 'success' }}" data-bs-dismiss="modal">Ok</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@if (session()->has('showModal'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new bootstrap.Modal(document.getElementById('successModal')).show();
            keyboard: true;
        });
    </script>
@endif
