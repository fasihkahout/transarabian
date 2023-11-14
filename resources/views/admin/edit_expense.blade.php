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
    <form action="{{ route('updateexpense', $expense->id) }}" method="POST">
        @csrf
        
        <div class="row">
            <div class="col-sm-5 mx-6 form-group">
    <label for="name">Select Expense Category :</label>
    <select class="form-control " name="expense_category_id" value="{{ old('expense_category_id') }}">
       
        @foreach($expenseCategory as $expenseCategory)
            <option value="{{$expenseCategory->id}}" @if($expenseCategory->id==$expense->expense_category_id)
                                    selected @endif>{{$expenseCategory->name}} - {{$expenseCategory->code}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-5 mx-6 form-group">
                <label for="fee">Title :</label>
                <input type="text"  name="title" class="form-control" value="{{ $expense->title }}" id="title" placeholder="...">
              </div>
               <div class="col-sm-5 mx-6 form-group">
                <label for="fee">Reference ID :</label>
                <input type="text"  name="ref_id" class="form-control" value="{{ $expense->ref_id }}" id="ref_id" placeholder="...">
              </div>
              
              <div class="col-sm-5 mx-6 form-group">
                  <label for="fee">Desciption:</label>
                  <input type="text"  name="description" class="form-control" value="{{ $expense->description }}" id="description" placeholder="...">
            </div>
            
            <div class="col-sm-5 mx-6 form-group">
                  <label for="fee">Date:</label>
                  <input type="date"  name="date" class="form-control" value="{{ $expense->date }}" id="date" placeholder="...">
            </div>

    <div class="col-sm-5 mx-6 form-group">
    <label for="name">Expense From:</label>
    <select class="form-control" name="accounts_id" value="{{ old('accounts_id') }}">
       
        @foreach($accounts as $account)
            <option value="{{$account->id}}" @if($account->id==$expense->accounts_id)
                                    selected @endif>{{$account->name}}</option>
        @endforeach
    </select>
</div>
         <div class="col-sm-5 mx-6 form-group">
                  <label for="fee">Expense Price:</label>
                  <input type="text"  name="expense_price" class="form-control" value="{{ $expense->expense_price }}" id="expense_price" placeholder="...">
            </div>      
              
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<!-- partial -->
@include('admin.script')
</body>
</html>
