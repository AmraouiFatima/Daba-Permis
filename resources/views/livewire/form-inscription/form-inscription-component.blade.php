<div>
    <div class="row justify-content-center p-10">
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
                            @if (session()->has('newInscriptionAdded'))
                            <script>
                            Snackbar.show({
                                text: 'Candidature added succesfully',
                                pos: 'top-left',
                                actionText: 'Thanks!'
                            });
                            </script>
                            @endif
                            <!-- /.box-header -->
                            <div class="box-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-fill" role="tablist">
                                    <li class="nav-item" wire:ignore>
                                        <a class="nav-link active" data-toggle="tab" href="#auto_ecole" role="tab">
                                            <span><i class="fa fa-university"></i></span>
                                            <span class="hidden-xs-down ml-15">مدرسة التعليم</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" wire:ignore>
                                        <a class="nav-link" data-toggle="tab" href="#moniteur" role="tab">
                                            <span><i class="fa fa-car"></i></span>
                                            <span class="hidden-xs-down ml-15"> المدرب</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" wire:ignore>
                                        <a class="nav-link" data-toggle="tab" href="#candidat" role="tab">
                                            <span><i class="fa fa-users"></i></span>
                                            <span class="hidden-xs-down ml-15"> المرشح</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <!-- type auto école -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="auto_ecole" role="tabpanel" wire:ignore.self>
                                        <div class="p-15">
                                            <form wire:submit.prevent="addInscriptionSchool">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>الاسم العائلي</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="الاسم العائلي" wire:model="lname_auto"
                                                                    name="lname_auto" id="lname_auto">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>الاسم الشخصي</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="الاسم الشخصي" wire:model="fname_auto"
                                                                    name="fname_auto" id="fname_auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>البريد الالكتروني</label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="البريد الالكتروني"
                                                                    wire:model="email_auto" name="email_auto"
                                                                    id="email_auto">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>الهاتف</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="الهاتف" wire:model="phone_auto"
                                                                    name="phone_auto" id="phone_auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>اسم مدرسة تعليم االقيادة</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="اسم مدرسة تعليم القيادة"
                                                                wire:model="school" name="school" id="school">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>المدينة</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="المدينة" wire:model="city_auto"
                                                                name="city_auto" id="city_auto">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>العنوان</label>
                                                        <div class="input-group mb-3">
                                                            <textarea type="text" class="form-control"
                                                                name="adresse_auto" id="adresse_auto"
                                                                placeholder="العنوان"
                                                                wire:model="adresse_auto"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer text-right">
                                                    <button type="button"
                                                        class="btn btn-warning btn-outline mr-1 col-5 ml-4">
                                                        <i class="ti-trash"></i> إلغاء
                                                    </button>
                                                    <button type="submit" class="btn btn-primary col-5 mr-4">
                                                        <i class="ti-save-alt"></i> حفظ
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- type moniteur -->
                                    <div class="tab-pane" id="moniteur" role="tabpanel" wire:ignore.self>
                                        <div class="p-15">
                                            <form class="form" wire:submit.prevent="addInscriptionMoniteur">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>الاسم العائلي</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="الاسم العائلي"
                                                                    wire:model="lname_moniteur" name="lname_moniteur"
                                                                    id="lname_moniteur">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>الاسم الشخصي</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="الاسم الشخصي"
                                                                    wire:model="fname_moniteur" name="fname_moniteur"
                                                                    id="fname_moniteur">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>البريد الالكتروني للمدرب</label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="البريد الالكتروني"
                                                                    wire:model="email_moniteur" name="email_moniteur"
                                                                    id="email_moniteur">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>هاتف المدرب</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="الهاتف" wire:model="phone_moniteur"
                                                                    name="phone_moniteur" id="phone_moniteur">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>رقم البطاقة الوطنية</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="رقم البطاقة الوطنية"
                                                                    wire:model="cni_moniteur" name="cni_moniteur"
                                                                    id="cni_moniteur">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>المدينة</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="المدينة" wire:model="city_moniteur"
                                                                    name="city_moniteur" id="city_moniteur">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>العنوان</label>
                                                        <div class="input-group mb-3">
                                                            <textarea type="text" class="form-control"
                                                                placeholder="العنوان" wire:model="adresse_moniteur"
                                                                name="adresse_moniteur"
                                                                id="adresse_moniteur"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer text-right">
                                                    <button type="button"
                                                        class="btn btn-warning btn-outline mr-1 col-5 ml-4">
                                                        <i class="ti-trash"></i> إلغاء
                                                    </button>
                                                    <button type="submit" class="btn btn-primary col-5 mr-4">
                                                        <i class="ti-save-alt"></i> حفظ
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- type candidat -->
                                    <div class="tab-pane" id="candidat" role="tabpanel" wire:ignore.self>
                                        <div class="p-15">
                                            <form class="form" wire:submit.prevent="addInscriptionCandidat">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>الاسم العائلي</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="الاسم العائلي"
                                                                    wire:model="lname_candidat" name="lname_candidat"
                                                                    id="lname_candidat">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>الاسم الشخصي</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="الاسم الشخصي"
                                                                    wire:model="fname_candidat" name="fname_candidat"
                                                                    id="fname_candidat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>العنوان</label>
                                                        <div class="input-group mb-3">
                                                            <textarea type="text" class="form-control"
                                                                placeholder="العنوان" wire:model="adresse_candidat"
                                                                name="adresse_candidat"
                                                                id="adresse_candidat"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>المدينة</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="المدينة" wire:model="city_candidat"
                                                                    name="city_candidat" id="city_candidat">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>رقم البطاقة الوطنية</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="رقم البطاقة الوطنية"
                                                                    wire:model="cni_candidat" name="cni_candidat"
                                                                    id="cni_candidat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>البريد الالكتروني للمرشح</label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="البريد الالكتروني"
                                                                    wire:model="email_candidat" name="email_candidat"
                                                                    id="email_candidat">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>هاتف المرشح</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="الهاتف" wire:model="phone_candidat"
                                                                    name="phone_candidat" id="phone_candidat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer text-right">
                                                    <button type="button"
                                                        class="btn btn-warning btn-outline mr-1 col-5 ml-4">
                                                        <i class="ti-trash"></i> إلغاء
                                                    </button>
                                                    <button type="submit" class="btn btn-primary col-5 mr-4">
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

</div>