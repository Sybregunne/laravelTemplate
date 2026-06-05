<x-app-layout>
    <x-slot name="title">Untitled</x-slot>

    <section class="bg-body-tertiary">
        <div class="container d-flex min-vh-100 justify-content-center align-items-center py-5">
            <div class="card w-100 max-w-400">
                <div class="card-body">
                    <h1 class="fs-5 mb-1">Create an account</h1>
                    <p class="text-muted mb-4 small">Enter your email below to create an aaccount</p>
                    <form>
                        <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email" placeholder="email@example.com" required="" name="email"></div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2"><label class="form-label mb-0" for="password">Password</label></div><input class="form-control" type="password" required="" name="password">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2"><label class="form-label mb-0" for="password">Password (repeat)</label></div><input class="form-control" type="password" required="" name="password">
                        </div>
                        <div class="d-grid gap-2"><button class="btn btn-primary" type="submit">Register</button><button class="btn btn-outline-primary" type="button">Sign up with Google</button></div>
                        <div class="text-center mt-4 small"><span> Already have an account? </span><a href="#">Sign in</a></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>