<div class=modal-content>
    <form action="{{ route('invoices.destroy', $id) }}" method="POST">
        {!! csrf_field() !!}
        {{ method_field('DELETE') }}
        <div class=modal-header>
            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class=modal-body>
            <div class="table-responsive-sm">
                <p>Are you sure you want to delete the entire document?<p>
            </div>
        </div>
        <div class="modal-footer no-border">
            <button type=button class="btn btn-sm btn-default" data-dismiss=modal>Cancel</button>
            <button type=submit class="btn btn-sm btn-danger">Delete</button>
        </div>
    </form>
</div>
