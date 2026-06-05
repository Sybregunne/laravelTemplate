<x-app-layout>
    <x-slot name="title">Untitled</x-slot>

    <section class="bg-body-tertiary">
        <div class="container d-flex min-vh-100 flex-column justify-content-center align-items-center py-5"><a class="text-decoration-none link-body-emphasis d-inline-flex align-items-center mb-4" href="#"><svg class="bi bi-circle-square me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6"></path>
                    <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a7 7 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79q.145.486.22 1"></path>
                </svg><span class="fs-5 fw-bold">Brand</span></a>
            <div class="card w-100 max-w-400">
                <div class="card-body text-center">
                    <h1 class="fs-4 fw-semibold">Welcome back</h1>
                    <p class="text-muted mb-4 small">Login with your Apple or Google account</p>
                    <form>
                        <div class="d-grid gap-3 mb-4"><button class="btn btn-outline-primary shadow-sm d-flex justify-content-center align-items-center gap-2" type="button"> <svg class="bi bi-apple" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282"></path>
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282"></path>
                                </svg>Login with Apple </button><button class="btn btn-outline-primary shadow-sm d-flex justify-content-center align-items-center gap-2" type="button"> <svg class="bi bi-google" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"></path>
                                </svg>Login with Google </button></div>
                        <div class="text-center position-relative mb-4">
                            <hr><span class="text-muted bg-body position-absolute top-50 start-50 translate-middle px-2 small">Or continue with</span>
                        </div>
                        <div class="text-start mb-3"><label class="form-label small fw-medium" for="email">Email</label><input class="form-control" type="email" placeholder="email@example.com" required="" name="email"></div>
                        <div class="text-start mb-3">
                            <div class="d-flex align-items-center mb-2"><label class="form-label mb-0 small fw-medium" for="password">Password</label><a class="ms-auto small" href="#">Forgot your password?</a></div><input class="form-control form-control" type="password" required="" name="password">
                        </div>
                        <div class="d-grid mb-3"><button class="btn btn-primary" type="submit">Login</button></div>
                        <div class="text-center mb-3 small"><span> Don't have an account? </span><a href="#">Sign up</a></div>
                    </form>
                </div>
            </div>
            <div class="text-center text-muted mt-3 small"><span> By clicking continue, you agree to our </span><a href="#">Terms of Service</a><span> and </span><a href="#">Privacy Policy</a><span>. </span></div>
        </div>
    </section>
</x-app-layout>