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

    <h1>Edit Person Ledger</h1>
    <form action="{{ route('updatepersonledger', $personLedger->id) }}" method="POST">
        @csrf
        
        <div class="row">

<div class="col-sm-5 mx-6 form-group">
                <label for="fee">Title :</label>
                <input type="text"  name="title" class="form-control" value="{{ $personLedger->title }}" id="title" placeholder="...">
              </div>
               <div class="col-sm-5 mx-6 form-group">
                <label for="fee">Reference ID :</label>
                <input type="text"  name="ref_id" class="form-control" value="{{ $personLedger->ref_id }}" id="ref_id" placeholder="...">
              </div>
              
              <div class="col-sm-5 mx-6 form-group">
                  <label for="fee">Desciption:</label>
                  <input type="text"  name="description" class="form-control" value="{{ $personLedger->description }}" id="description" placeholder="...">
            </div>
            
            <div class="col-sm-5 mx-6 form-group">
                  <label for="fee">Date:</label>
                  <input type="date"  name="date" class="form-control" value="{{ $personLedger->date }}" id="date" placeholder="...">
            </div>

    <div class="col-sm-5 mx-6 form-group">
    <label for="name">Expense From:</label>
    <select class="form-control" name="accounts_id" value="{{ old('accounts_id') }}">
       
        @foreach($accounts as $account)
            <option value="{{$account->id}}" @if($account->id==$personLedger->accounts_id)
                                    selected @endif>{{$account->name}}</option>
        @endforeach
    </select>
</div>
         <div class="col-sm-5 mx-6 form-group">
    <label for="fee">Credit Amount:</label>
    <input type="text" name="credit_amount" class="form-control" value="{{ $personLedger->credit_amount ?? 0 }}" id="credit_amount" placeholder="...">
</div> 
            
<div class="col-sm-5 mx-6 form-group">
    <label for="fee">Debit Amount:</label>
    <input type="text" name="debit_amount" class="form-control" value="{{ $personLedger->debit_amount ?? 0 }}" id="debit_amount" placeholder="...">
</div>
 
              
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<!-- partial -->
@include('admin.script')
</body>
</html>
