<x-app-layout>
    <x-slot name='title'>Page Not Found - Brand</x-slot>
    <x-nav />
    <section class="d-flex align-items-center min-vh-80">
        <div class="container py-5">
            <div class="row justify-content-center mx-auto">
                <div class="text-center max-w-480"><span class="badge bg-light rounded-pill mb-3 px-3 py-2">Error
                        404</span>
                    <h1 class="display-5 fw-bold">Page Not Found</h1>
                    <p class="text-muted mb-4">We couldn't find the file or page you are looking for. It may have been
                        removed from our website or you may have a broken link.</p><button class="btn btn-primary"
                        type="button">Back to site<svg class="bi bi-arrow-right-short fs-5 mb-1"
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8">
                            </path>
                        </svg></button>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
</x-app-layout>
