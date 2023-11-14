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

    <h1>Edit Account</h1>
    <form action="{{ route('updateaccount', ['id' => $accounts->id]) }}" method="POST" class="my-4" enctype="multipart/form-data">
        @csrf
       <div class="row">
            <div class="col-sm-5 mx-6 form-group">
            <label for="account">Account No</label>
            <input type="text" name="account" class="form-control" id="account" value="{{ $accounts->account }}" placeholder="...">
            </div>
            <div class="col-sm-5 mx-6 form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $accounts->name }}" placeholder="...">
            </div>
            <div class="col-sm-5 mx-6 form-group">
            <label for="balance">Initial Balance</label>
            <input type="text"  name="balance" class="form-control" id="balance" value="{{ $accounts->balance }}" placeholder="...">
            </div>
            <div class="col-sm-5 mx-6 form-group">
            <label for="note">Note</label>
            <input type="text"  name="note" class="form-control" id="note" value="{{ $accounts->note }}" placeholder="...">
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
