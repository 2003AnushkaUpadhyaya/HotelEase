<x-guest-layout>
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="{{route('login')}}" class="mb-12">
{{--                    <img alt="Logo" src="{{ asset('media/logos/logo-1.svg') }}" class="h-40px" />--}}
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->

                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::errors-->
                    @if ($errors->any())
{{--                        <div {{ $attributes }}>--}}
                            <div class="font-medium text-red-600">
                                {{ __('Whoops! Something went wrong.') }}
                            </div>

                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                    @endif
                    <!--end::errors-->
                    <!--begin::Form-->
                    <form method="POST" class="form w-100" id="kt_sign_in_form" action="{{ route('login') }}">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Sign In to Hotel Ease</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
{{--                            <div class="text-gray-400 fw-bold fs-4">New Here?--}}
{{--                                <a href="../../demo1/dist/authentication/layouts/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div>--}}
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <!--end::Label-->
                                <!--begin::Link-->
                                <a href="../../demo1/dist/authentication/layouts/basic/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Continue</span>
                            </button>
                            <!--end::Submit button-->
                            <!--begin::Separator-->
                            <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                            <!--end::Separator-->
                            <!--begin::Google link-->
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                <img alt="Logo" src="{{ asset('media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />Continue with Google</a>
                            <!--end::Google link-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="#" class="text-muted text-hover-primary px-2">About</a>
                    <a href="#" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="#" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
</x-guest-layout>
