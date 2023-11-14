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

    <h1>Edit Debit</h1>
    <form method="POST" action="{{ route('updatedebit', ['id' => $debit->id]) }}" >
    @csrf
   <div class="row">
        <div class="col-sm-5 mx-6 form-group">
            <label for="name">Debit Date :</label>
            <input type="date" name="debit_date" value="{{ $debit->debit_date }}" class="form-control" id="debit_date" placeholder="...">
        </div>
        <div class="col-sm-5 mx-6 form-group">
            <label for="contry">Debit Amount:</label>
            <input type="text"  name="debit_amount" value="{{ $debit->debit_amount }}" class="form-control" id="debit_amount" placeholder="...">
        </div>
        <div class="col-sm-5 mx-6 form-group">
            <label for="contry">Debit Description:</label>
            <input type="text"  name="debit_des" value="{{ $debit->debit_des }}" class="form-control" id="debit_des" placeholder="...">
        </div>
        <div class="col-sm-5 mx-6 form-group">
            <label for="cnic">Bank Name</label>
            <select class="form-control" name="accounts_id">
                @foreach ($banks as $bank)
               <option value="{{$bank->id}}" @if($bank->id==$debit->accounts_id)
                                    selected @endif>{{$bank->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-5 mx-6 form-group">
            <label for="contry">Title:</label>
            <input type="text"  name="debit_title" value="{{ $debit->debit_title }}" class="form-control" id="debit_title" placeholder="...">
        </div>
        <div class="col-sm-5 mx-6 form-group">
            <label for="contry">Reference ID:</label>
            <input type="text"  name="debit_ref" value="{{ $debit->debit_ref }}" class="form-control" id="debit_ref" placeholder="...">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
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
