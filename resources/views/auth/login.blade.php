<x-guest-layout>

    <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot>

    <body class="hold-transition theme-primary bg-img" style="background-image: url({{ asset('assets/images/') }})" >

        <div class="container h-p100">
            <div class="row align-items-center justify-content-md-center h-p100">

                <div class="col-12">
                    <div class="row justify-content-center no-gutters">
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="bg-white rounded30 shadow-lg">
                                <div class="content-top-agile p-20 pb-0">



                                    <div class="d-flex justify-content-center">

                                        <img src="{{ asset('assets/images/logo_login.png') }}" alt="" width="360">

                                    </div>



                                </div>
                                <div class="p-40">

                                    <x-jet-validation-errors class="mb-4" />

                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-transparent"><i
                                                            class="ti-user"></i></span>
                                                </div>
                                                <input type="email" class="form-control pl-15 pt-10  pb-10 bg-transparent"
                                                    placeholder="Test@gmail.com" id="email" type="email" name="email"
                                                    :value="old('email')" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text  bg-transparent"><i
                                                            class="ti-lock"></i></span>
                                                </div>
                                                <input type="password" class="form-control pl-15 pt-10  pb-10 bg-transparent"
                                                    placeholder="Password" id="password" name="password" required
                                                    autocomplete="current-password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="basic_checkbox_1">
                                                    <label for="basic_checkbox_1">تذكرنى</label>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-6">
                                                <div class="fog-pwd text-right">
                                                    <a href="{{ route('password.request') }}" class="hover-warning"><i
                                                            class="ion ion-locked"></i> نسيت رقمك السري</a><br>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-danger mt-10">تسجيل الدخول</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <p class="mt-15 mb-0">ليس لديك حساب؟ <a href="{{ route('formInscription') }}"
                                                class="text-warning ml-5">التسجيل</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Vendor JS -->
        <script src="js/vendors.min.js"></script>
        <script src="js/pages/chat-popup.js"></script>
        <script src="../assets/icons/feather-icons/feather.min.js"></script>

    </body>



</x-guest-layout>
