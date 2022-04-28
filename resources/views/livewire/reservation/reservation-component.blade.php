<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex">
            <div class="p-2">
                <div class="mr-auto">
                    <h3 class="page-title">Résevations</h3>
                </div>
            </div>
            <div class="ml-auto p-2">
                <button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#createReservation">اضافة حجز</button>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                @if (session()->has('reservationUpdated'))
                    <script>
                        swal('عمل جيد !', '{{ session('reservationUpdated') }}', 'success', {
                            Button: "استمر",
                        });
                    </script>
                @endif
                @if (session()->has('newReservationAdded'))
                    <script>
                        swal('عمل جيد !', '{{ session('newReservationAdded') }}', 'success', {
                            Button: "استمر",
                        });
                    </script>
                @endif
                @if (session()->has('reservationDeleted'))
                    <script>
                        swal('مسح الحجز', '{{ session('reservationDeleted') }}', 'warning', {
                            Button: "استمر",
                        });
                    </script>
                @endif
                {{-- Modal --}}
                <div>
                    <div class="row">
                        <div class="form-group row col-3">
								  <label class="col-sm-1 col-form-label">من</label>
								  <div class="col-sm-10">
									<input class="form-control mb-3" type="datetime-local" wire:model="fromDate" name="fromDate">
								  </div>
                        </div>
                        <div class="form-group row col-3">
								  <label class="col-sm-1 col-form-label">الى</label>
								  <div class="col-sm-10">
									<input class="form-control mb-3" type="datetime-local" wire:model="toDate" name="toDate">
								  </div>
                        </div>
                        <div class="form-group row col-6">
								  <label class="col-sm-3 col-form-label">اسم المرشح</label>
								  <div class="col-sm-8">
									<select class="form-control mb-3" wire:model="searchCandidat">
                                        <option>المرجو اختيار اسم المرشح</option>
                                            @foreach ($candidats as $c)
                                                <option value="{{ $c->id }}"> {{ $c->user->fullname }}</option>
                                            @endforeach

                                    </select>
								  </div>
                        </div>
                    </div>

                    


                    <div wire:ignore.self class="modal center-modal fade" id="createReservation" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>حجز جديد</b></h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-lg-12 col-12">
                        <div class="box">
                            <!-- /.box-header -->
                            <form class="form" wire:submit.prevent="addReservation">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>اسم مدرسة القيادة</label>
                                                <div class="input-group mb-3">

                                                    <select class="form-control" placeholder="اسم مدرسة القيادة"
                                                        required wire:model="school" name="school" id="school">
                                                        <option>المرجو اختيار اسم المدرسة</option>
                                                        @foreach ($schools as $s)
                                                            <option value="{{ $s->id }}">
                                                                {{ $s->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>اسم المرشح</label>
                                                <div class="input-group mb-3">

                                                    <select class="form-control" placeholder="اسم المرشح" required
                                                        wire:model="candidat" name="candidat" id="candidat">
                                                        <option>المرجو اختيار اسم المرشح</option>
                                                        @foreach ($candidats as $c)
                                                            
                                                            <option value="{{ $c->id }}">
                                                                {{ $c->user->fullname }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                        </div>




                                    </div>


                                    <div class="form-group">
                                        <label>اسم المدرب</label>
                                        <div class="input-group mb-3">
                                            <select class="form-control" placeholder="اسم المدرب" required
                                                wire:model="moniteur" name="moniteur" id="moniteur">
                                                <option>المرجو اختيار اسم المدرب</option>
                                                @foreach ($moniteurs as $m)
                                                    
                                                    <option value="{{ $m->id }}">
                                                        {{ $m->user->fullname }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>السيارة</label>
                                                <div class="input-group mb-3">
                                                    <select class="form-control" placeholder="السيارة" required
                                                        wire:model="car"  name="car"
                                                        id="car">
                                                        <option>المرجو اختيار السيارة</option>
                                                        @foreach ($cars as $c)
                                                            
                                                            <option value="{{ $c->id }}">
                                                                {{ $c->car_name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>النوع</label>
                                                <div class="input-group mb-3">

                                                    <select class="form-control" placeholder="النوع" required
                                                        wire:model="type" name="type" id="type">
                                                        <option>المرجو اختيار النوع </option>
                                                        <option>كود القيادة</option>
                                                        <option>السياقة</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>


                                    </div>


                                    <div class="form-group">
                                        <label>التاريخ و الوقت</label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" type="datetime-local"
                                                value="2022-04-19T13:45:00"  required
                                                wire:model="date_res" name="date_res" id="date_res">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="modal-footer modal-footer-uniform">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">الغاء</button>
                                        <button type="submit" class="btn btn-primary float-right">حفظ البيانات</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
                    </div>

                         {{-- modal edit --}}
     <div wire:ignore.self class="modal center-modal fade" id="modal-edit" tabindex="-1">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title"><b>تعديل الحجز</b></h5>
                     <button type="button" class="close" data-dismiss="modal">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">

                     <div class="col-lg-12 col-12">
                         <div class="box">
                             <!-- /.box-header -->
                             <form class="form" wire:submit.prevent="updateReservation">
                                 <div class="box-body">
                                     <div class="row">
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>اسم مدرسة القيادة</label>
                                                 <div class="input-group mb-3">

                                                     <select class="form-control" placeholder="اسم مدرسة القيادة"
                                                         required wire:model="school" name="school" id="school">
                                                         @foreach ($schools as $s)
                                                             <option value="{{ $s->id }}">{{ $s->name }}
                                                             </option>
                                                         @endforeach

                                                     </select>
                                                 </div>
                                             </div>

                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>اسم المرشح</label>
                                                 <div class="input-group mb-3">

                                                     <select class="form-control" placeholder="اسم المرشح" required
                                                         wire:model="candidat" name="candidat" id="candidat">
                                                         @foreach ($candidats as $c)
                                                             <option value="{{ $c->id }}">
                                                                 {{ $c->user->fullname }}</option>
                                                         @endforeach

                                                     </select>
                                                 </div>
                                             </div>

                                         </div>
                                     </div>


                                     <div class="form-group">
                                         <label>اسم المدرب</label>
                                         <div class="input-group mb-3">

                                             <select class="form-control" placeholder="اسم المدرب" required
                                                 wire:model="moniteur" name="moniteur" id="moniteur">
                                                 @foreach ($moniteurs as $m)
                                                     <option value="{{ $m->id }}">
                                                         {{ $m->user->fullname }}</option>
                                                 @endforeach

                                             </select>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>السيارة</label>
                                                 <div class="input-group mb-3">

                                                     <select class="form-control" placeholder="السيارة" required
                                                         wire:model="car" name="car" id="car">
                                                         @foreach ($cars as $c)
                                                             <option value="{{ $c->id }}">
                                                                 {{ $c->car_name }}</option>
                                                         @endforeach

                                                     </select>
                                                 </div>
                                             </div>

                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>النوع</label>
                                                 <div class="input-group mb-3">

                                                     <select class="form-control" placeholder="النوع" required
                                                         wire:model="type" name="type" id="type">

                                                         <option>كود القيادة</option>
                                                         <option>السياقة</option>
                                                     </select>
                                                 </div>
                                             </div>

                                         </div>
                                     </div>


                                     <div class="form-group">
                                         <label>التاريخ و الوقت</label>
                                         <div class="input-group mb-3">
                                             <input class="form-control" type="datetime-local" required wire:model="date_res"
                                                 name="date_res" id="date_res">
                                         </div>
                                     </div>
                                 </div>
                                 <!-- /.box-body -->
                                 <div class="box-footer">
                                     <div class="modal-footer modal-footer-uniform">
                                         <button type="button" class="btn btn-secondary"
                                             data-dismiss="modal">الغاء</button>
                                         <button type="submit" class="btn btn-primary float-right">حفظ البيانات</button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                         <!-- /.box -->
                     </div>
                 </div>
             </div>
         </div>
     </div>

                        <!-- /.modal -->
                    </div>
                    
                    <div class="box mt-2">
                        <div class="box-header with-border">
                            <h4 class="box-title">قائمة التسجيلات</h4>
                            
                            <div class="box-controls pull-right">
                                <div class="lookup lookup-circle lookup-right">
                                    <input type="text" wire:model="searchCandidat" name="searchCandidat" id="searchCandidat" placeholder="اسم المرشح">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>رقم الحجز</th>
                                        <th>اسم مدرسة القيادة</th>
                                        <th>اسم المرشح</th>
                                        <th>اسم المدرب</th>
                                        <th>السيارة</th>
                                        <th>النوع</th>
                                        <th>التاريخ</th>
                                        <th>الحالة</th>
                                        <th>action</th>
                                    </tr>
                                    @foreach ($reservations as $r)
                                    <tr>
                                        <td><a href="#">{{ $r->id}}</a></td>
                                        <td>{{ $r->school->name }}</td>
                                        <td>{{ $r->candidat->user->fullname }}</td>
                                        <td>{{ $r->moniteur->user->fullname }}</td>
                                        <td>{{ $r->parking->car_name }}</td>
                                        <td>{{ $r->type }}</td>
                                        <td>{{ $r->date }}</td>
                                        
                                        <td>
                                            @if($r->status == 0)
                                            <span class="badge badge-pill badge-warning">
                                                في طور المعالجة
                                            </span> 
                                            @elseif($r->status == 1) 
                                            <span class="badge badge-pill badge-success">
                                                مصادق عليه
                                            </span>
                                            @elseif($r->status == -1) 
                                            <span class="badge badge-pill badge-danger">
                                                مرفوض
                                            </span>
                                            @endif
                                            
                                        </td>
                                        
                                        <td>
                                            <button type="button" wire:click.prevent="editReservation({{ $r->id }})"
                                                class="waves-effect waves-circle btn btn-circle btn-warning btn-xs mb-5 mr-2" data-toggle="modal" data-target="#modal-edit"><i
                                                    class="fa fa-edit"></i></button>
                                            <button type="button" wire:click.prevent="deleteReservation({{ $r->id }})"
                                                class="waves-effect waves-circle btn btn-circle btn-danger btn-xs mb-5 mr-2"><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <hr>
                        </div>
                        {{-- Pagination --}}
                        <div class="pr-3 pt-2 pb-2 ">
                            <div class="pull-left">
                                {{ $reservations->links('livewire-pagination') }}
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </section>
</div>