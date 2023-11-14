<!DOCTYPE html>
<html lang="en">
@include('admin.head')
@include('admin.navbar')
<!-- partial -->
@include('admin.sidebar')
<div class="col-lg-10 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Company Details</h1>
            <div>
                <h3>Company Name: {{ $company->company_name }}</h3>
                <p>Country Name: {{ $company->country }}</p>
                <p>Contract Amount: {{ $company->amount }}</p>
                <p>Amount to be charged: {{ $company->charged_amount }}</p>
            </div>
            <div class="mt-4">
                <h2>Expenses</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Expense Name</th>
                            <th>Expense Price</th>
                            <th>Expense ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expenses as $expense)
                        <tr>
                            <td>{{ $expense->expense }}</td>
                            <td>{{ $expense->expense_price }}</td>
                            <td>{{ $expense->expense_id }}</td>
                            <td>
                                <a href="{{ route('deleteexpenses', ['id' => $expense->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this expense?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- partial -->
@include('admin.script')
</body>
</html>
