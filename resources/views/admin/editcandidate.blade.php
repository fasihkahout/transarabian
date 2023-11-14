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

    <h1>Edit Candidate</h1>
    <form action="{{ route('updatecandidate', $candidate->id) }}" method="POST">
        @csrf
        
        <div class="row">
            <div class="col-sm-5 mx-6 form-group">
    <label for="name">Select Candidate:</label>
    <select class="form-control " name="jobs_id" value="{{ old('jobs_id') }}">
       
        @foreach($jobs as $job)
            <option value="{{$job->id}}" @if($job->id==$candidate->jobs_id)
                                    selected @endif>{{$job->firstname}} {{$job->lastname}} - {{$job->passportno}}</option>
        @endforeach
    </select>
</div>

    <div class="col-sm-5 mx-6 form-group">
    <label for="name">Select Company:</label>
    <select class="form-control" name="companies_id" value="{{ old('companies_id') }}">
       
        @foreach($companies as $company)
            <option value="{{$company->id}}" @if($company->id==$candidate->companies_id)
                                    selected @endif>{{$company->company_name}}</option>
        @endforeach
    </select>
</div>
              <div class="col-sm-5 mx-6 form-group">
                <label for="fee">Amount to be charged :</label>
                <input type="text"  name="amount_ch" class="form-control" value="{{ $candidate->amount_ch }}" id="amount_ch" placeholder="...">
              </div>
              <div class="col-sm-5 mx-6 form-group">
                  <label for="fee">Received:</label>
                  <input type="text"  name="received" class="form-control" value="{{ $candidate->received }}" id="received" placeholder="...">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<!-- partial -->
@include('admin.script')
</body>
</html>
