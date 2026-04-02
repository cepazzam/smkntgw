<div class="modal fade" id="modalUser{{ Auth::user()->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ganti Passsword {{ Auth::user()->name }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('repassword', Auth::user()->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="is_role" value="{{ Auth::user()->is_role }}">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Name</label>
                                    <div class="position-relative">
                                        <input type="text" name="name" value="{{ Auth::user()->name }}"
                                            class="form-control" id="first-name-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 mb-3">

                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Email</label>
                                <div class="position-relative">
                                    <input type="email" name="email" value="{{ Auth::user()->email }}"
                                        class="form-control" id="email-id-icon">
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group has-icon-left">
                                <label for="password-id-icon">Password</label>
                                <div class="position-relative">
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        id="password-id-icon">
                                    <div class="form-control-icon">
                                        <i class="bi bi-lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group has-icon-left">
                                <label for="password-id-icon">Confirm Password</label>
                                <div class="position-relative">
                                    <input type="password" name="confirm_password" class="form-control"
                                        id="password-id-icon" placeholder="Confirm Password">
                                    <div class="form-control-icon">
                                        <i class="bi bi-lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
