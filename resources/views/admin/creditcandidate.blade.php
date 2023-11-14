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

<h1>Add Credit</h1>
<form method="POST" action="{{ route('postcredit', ['id' => $candidate->id]) }}">
@csrf
<div class="row">
  <div class="col-sm-5 mx-6 form-group">
    <label for="name">Credit Date :</label>
    <input type="date" name="credit_date" class="form-control" id="credit_date" placeholder="...">
  </div>
  <div class="col-sm-5 mx-6 form-group">
    <label for="contry">Credit Amount:</label>
    <input type="text"  name="credit_amount" class="form-control" id="credit_amount" placeholder="...">
  </div>
  <div class="col-sm-5 mx-6 form-group">
    <label for="contry">Credit Description:</label>
    <input type="text"  name="credit_des" class="form-control" id="credit_des" placeholder="...">
  </div>
  <div class="col-sm-5 mx-6 form-group">
    <label for="cnic">Bank Name</label>
    <select class="form-control" name="accounts_id">
        @foreach ($banks as $bank)
        <option value="{{$bank->id}}">{{$bank->name}}</option>
        @endforeach
    </select>
  </div>
  <div class="col-sm-5 mx-6 form-group">
    <label for="contry">Title:</label>
    <input type="text"  name="credit_title" class="form-control" id="credit_title" placeholder="...">
  </div>
  <div class="col-sm-5 mx-6 form-group">
    <label for="contry">Reference ID:</label>
    <input type="text"  name="credit_ref" class="form-control" id="credit_ref" placeholder="...">
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
