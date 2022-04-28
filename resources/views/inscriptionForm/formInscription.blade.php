<x-app-layout>


    <div class="row justify-content-center p-10 ">
        <div class="col-lg-6 col-12">
            <div class="box shadow">
                <div class="content-top-agile p-10">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/images/logo_login.png') }}" alt="" width="360">
                    </div>
                </div>
                <div class="box-header with-border">
                    <div class="col-12">
                        <div>

                            @if (session()->has('newInscriptionAuto'))
                                <script>
                                    swal('عمل جيد !', '{{ session('newInscriptionAuto') }}', 'success', {
                                        Button: "استمر",
                                    });
                                </script>
                            @endif
                            @if (session()->has('newInscriptionMoniteur'))
                            <script>
                                swal('عمل جيد !', '{{ session('newInscriptionMoniteur') }}', 'success', {
                                    Button: "استمر",
                                });
                            </script>
                        @endif
                        @if (session()->has('newInscriptionCandidat'))
                        <script>
                            swal('عمل جيد !', '{{ session('newInscriptionCandidat') }}', 'success', {
                                Button: "استمر",
                            });
                        </script>
                    @endif




                            <!-- /.box-header -->
                            <div class="box-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-fill" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#auto_ecole" role="tab">
                                            <span><i class="fa fa-university"></i></span>
                                            <span class="hidden-xs-down ml-15">مدرسة التعليم</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#moniteur" role="tab">
                                            <span><i class="fa fa-car"></i></span>
                                            <span class="hidden-xs-down ml-15"> المدرب</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#candidat" role="tab">
                                            <span><i class="fa fa-users"></i></span>
                                            <span class="hidden-xs-down ml-15"> المرشح</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <!-- type auto école -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="auto_ecole" role="tabpanel">
                                        <div class="p-15">
                                            <form action="{{ route('storeSchool') }}" method="POST">
                                                @csrf
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label>الاسم الكامل</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="الاسم الكامل" name="fullname_auto"
                                                                id="fullname_auto">

                                                        </div>
                                                        @error('fullname_auto')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>البريد الالكتروني</label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="البريد الالكتروني" name="email_auto"
                                                                    id="email_auto">

                                                            </div>
                                                            @error('email_auto')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>الهاتف</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="الهاتف" name="phone_auto"
                                                                    id="phone_auto">

                                                            </div>
                                                            @error('phone_auto')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>اسم مدرسة تعليم االقيادة</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="اسم مدرسة تعليم القيادة" name="school"
                                                                id="school">

                                                        </div>
                                                        @error('school')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>المدينة</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="المدينة" name="city_auto" id="city_auto">

                                                        </div>
                                                        @error('city_auto')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>العنوان</label>
                                                        <div class="input-group mb-3">
                                                            <textarea type="text" class="form-control" name="adresse_auto" id="adresse_auto" placeholder="العنوان"></textarea>

                                                        </div>
                                                        @error('adresse_auto')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer d-flex text-right">
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-danger col-6 " style="border-radius: 0px 10px 10px 0px">
                                                        <i class="ti-trash"></i> إلغاء
                                                </a>
                                                    <button type="submit" class="btn btn-primary col-6 " style="border-radius: 10px 0px 0px 10px">
                                                        <i class="ti-save-alt"></i> حفظ
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- type moniteur -->
                                    <div class="tab-pane" id="moniteur" role="tabpanel">
                                        <div class="p-15">
                                            <form class="form" action="{{ route('storeMoniteur') }}"
                                                method="POST">
                                                @csrf
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label>الاسم الكامل</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="الاسم الكامل" name="fullname_moniteur"
                                                                id="fullname_moniteur">
                                                        </div>
                                                        @error('fullname_moniteur')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>البريد الالكتروني للمدرب</label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="البريد الالكتروني"
                                                                    name="email_moniteur" id="email_moniteur">
                                                            </div>
                                                            @error('email_moniteur')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>هاتف المدرب</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="الهاتف" name="phone_moniteur"
                                                                    id="phone_moniteur">
                                                            </div>
                                                            @error('phone_moniteur')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>رقم البطاقة الوطنية</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="رقم البطاقة الوطنية"
                                                                    name="cni_moniteur" id="cni_moniteur">
                                                            </div>
                                                            @error('cni_moniteur')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>المدينة</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="المدينة" name="city_moniteur"
                                                                    id="city_moniteur">
                                                            </div>
                                                            @error('city_moniteur')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>العنوان</label>
                                                        <div class="input-group mb-3">
                                                            <textarea type="text" class="form-control" placeholder="العنوان" name="adresse_moniteur"
                                                                id="adresse_moniteur"></textarea>
                                                        </div>
                                                        @error('adresse_moniteur')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer d-flex text-right">
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-danger col-6 " style="border-radius: 0px 10px 10px 0px">
                                                        <i class="ti-trash"></i> إلغاء
                                                </a>
                                                    <button type="submit" class="btn btn-primary col-6 " style="border-radius: 10px 0px 0px 10px">
                                                        <i class="ti-save-alt"></i> حفظ
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- type candidat -->
                                    <div class="tab-pane" id="candidat" role="tabpanel">
                                        <div class="p-15">
                                            <form class="form" action="formInscription_storeCandidat"
                                                method="POST">
                                                @csrf
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label>الاسم الكامل</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="الاسم الكامل" name="fullname_candidat"
                                                                id="fullname_candidat">
                                                        </div>
                                                        @error('fullname_candidat')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>العنوان</label>
                                                        <div class="input-group mb-3">
                                                            <textarea type="text" class="form-control" placeholder="العنوان" name="adresse_candidat"
                                                                id="adresse_candidat" name="adresse_candidat"></textarea>
                                                        </div>
                                                        @error('adresse_candidat')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>المدينة</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="المدينة" name="city_candidat"
                                                                    id="city_candidat">
                                                            </div>
                                                            @error('city_candidat')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>رقم البطاقة الوطنية</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="رقم البطاقة الوطنية"
                                                                    name="cni_candidat" id="cni_candidat">
                                                            </div>
                                                            @error('cni_candidat')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>البريد الالكتروني للمرشح</label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="البريد الالكتروني"
                                                                    name="email_candidat" id="email_candidat">
                                                            </div>
                                                            @error('email_candidat')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>هاتف المرشح</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="الهاتف" name="phone_candidat"
                                                                    id="phone_candidat">
                                                            </div>
                                                            @error('phone_candidat')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer d-flex text-right">
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-danger col-6 " style="border-radius: 0px 10px 10px 0px">
                                                        <i class="ti-trash"></i> إلغاء
                                                </a>
                                                    <button type="submit" class="btn btn-primary col-6 " style="border-radius: 10px 0px 0px 10px">
                                                        <i class="ti-save-alt"></i> حفظ
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <!-- /.box-header -->
            </div>
            <!-- /.box -->
        </div>
    </div>

</x-app-layout>
