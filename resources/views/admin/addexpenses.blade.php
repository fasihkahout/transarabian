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
        {{session()->get('message')}}
      </div>
      @endif

<h1>Add Expenses</h1>
<form action="{{'/postexpenses'}}" method="POST" class="my-4" enctype="multipart/form-data">
@csrf
<div class="row">

    <div class="col-sm-5 mx-12 form-group">
        <label for="cnic">Company Name</label>
        <select class="form-control" name="company_n">
            @foreach ($companies as $company)
            <option value="{{$company->company_name}}">{{$company->company_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="name">Expense Name</label>
      <input type="text"  name="expense" class="form-control" id="country" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="price">Expense Price</label>
      <input type="text"  name="expense_price" class="form-control" id="amount" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="id">Expense ID</label>
      <input type="text"  name="expense_id" class="form-control" id="charged_amount" placeholder="...">
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
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
