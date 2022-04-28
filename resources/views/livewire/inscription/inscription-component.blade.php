<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex">
            <div class="p-2">
                <div class="mr-auto">
                    <h3 class="page-title">طلبات التسجيل</h3>

                </div>
            </div>
            {{-- <div class="ml-auto p-2">
                <button class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modal-center">Ajouter une
                    inscription</button>
            </div> --}}
        </div>
    </div>

    <section class="content">
        <div class="row">
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
                                    <th>العملية</th>
                                </tr>

                                @foreach ($inscriptions as $i)
                                    <tr>
                                        <td><a href="#">{{ $i->fullname }}</a></td>
                                        <td>{{ $i->email }}</td>
                                        <td>{{ $i->type->type }}</td>
                                        <td>{{ $i->city }}</td>
                                        <td>{{ $i->cni }}</td>
                                        <td>{{ $i->phoneNo }}</td>

                                        <td>
                                            @if($i->status == 0)
                                            <span class="badge badge-pill badge-warning">
                                                في طور المعالجة
                                            </span> 
                                            @elseif($i->status == 1) 
                                            <span class="badge badge-pill badge-success">
                                                طلب مقبول
                                            </span>
                                            @elseif($i->status == -1) 
                                            <span class="badge badge-pill badge-danger">
                                                طلب مرفوض
                                            </span>
                                            @endif
                                            
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="waves-effect waves-circle btn btn-circle btn-success btn-xs mb-5 mr-2"><i
                                                    class="fa fa-check"></i></button>
                                            <button type="button"
                                                class="waves-effect waves-circle btn btn-circle btn-danger btn-xs mb-5 mr-2"><i
                                                    class="fa fa-ban"></i></button>
                                            <button type="button"
                                                class="waves-effect waves-circle btn btn-circle btn-primary btn-xs mb-5 mr-2 "><i
                                                    class="fa fa-eye"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <hr>
                    </div>
                    <div class="pr-3 pt-2 pb-2 ">

                        <div class="pull-left">
                            {{ $inscriptions->links('livewire-pagination') }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>
