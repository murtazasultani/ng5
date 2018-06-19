
<div id="contact-modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 style="float: left;">Edit Employee</h3>
				<a class="close" data-dismiss="modal">×</a>
			</div>
			<form id="contactForm" name="contact" role="form" action="/customer/{{$customer->id}}" method="POST">
				{{csrf_field()}}
				<div class="modal-body">				
			    <div class="form-group">
            {{-- <label for="recipient-name" class="col-form-label">Name</label --}}
               <input type="text" value="{{$customer->name}}" class="form-control btn-sm" required id="recipient-name" placeholder="Name" name="name">
               </div>
              <div class="form-group">
            {{-- <label for="fname" class="col-form-label">F/name</label> --}}
              <input type="text" value="{{$customer->fname}}" name="fname" required class="form-control btn-sm" placeholder="f/name">
              </div>
             <div class="form-group">
           {{--  <label for="fees" class="col-form-label">Fees</label> --}}
             <input type="text" name="fees" value="{{$customer->fees}}" required class="form-control btn-sm" placeholder="Fees">
             </div>
            <div class="form-group">
          {{--   <label for="fees" class="col-form-label">Phone</label> --}}
            <input type="text" value="{{$customer->phone}}" name="phone" required class="form-control btn-sm" placeholder="Phone">
            </div>
            <div class="form-group">
            {{-- <label for="fees" class="col-form-label">Locker</label> --}}
             <input type="text" value="{{$customer->locker}}" name="locker" required class="form-control btn-sm" placeholder="Locker">
          </div>
            <div class="form-group">
             <select name="category" class="form-control btn-sm">
               <option value="some">Category</option>
               <option value="fitness">Fitness</option>
               <option value="badybilding">Badybilding</option>
             </select>
            {{-- <input type="text" name="category" class="form-control" placeholder="Locker"> --}}

          </div>
          <div class="form-group">
            <input type="date" value="{{$customer->date}}" required name="date" class="form-control btn-sm" placeholder="Date">
          </div>
            <div class="form-group">
             <select name="gender" class="form-control btn-sm " required>
               <option value="some" >Gender</option>
               <option value="male">Male</option>
               <option value="female">Female</option>
             </select>
          </div>
				<div class="modal-footer">					
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){	
	$("#contactForm").submit(function(event){
		submitForm();
		return false;
	});
});
</script>