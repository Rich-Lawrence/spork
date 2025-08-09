<x-layout>
<main>
    @if (session('success'))
        <div id="success-alert" class="col-12 col-md-4 col-lg-4 mx-auto" style="margin: 5px 5px 5px 5px; float:right; max-width: 200px;">
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <div class="row">
                <div class="col-md-11">
                    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    </a>
                </div>
                @if(Auth::check())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="col-md-1 bg-dark">
                            <div class="d-grid my-3">
                                <button class="btn btn-secondary btn-lg"
                                        type="submit">{{ __('Logout') }}</button>
                            </div>
                        </div>
                    </form>
                @else
                    <form method="GET" action="{{ route('login') }}">
                        @csrf
                        <div class="col-md-1 bg-dark">
                            <div class="d-grid my-3">
                                <button class="btn btn-secondary btn-lg"
                                        type="submit">{{ __('Login') }}</button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>

        </header>

        <div class="p-5 mb-4 bg-dark text-white rounded-3">
            <div class="container-fluid py-5">
                @if(Auth::check())
                    <h1 class="display-5 fw-bold">Hi, {{ auth()->user()->name }}</h1>
                @endif
                <p class="col-md-8 fs-4">Welcome to dashboard<br/>Put some shit here.</p>
                <button class="btn btn-secondary btn-lg" type="button">Home</button>
            </div>
        </div>

    </div>
</main>

    <script>
        // Fade out the login success message
        setTimeout(function() {
            let alert = document.getElementById('success-alert');
            if (alert) {
                alert.style.transition = "opacity 0.5s ease";
                alert.style.opacity = "0";
                setTimeout(() => { alert.remove(); }, 500);
            }
        }, 3000);
    </script>
</x-layout>
