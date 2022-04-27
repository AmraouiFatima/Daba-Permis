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
                <button class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modal-center">اضافة حجز</button>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-12">

                {{-- Modal --}}
                <div>
                <input type="date" wire:modal="searchDate" name="searchDate">
    <!-- Modal -->
  <div wire:ignore.self class="modal center-modal fade" id="modal-center" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><b>اضافة حجز</b></h5>
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
								<div class="form-group">
									<label>اسم مدرسة القيادة</label>
									<div class="input-group mb-3">
										
                                        <select class="form-control" placeholder="اسم مدرسة القيادة" required wire:model="school"
                                                                    name="school" id="school">
                                            @foreach($schools as $s)
                                            <option>المرجو اختيار اسم المدرسة</option>
                                            <option value="{{$s->id}}">{{$s->name}}</option>
                                            @endforeach 
                                            
                                        </select>
									</div>
								</div>
								<div class="form-group">
									<label>اسم المرشح</label>
									<div class="input-group mb-3">

                                        <select class="form-control" placeholder="اسم المرشح" required wire:model="candidat"
                                                                    name="candidat" id="candidat">
                                            @foreach($candidats as $c)
                                            <option>المرجو اختيار اسم المرشح</option>
                                            <option value="{{$c->id}}">{{$c->user->fullname}}</option>
                                            @endforeach
                                            
                                        </select>
									</div>
								</div>
                                <div class="form-group">
									<label>اسم المدرب</label>
									<div class="input-group mb-3">
                                        <select class="form-control" placeholder="اسم المدرب" required wire:model="moniteur"
                                                                    name="moniteur" id="moniteur">
                                            @foreach($moniteurs as $m)
                                            <option>المرجو اختيار اسم المدرب</option>
                                            <option value="{{$m->id}}">{{$m->user->fullname}}</option>
                                            @endforeach
                                            
                                        </select>
									</div>
								</div>
                                <div class="form-group">
									<label>السيارة</label>
									<div class="input-group mb-3">
                                        <select class="form-control" placeholder="السيارة" required wire:model="car" wire:change="$set('idS','5')"
                                                                    name="car" id="car">
                                            @foreach($cars as $c)
                                            <option>المرجو اختيار السيارة</option>
                                            <option value="{{$c->id}}">{{$c->car_name}}</option>
                                            @endforeach
                                            
                                        </select>
									</div>
								</div>
                                <div class="form-group">
									<label>النوع</label>
									<div class="input-group mb-3">

                                        <select class="form-control" placeholder="النوع" required wire:model="type"
                                                                    name="type" id="type">
                                            <option>المرجو اختيار النوع </option>
                                            <option>كود القيادة</option>
                                            <option>السياقة</option>
                                        </select>
									</div>
								</div>
                                <div class="form-group">
								  <label>التاريخ و الوقت</label>
								  <div class="input-group mb-3">
									<input class="form-control" type="datetime-local" value="2022-04-19T13:45:00" id="example-datetime-local-input" required wire:model="date"
                                                                    name="date" id="date">
								  </div>
								</div>
							</div>
							<!-- /.box-body -->
                            <div class="box-footer">
                             <div class="modal-footer modal-footer-uniform">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary float-right">Save changes</button>
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
                                <input type="text" name="s">
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
                                            En cours
                                        </span> 
                                        @elseif($r->status == 1) 
                                        <span class="badge badge-pill badge-success">
                                            Valide
                                        </span>
                                        @elseif($r->status == -1) 
                                        <span class="badge badge-pill badge-danger">
                                            Invalide
                                        </span>
                                        @endif
                                        
                                    </td>
                                    
                                    <td>
                                        <button type="button"
                                            class="waves-effect waves-circle btn btn-circle btn-warning btn-xs mb-5 mr-2"><i
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
    </section>
</div>