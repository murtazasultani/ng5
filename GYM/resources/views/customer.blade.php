@extends('layouts.app')
@section('content')
@include('flash::message')
 <div class="row">
        <div class="col-md-12">
          <div class="tile">
             <button type="button" style="float: right;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal"><i class = "fa fa-plus"></i> &nbsp; 
              Add Students</button>
              <div class="col-md-6" style="background-color:#f0f0f0;height:35px;"><p style="text-align: center; font-weight: bold; padding-top: 5px">Student({{$count}})</p></div>
            <!-- Button trigger modal -->
            <div class="tile-body">
              <table class="table table-striped table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>F/name</th>
                    <th>Fees</th>
                    <th>Phone</th>
                    <th>Locker</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Gender</th>
                    <th width="6%" class="text-center">E</th>
                    <th width="6%" class="text-center">D</th>
                  </tr>
                </thead>
                <tbody>
                    
                 @foreach($customers as $customer)
                    <tr class="jsearch-row">
                    <td class="id">{{$customer->id}}</td>
                    <td class="jsearch-field name">{{$customer->name}}</td>
                    <td class="fname">{{$customer->fname}}</td>
                    <td class="fees">{{$customer->fees}}</td>
                    <td class="jsearch-field phone">{{$customer->phone}}</td>
                    <td class="locker">{{$customer->locker}}</td>
                    <td class="category">{{$customer->category}}</td>
                    <td class="data">{{$customer->date}}</td>
                    <td class="gender">{{$customer->gender}}</td>
                    <td class="text-center">
                      <a href="#" class="customer_edit_action" customer_id="{{ $customer->id }}"><i class="fas fa-edit"></i></a>
                    </td>
                    <td class="text-center">
                      <a href="{{ route('customer.destroy', [$customer->id]) }}" ><i class="fas fa-trash-alt"></i></a>
                    </td>
                    </tr>
                  @endforeach 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('customer.store') }}" method="POST">
          {{csrf_field()}}
          <div class="row">
            <div class="form-group col-md-6">
              {{-- <label for="recipient-name" class="col-form-label">Name</label --}}
              <input type="text" class="form-control btn-sm" required id="recipient-name" placeholder="Name" name="name">
            </div>
            <div class="form-group col-md-6" >
              {{-- <label for="fname" class="col-form-label">F/name</label> --}}
              <input type="text" name="fname" required class="form-control btn-sm" placeholder="f/name">
            </div>
            <div class="form-group col-md-6">
             {{--  <label for="fees" class="col-form-label">Fees</label> --}}
              <input type="text" name="fees" required class="form-control btn-sm" placeholder="Fees">
            </div>
            <div class="form-group col-md-6">
            {{--   <label for="fees" class="col-form-label">Phone</label> --}}
              <input type="text" name="phone" required class="form-control btn-sm" placeholder="Phone">
            </div>
            <div class="form-group col-md-6">
              {{-- <label for="fees" class="col-form-label">Locker</label> --}}
              <input type="text" name="locker" required class="form-control btn-sm" placeholder="Locker">
            </div>
            <div class="form-group col-md-6">
             <select name="category" class="form-control btn-sm" required>
               <option value="some" disabled selected>Category</option>
               <option value="fitness">Fitness</option>
               <option value="badybilding">Badybilding</option>
             </select>
            </div>
            <div class="form-group col-md-6">
              <input type="date" required name="date" class="form-control btn-sm" placeholder="Date">
            </div>
            <div class="form-group col-md-6">
             <select name="gender" class="form-control btn-sm" required>
               <option value="some" disabled selected >Gender</option>
               <option value="male">Male</option>
               <option value="female">Female</option>
             </select>
            </div>
          </div>
          <div class="modal-footer  no-border">
            <button type="submit" class="btn btn-primary btn-sm">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--====================================================
=            modal for editing Customer            =
=====================================================-->
<div class="modal modal-customer-edit fade" tabindex=-1 role=dialog aria-hidden=true>
    <div class="modal-dialog" role="document">
    {{-- customer edit form --}}
    </div>
</div>

<!--====================================================
=            modal for deleting customer            =
=====================================================-->
<div class="modal modal-customer-delete fade" tabindex=-1 role=dialog aria-hidden=true>
    <div class="modal-dialog" role="document">
    {{-- customer delete form --}}
    </div>
</div>
<script type="text/javascript">
  
$(document).on('click','.customer_edit_action',function(){
  var id = $(this).attr('customer_id');
  $('.modal-footer').css('visibility','hidden');
  $('.customer_edit').html('<div class = "text-center"><img src = "../images/preloader_3.gif"></div>');
  $.ajax({
    type:'get',
    url:'/customer/' + id + '/edit',
    success:function(output){
      $('.modal-customer-edit .modal-dialog').html(output);
      $('.modal-footer').css('visibility','visible');
    }
  });
  $('.modal-customer-edit').modal('show');
});

</script>
@endsection