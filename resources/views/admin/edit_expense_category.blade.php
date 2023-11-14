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

    <h1>Edit Company</h1>
    <form action="{{ route('updateexpensecategory', ['id' => $expenseCategories->id]) }}" method="POST" class="my-4" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-5 mx-6 form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="..." value="{{ $expenseCategories->name }}">
            </div>
            <div class="col-sm-5 mx-6 form-group">
                <label for="country">Code:</label>
                <input type="text" name="code" class="form-control" id="code" placeholder="..." value="{{ $expenseCategories->code }}">
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
