@if (session('success'))
    <div class="enquiry-toast" id="enquiry-success" role="status" aria-live="polite" aria-atomic="true" tabindex="-1">
        <span class="enquiry-toast-icon" aria-hidden="true">
            <i class="bi bi-check-lg"></i>
        </span>
        <span class="enquiry-toast-copy">
            <strong>Enquiry sent!</strong>
            <span>{{ session('success') }}</span>
        </span>
        <button class="enquiry-toast-close" type="button" aria-label="Dismiss confirmation">
            <i class="bi bi-x-lg" aria-hidden="true"></i>
        </button>
    </div>
@endif

<section class="contact-section" id="contact">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- LEFT -->

            <div class="col-lg-5">

                <span class="section-label-contact">
                    Let's Make It Happen
                </span>

                <h2 class="contact-title">

                    Your next step
                    starts with a
                    conversation.

                </h2>

                <p class="contact-description">

                    A new website, a smarter system,
                    a technical fix or a fresh creative
                    direction. Tell us what you need and
                    we'll take it from there.

                </p>

                <div class="contact-info">

                    <div class="contact-item">
                        <i class="bi bi-envelope"></i>
                        <a href="mailto:info@nextgenitsolutions.co.za">info@nextgenitsolutions.co.za</a>
                    </div>

                    <div class="contact-item">
                        <i class="bi bi-telephone"></i>
                        <a href="tel:+27720549864">+27 72 054 9864</a>
                    </div>

                    <div class="contact-item">
                        <i class="bi bi-telephone"></i>
                        <a href="tel:+27848141950">+27 84 814 1950</a>
                    </div>

                    <div class="contact-item">
                        <i class="bi bi-geo-alt"></i>
                        South Africa
                    </div>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="col-lg-6 offset-lg-1">

                <div class="contact-form-card">

                    <h4 class="mb-4">
                        Tell us about your idea
                    </h4>

                    @if ($errors->any())
                        <div class="form-feedback form-feedback-error" role="alert">
                            Please check the highlighted fields and try again.
                        </div>
                    @endif

                    <form method="POST"
                          action="{{ route('contact.submit') }}">

                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label for="contact-name">Name *</label>

                                <input
                                    type="text"
                                    name="name"
                                    id="contact-name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}"
                                    autocomplete="name"
                                    required
                                    aria-invalid="@error('name') true @else false @enderror"
                                    @error('name') aria-describedby="contact-name-error" @enderror>
                                @error('name')
                                    <div class="invalid-feedback" id="contact-name-error">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="contact-email">Email *</label>

                                <input
                                    type="email"
                                    name="email"
                                    id="contact-email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    required
                                    aria-invalid="@error('email') true @else false @enderror"
                                    @error('email') aria-describedby="contact-email-error" @enderror>
                                @error('email')
                                    <div class="invalid-feedback" id="contact-email-error">{{ $message }}</div>
                                @enderror

                            </div>

                        </div>

                        <div class="mb-3">

                            <label for="contact-company">
                                Business / Organisation
                            </label>

                            <input
                                type="text"
                                name="company"
                                id="contact-company"
                                class="form-control"
                                value="{{ old('company') }}"
                                autocomplete="organization">

                        </div>

                        <div class="mb-3">

                            <label for="contact-service">
                                What can we help with?
                            </label>

                            <select
                                name="service"
                                id="contact-service"
                                class="form-select">

                                <option value="">
                                    Select a service
                                </option>

                                <option @selected(old('service') === 'Website Development')>
                                    Website Development
                                </option>

                                <option @selected(old('service') === 'Custom Software')>
                                    Custom Software
                                </option>

                                <option @selected(old('service') === 'IT Support')>
                                    IT Support
                                </option>

                                <option @selected(old('service') === 'Graphic Design')>
                                    Graphic Design
                                </option>

                                <option @selected(old('service') === 'Branding')>
                                    Branding
                                </option>

                            </select>

                        </div>

                        <div class="mb-4">

                            <label for="contact-message">
                                Project Details
                            </label>

                            <textarea
                                rows="5"
                                class="form-control @error('message') is-invalid @enderror"
                                id="contact-message"
                                name="message"
                                required
                                aria-invalid="@error('message') true @else false @enderror"
                                @error('message') aria-describedby="contact-message-error" @enderror>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback" id="contact-message-error">{{ $message }}</div>
                            @enderror

                        </div>

                        <button
                            type="submit"
                            class="btn btn-contact">

                            Send Your Enquiry

                            <i class="bi bi-arrow-up-right"></i>

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>