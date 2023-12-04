<div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card radius-10">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if ($successful)
                        <div class="alert alert-success">
                            Sukses mengubah kata sandi!
                        </div>
                    @endif
                    <form wire:submit.prevent='submit'>
                        <h5 class="mb-0 mt-4">Change Password</h5>
                        <hr>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="currentPassword" class="form-label">Password Lama</label>
                                <input type="password"name="currentPassword" id="currentPassword"
                                    wire:model.defer='currentPassword'
                                    class="form-control @error('currentPassword') is-invalid @enderror">
                            </div>
                            <div class="col-12">
                                <label class="form-label"currentPassword>Password Baru </label>
                                <input type="password" name="newPassword" id="newPassword"
                                    wire:model.defer='newPassword'
                                    class="form-control @error('newPassword') is-invalid @enderror">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="currentPassword">Konfirmasi Password Baru</label>
                                <input type="password" name="newPasswordConfirmation" id="newPasswordConfirmation"
                                    wire:model.defer='newPassword_confirmation'
                                    class="form-control @error('newPassword_confirmation') is-invalid @enderror">
                            </div>
                        </div>
                        <div class="text-start mt-3">
                            <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--end row-->

</div>
