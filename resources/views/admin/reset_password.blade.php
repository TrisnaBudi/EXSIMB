@extends('admin.admin_main')
@section('title', 'Reset_Password')

{{-- isi --}}
@section('admin_content')
    <!-- Page content-->
    <main id="main" class="main" style="margin-left: 0">

        <div class="pagetitle">
            <h1>Reset Password</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Reset Password</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="container col-md-6 justify-content-right border border-4 rounded">
                    <form action="{{ route('admin.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group my-2 ">
                            <label for="password">New Password</label>
                            <input type="password" name="password" id="password" class="form-control border border-4 rounded" required>
                        </div>

                        <div class="form-group my-2 ">
                            <label for="password_confirmation">Confirm New Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control border border-4 rounded" required>
                        </div>

                        <button type="submit" class="btn btn-primary my-4">Reset Password</button>
                    </form>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
