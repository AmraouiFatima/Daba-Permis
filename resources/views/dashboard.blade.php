<x-app-layout>

    <section class="content">

        <div class="row">

            <div class="col-lg-4 col-12">
                <a href="#" class="box bg-danger bg-hover-danger pull-up">
                    <div class="box-body">
                        <div class="d-flex align-items-center">
                            <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                <span class="text-white icon-Cart2 font-size-40"><i class="fa fa-users"></i></span>
                            </div>
                            <div class="ml-10">
                                <h4 class="text-white mb-0">10</h4>
                                <h5 class="text-white-50 mb-0">Utilisateurs</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-12">
                <a href="#" class="box bg-success bg-hover-danger pull-up">
                    <div class="box-body">
                        <div class="d-flex align-items-center">
                            <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                <span class="text-white icon-Cart2 font-size-40"><i class="fa fa-folder-open"></i></span>
                            </div>
                            <div class="ml-10">
                                <h4 class="text-white mb-0">10</h4>
                                <h5 class="text-white-50 mb-0">Inscriptions</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-12">
                <a href="#" class="box bg-primary bg-hover-danger pull-up">
                    <div class="box-body">
                        <div class="d-flex align-items-center">
                            <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                <span class="text-white icon-Cart2 font-size-40"><i class="fa fa-calendar"></i></span>
                            </div>
                            <div class="ml-10">
                                <h4 class="text-white mb-0">10</h4>
                                <h5 class="text-white-50 mb-0">Reservations</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="col-12">

                {{-- Modal --}}
                @include('livewire.inscription.createInscription')

                <div class="box mt-2">
                    <div class="box-header with-border">
                        <h4 class="box-title">قائمة التسجيلات</h4>
                        <div class="box-controls pull-right">
                            <div class="lookup lookup-circle lookup-right">
                                <input type="text" name="s">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <th>الاسم الكامل</th>
                                    <th>بريد الالكتروني</th>
                                    <th>النوع</th>
                                    <th>مدينة</th>
                                    <th>بطاقة الهوية الوطنية</th>
                                    <th>رقم الهاتف</th>
                                    <th>حالة</th>
                                    <th>action</th>
                                </tr>

                                @foreach ($inscriptions as $i)
                                    <tr>
                                        <td><a href="#">{{ $i->fullname }}</a></td>
                                        <td>{{ $i->email }}</td>
                                        <td><span class="badge badge-pill badge-danger">Candidat</span></td>
                                        <td>{{ $i->city }}</td>
                                        <td>{{ $i->cni }}</td>
                                        <td>{{ $i->phone }}</td>

                                        <td><span class="badge badge-pill badge-success">valider</span></td>
                                        <td>
                                            <button type="button"
                                                class="waves-effect waves-circle btn btn-circle btn-warning btn-xs mb-5 mr-2"><i
                                                    class="fa fa-edit"></i></button>
                                            <button type="button"
                                                class="waves-effect waves-circle btn btn-circle btn-danger btn-xs mb-5 mr-2"><i
                                                    class="fa fa-trash"></i></button>
                                            <button type="button"
                                                class="waves-effect waves-circle btn btn-circle btn-success btn-xs mb-5 mr-2 "><i
                                                    class="fa fa-eye"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <hr>
                    </div>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>



        </div>

    </section>
</x-app-layout>
