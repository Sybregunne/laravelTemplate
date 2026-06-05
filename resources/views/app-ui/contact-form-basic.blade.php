<x-app-layout>
    <x-slot name='title'>Untitled</x-slot>
    <section class="bg-body-tertiary">
        <div class="container d-flex min-vh-100 flex-column justify-content-center align-items-center py-5">
            <div class="card max-w-480">
                <div class="card-body">
                    <h1 class="fs-4 text-center">Get in Touch</h1>
                    <p class="text-center text-muted mb-4">We'd love to hear from you! Fill out the form below and we'll get back to you shortly.</p>
                    <form>
                        <div class="mb-3"><label class="form-label" for="name">Full Name</label><input class="form-control" type="text" placeholder="Your name" required="" name="name"></div>
                        <div class="mb-3"><label class="form-label" for="email">Email Address</label><input class="form-control" type="email" placeholder="you@example.com" required="" name="email"></div>
                        <div class="mb-3"><label class="form-label" for="subject">Subject</label><input class="form-control" type="text" placeholder="How can we help you?" required="" name="subject"></div>
                        <div class="mb-3"><label class="form-label" for="message">Message</label><textarea class="form-control" placeholder="Type your message here..." required="" rows="4" name="message"></textarea></div>
                        <div class="d-grid"><button class="btn btn-primary" type="submit">Send</button></div>
                    </form>
                </div>
            </div>
            <div class="text-center text-muted mt-3 small"><span> We respect your privacy. Read our </span><a href="#">Privacy Policy</a><span>. </span></div>
        </div>
    </section>
</x-app-layout>