<form action="{{ route('customer.update', [$customer->id]) }}" method="POST" accept-charset="utf-8">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class=modal-content>
        <div class=modal-header>
            <h5 class="modal-title" id="exampleModalLabel">Update Invoice</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class=modal-body>
        <div class="row">
            <div class="form-group col-md-6">
              {{-- <label for="recipient-name" class="col-form-label">Name</label --}}
              <input type="text" class="form-control btn-sm" value="{{ $customer->name }}" name="name">
            </div>
            <div class="form-group col-md-6" >
              {{-- <label for="fname" class="col-form-label">F/name</label> --}}
              <input type="text" name="fname" class="form-control btn-sm" value="{{ $customer->fname }}">
            </div>
            <div class="form-group col-md-6">
             {{--  <label for="fees" class="col-form-label">Fees</label> --}}
              <input type="text" name="fees"  class="form-control btn-sm" value="{{ $customer->fees }}">
            </div>
            <div class="form-group col-md-6">
            {{--   <label for="fees" class="col-form-label">Phone</label> --}}
              <input type="text" name="phone" class="form-control btn-sm" value="{{ $customer->phone }}">
            </div>
            <div class="form-group col-md-6">
              {{-- <label for="fees" class="col-form-label">Locker</label> --}}
              <input type="text" name="locker"class="form-control btn-sm" value="{{ $customer->locker }}">
            </div>
            <div class="form-group col-md-6">
                <select name="category" class="form-control btn-sm" required>
                    @if($customer->category == 'fitness')
                       <option value="fitness">Fitness</option>
                       <option value="badybilding">Badybilding</option>
                    @else
                       <option value="badybilding">Badybilding</option>
                       <option value="fitness">Fitness</option>
                    @endif
                </select>
            </div>
            <div class="form-group col-md-6">
              <input type="date" required name="date" class="form-control btn-sm" value="{{ $customer->date }}">
            </div>
            <div class="form-group col-md-6">
                <select name="gender" class="form-control btn-sm" required>
                    @if($customer->gender == 'male')
                       <option value="male">Male</option>
                       <option value="female">Female</option>
                    @else
                       <option value="female">Female</option>
                       <option value="male">Male</option>
                    @endif
             </select>
            </div>
          </div>
        </div>
        <div class="modal-footer no-border">
            <button type=submit class="btn btn-sm btn-primary">Send</button>
        </div>
    </div>
</form>