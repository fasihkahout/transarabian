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
      <h1 class="card-title">Transfer Money Ledger</h1>

      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Date</th>
              <th>Title</th>
              <th>Reference ID</th>
              <th>Bank</th>
              <th>Credit Amount</th>
              <th>Debit Amount</th>
              <th>Balance</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($transferMoney as $entry)
            <tr>
              <td>{{ $entry->date }}</td>
              <td>{{ $entry->title }}</td>
              <td>{{ $entry->ref_id }}</td>
              <td>{{ isset($entry->accounts->name) ? $entry->accounts->name : 'N/A' }}</td>
              <td>{{ $entry->credit ? '+' . $entry->credit : 0 }}</td>
              <td>{{ $entry->debit ? '-' . $entry->debit : 0 }}</td>
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
