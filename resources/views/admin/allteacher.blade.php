@extends('layout')
@section('content')




          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Teachers table</h2>

                <p class="alert-success">
                <?php 
                  $exception=Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception', null);
                  }
                ?>
              </p>

              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Fund</th>
                          <th>Class</th>
                          <th>Image</th>
                          
                          <!-- <th>Email</th> -->
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($all_teacher_info as $v_teacher)
                      <tr>
                          <td>{{$v_teacher->teachers_name}}</td>
                          <td>{{$v_teacher->teachers_phone}}</td>
                          <td>{{$v_teacher->teachers_balance}}</td>
                          <td>
                          	 @if($v_teacher->teachers_dept==1)
                          	 <p class="btn btn-outline-primary"><span class="label label-success">{{'Play'}}</span></p>
                          	 @elseif($v_teacher->teachers_dept==2)
                          	 <p class="btn btn-outline-warning"><span class="label label-success">{{'Nursery'}}</span></p>
                          	 @elseif($v_teacher->teachers_dept==3)
                          	 <p class="btn btn-outline-primary"><span class="label label-success">{{'One'}}</span></p>
                          	 @elseif($v_teacher->teachers_dept==4)
                          	 <p class="btn btn-outline-warning"><span class="label label-success">{{'Two'}}</span></p>
                          	 @elseif($v_teacher->teachers_dept==5)
                          	 <p class="btn btn-outline-primary"><span class="label label-success">{{'Three'}}</span></p>
                          	 @elseif($v_teacher->teachers_dept==6)
                          	 <p class="btn btn-outline-warning"><span class="label label-success">{{'Four'}}</span></p>
                          	 @elseif($v_teacher->teachers_dept==7)
                          	 <p class="btn btn-outline-primary"><span class="label label-success">{{'Five'}}</span></p>
                             @elseif($v_teacher->teachers_dept==8)
                             <p class="btn btn-outline-primary"><span class="label label-success">{{'Six'}}</span></p>
                             @elseif($v_teacher->teachers_dept==9)
                             <p class="btn btn-outline-primary"><span class="label label-success">{{'Seven'}}</span></p>
                             @elseif($v_teacher->teachers_dept==10)
                             <p class="btn btn-outline-primary"><span class="label label-success">{{'Eight'}}</span></p>
                             @elseif($v_teacher->teachers_dept==11)
                             <p class="btn btn-outline-primary"><span class="label label-success">{{'Nine'}}</span></p>
                             @elseif($v_teacher->teachers_dept==12)
                             <p class="btn btn-outline-primary"><span class="label label-success">{{'Ten'}}</span></p>
                          	 
                          	 @endif
                          </td>
                          <td><img src="{{URL::to($v_teacher->teachers_image)}}" height="70" width="70" style="border-radius: 50%;"></td>
                           
                          
                          <td>
                            <a href="#"><button class="btn btn-outline-primary">View</button></a>
                            <a href="#"><button class="btn btn-outline-warning">Edit</button></a>
                            <a href="#" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                          </td>
                          
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        

@endsection