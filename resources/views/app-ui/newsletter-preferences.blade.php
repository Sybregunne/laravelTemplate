<x-app-layout>
    <x-slot name="title">Newsletter Subscription - Brand</x-slot>

    <section class="bg-body-tertiary">
        <div class="container d-flex min-vh-100 justify-content-center align-items-center py-5">
            <div class="card w-100 max-w-400">
                <div class="card-body">
                    <h1 class="fs-5 mb-1">Newsletter Preferences</h1>
                    <p class="small text-muted mb-3">Choose which types of emails you'd like to receive</p>
                    <form id="preferencesForm">
                        <div class="mb-3">
                            <div class="form-check"><input class="form-check-input" type="checkbox" checked="" id="productUpdates-1"><label class="form-check-label" for="productUpdates-1">Product Updates</label></div>
                            <p class="small text-muted ms-4 mb-0">New features and product announcements</p>
                        </div>
                        <div class="mb-3">
                            <div class="form-check"><input class="form-check-input" type="checkbox" checked="" id="weeklyDigest-1"><label class="form-check-label" for="weeklyDigest-1">Weekly Digest</label></div>
                            <p class="small text-muted ms-4 mb-0">A weekly roundup of our latest content</p>
                        </div>
                        <div class="mb-3">
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="promotions-1"><label class="form-check-label" for="promotions-1">Promotions &amp; Offers</label></div>
                            <p class="small text-muted ms-4 mb-0">Special deals and exclusive discounts</p>
                        </div>
                        <div class="mb-3">
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="events-1"><label class="form-check-label" for="events-1">Events &amp; Webinars</label></div>
                            <p class="small text-muted ms-4 mb-0">Invitations to upcoming events and webinars</p>
                        </div>
                        <div class="d-grid gap-2"><button class="btn btn-primary" type="submit">Subscribe</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>