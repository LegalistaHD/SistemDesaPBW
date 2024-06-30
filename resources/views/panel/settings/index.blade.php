@extends('panel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Settings</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Change Current Role</h5>

                        <form action="{{ route('update-current-role', ['id' => auth()->user()->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="role_id" class="form-label">Select Current Role:</label>
                                <select class="form-control" id="role_id" name="role_id" required>
                                    <option value="">Select Role</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ $currentUser->role_id == $role->id ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
