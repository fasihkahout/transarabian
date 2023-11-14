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

    <h1>Edit Expense</h1>
    <form action="{{ route('updateexpenses', ['id' => $expense->id]) }}" method="POST" class="my-4" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-5 mx-6 form-group">
                <label for="name">Company Name:</label>
                <input type="text" name="company_n" class="form-control" id="company_n" placeholder="..." value="{{ $expense->company_n }}">
            </div>
            <div class="col-sm-5 mx-6 form-group">
                <label for="country">Expense Name:</label>
                <input type="text" name="expense" class="form-control" id="expense" placeholder="..." value="{{ $expense->expense }}">
            </div>
            <div class="col-sm-5 mx-6 form-group">
                <label for="amount">Expense Price:</label>
                <input type="text" name="expense_price" class="form-control" id="expense_price" placeholder="..." value="{{ $expense->expense_price }}">
            </div>
            <div class="col-sm-5 mx-6 form-group">
                <label for="charged_amount">Expense ID:</label>
                <input type="text" name="expense_id" class="form-control" id="expense_id" placeholder="..." value="{{ $expense->expense_id }}">
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
