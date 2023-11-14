<!DOCTYPE html>
<html lang="en">
@include('admin.head')
@include('admin.navbar')
<!-- partial -->
@include('admin.sidebar')
<!-- partial -->

<div class="col-lg-10 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Person Ledger</h1>

      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Date</th>
              <th>Title</th>
              <th>Reference ID</th>
              <th>Description</th>
              <th>Bank</th>
              <th>Credit Amount</th>
              <th>Debit Amount</th>
              <th>Balance</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($personLedger as $entry)
            <tr>
              <td>{{ $entry->date }}</td>
              <td>{{ $entry->title }}</td>
              <td>{{ $entry->ref_id }}</td>
              <td>{{ $entry->description }}</td>
              <td>{{ isset($entry->accounts->name) ? $entry->accounts->name : 'N/A' }}</td>
              <td>{{ $entry->credit_amount ? '+' . $entry->credit_amount : 0 }}</td>
              <td>{{ $entry->debit_amount ? '-' . $entry->debit_amount : 0 }}</td>
              <td>{{ $entry->balance }}</td>
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
