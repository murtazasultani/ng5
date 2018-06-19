       <div class="row">
        <div class="col-md-12">
          <div class="tile">
             <button type="button" style="direction: rtl;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
              Add Employee </button>
              <div class="col-md-6" style="background-color:#f0f0f0;height:35px;"><p style="text-align: center; font-weight: bold;">Student({{$count}})</p></div>
            <!-- Button trigger modal -->
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Fname</th>
                    <th>Fees</th>
                    <th>Phone</th>
                    <th>Locker</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Gender</th>
                    <th>E</th>
                    <th>D</th>
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
                          <td align="center">
                            <a href="/customer/{{$customer->id}}/edit" id="contact"  data-toggle="modal" data-target="#contact-modal"><i class="fas fa-edit"></i></a>
                          </td>
                          <td align="center">
                            <a href="/delete/{{$customer->id}}" class="fas fa-trash-alt"></a>
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
        <form action="/customer" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            {{-- <label for="recipient-name" class="col-form-label">Name</label --}}
            <input type="text" class="form-control btn-sm" required id="recipient-name" placeholder="Name" name="name">
          </div>
          <div class="form-group" >
            {{-- <label for="fname" class="col-form-label">F/name</label> --}}
            <input type="text" name="fname" required class="form-control btn-sm" placeholder="f/name">
          </div>
          <div class="form-group">
           {{--  <label for="fees" class="col-form-label">Fees</label> --}}
            <input type="text" name="fees" required class="form-control btn-sm" placeholder="Fees">
          </div>
            <div class="form-group">
          {{--   <label for="fees" class="col-form-label">Phone</label> --}}
            <input type="text" name="phone" required class="form-control btn-sm" placeholder="Phone">
          </div>
            <div class="form-group">
            {{-- <label for="fees" class="col-form-label">Locker</label> --}}
            <input type="text" name="locker" required class="form-control btn-sm" placeholder="Locker">
          </div>
            <div class="form-group">
             <select name="category" class="form-control btn-sm" required>
               <option value="some" disabled selected>Category</option>
               <option value="fitness">Fitness</option>
               <option value="badybilding">Badybilding</option>
             </select>
            {{-- <input type="text" name="category" class="form-control" placeholder="Locker"> --}}

          </div>
          <div class="form-group">
            <input type="date" required name="date" class="form-control btn-sm" placeholder="Date">
          </div>
            <div class="form-group">
             <select name="gender" class="form-control btn-sm" required>
               <option value="some" disabled selected >Gender</option>
               <option value="male">Male</option>
               <option value="female">Female</option>
             </select>
          </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm" value="Add">Register</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>

@include('layouts.edit-table')