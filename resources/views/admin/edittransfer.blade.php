<!DOCTYPE html>
<html lang="en">
@include('admin.head')
@include('admin.navbar')
<!-- partial -->
@include('admin.sidebar')
<!-- partial -->
<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{ session()->get('message') }}
    </div>
    @endif

    <h1>Edit Money Transfer</h1>
    <form action="{{ route('updatetransfer', ['id' => $accounts->id]) }}" method="POST" class="my-4" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-5 mx-6 form-group">
            <label for="transfer_date">Date</label>
            <input type="text" name="transfer_date" class="form-control" value="{{ $expense->company_n }}" id="transfer_date" placeholder="...">
            </div>
            <div class="col-sm-5 mx-6 form-group">
            <label for="reference">Reference No.</label>
            <input type="text" name="reference" class="form-control" value="{{ $expense->company_n }}" id="reference" placeholder="...">
            </div>
            <div class="col-sm-5 mx-6 form-group">
            <label for="from_account">From Account</label>
            <input type="text"  name="from_account" class="form-control" value="{{ $expense->company_n }}" id="from_account" placeholder="...">
            </div>
            <div class="col-sm-5 mx-6 form-group">
            <label for="to_account">To Account</label>
            <input type="text"  name="to_account" class="form-control" value="{{ $expense->company_n }}" id="to_account" placeholder="...">
            </div>
            <div class="col-sm-5 mx-6 form-group">
            <label for="transfer_amount">Amount</label>
            <input type="text"  name="transfer_amount" class="form-control" value="{{ $expense->company_n }}" id="transfer_amount" placeholder="...">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
<!-- partial -->
@include('admin.script')
</body>
</html>
