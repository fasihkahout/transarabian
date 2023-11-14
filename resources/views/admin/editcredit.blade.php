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

    <h1>Edit Credit</h1>
    <form method="POST" action="{{ route('updatecredit', ['id' => $credit->id]) }}" >
    @csrf
    <div class="row">
    <div class="col-sm-5 mx-6 form-group">
        <label for="name">Credit Date :</label>
        <input type="date" name="credit_date" value="{{ $credit->credit_date }}" class="form-control" id="credit_date" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
        <label for="contry">Credit Amount:</label>
        <input type="text"  name="credit_amount" value="{{ $credit->credit_amount }}" class="form-control" id="credit_amount" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
        <label for="contry">Credit Description:</label>
        <input type="text" value="{{ $credit->credit_des }}"  name="credit_des" class="form-control" id="credit_des" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
        <label for="cnic">Bank Name</label>
        <select class="form-control"  name="accounts_id">
            @foreach ($banks as $bank)
            <option value="{{$bank->id}}" @if($bank->id==$credit->accounts_id)
                                    selected @endif>{{$bank->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-5 mx-6 form-group">
        <label for="contry">Title:</label>
        <input type="text"  name="credit_title" value="{{ $credit->credit_title }}" class="form-control" id="credit_title" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
        <label for="contry">Reference ID:</label>
        <input type="text"  name="credit_ref" value="{{ $credit->credit_ref }}" class="form-control" id="credit_ref" placeholder="...">
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
