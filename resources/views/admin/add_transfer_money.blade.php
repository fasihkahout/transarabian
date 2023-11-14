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

<h1>Add Transfer Money</h1>
<form action="{{ route('posttransferMoney') }}" method="POST" class="my-4" enctype="multipart/form-data">
@csrf
<div class="row">

<div class="col-sm-5 mx-6 form-group">
    <label for="name">From Bank :</label>
    <select class="form-control" name="accounts_id" value="{{ old('accounts_id') }}">
       
        @foreach($accounts as $account)
            <option value="{{$account->id}}">{{$account->name}}</option>
        @endforeach
    </select>
</div>
<div class="col-sm-5 mx-6 form-group">
      <label for="fee">Title :</label>
      <input type="text"  name="title" class="form-control" id="title" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="fee">Refernce ID :</label>
      <input type="text"  name="ref_id" class="form-control" id="ref_id" placeholder="...">
    </div>
     <div class="col-sm-5 mx-6 form-group">
      <label for="fee">Date :</label>
      <input type="date"  name="date" class="form-control" id="date" >
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="fee">Credit Amount :</label>
      <input type="text"  name="credit" class="form-control" id="credit" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="fee">Debit Amount :</label>
      <input type="text"  name="debit" class="form-control" id="debit" placeholder="...">
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <!-- partial -->
    @include('admin.script')

  </body>
</html>
