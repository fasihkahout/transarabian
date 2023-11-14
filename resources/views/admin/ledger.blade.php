<!DOCTYPE html>
<html lang="en">
 @include('admin.head')
        @include('admin.navbar')
        {{-- <style>
            @media print {

                .sidebar {
                    display: none;
                }
                
                #printable-content {
                    width: 100%;
                }

                .header {
                    display: none !important;
                }
            }
        </style> --}}
      <!-- partial -->
      @include('admin.sidebar')
        <!-- partial -->

        <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" id="printable-content" style="overflow-x:auto;">
                <h2>Ledger for {{ $candidate->sel_can }}</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Credits</th> <!-- New column for Credits -->
                            <th>Debits</th> <!-- New column for Debits -->
                            <th>Bank</th>
                            <th>Title</th>
                            <th>Reference ID</th>
                            <th>Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                        <tr>
                            <td>
                                @if ($transaction->type === 'credit')
                                    {{ $transaction->credit_date }}
                                @else
                                    {{ $transaction->debit_date }}
                                @endif
                            </td>
                            <td>
                                @if ($transaction->type === 'credit')
                                    {{ $transaction->credit_des }}
                                @else
                                    {{ $transaction->debit_des }}
                                @endif
                            </td>
                            <td>
                                @if ($transaction->type === 'credit')
                                    {{ $transaction->credit_amount }}
                                @else
                                    @if ($transaction->type === 'debit')
                                        0
                                    @endif
                                @endif
                            </td>
                            <td>
                                @if ($transaction->type === 'debit')
                                    {{ $transaction->debit_amount }}
                                @else
                                    @if ($transaction->type === 'credit')
                                        0
                                    @endif
                                @endif
                            </td>
                            <td>
                                @if ($transaction->type === 'credit')
                                 {{isset($transaction->accounts->name)?$transaction->accounts->name:'N/A'}} 
                                @else
                                    {{isset($transaction->accounts->name)?$transaction->accounts->name:'N/A'}}
                                @endif
                            </td>
                            <td>
                                @if ($transaction->type === 'credit')
                                    {{ $transaction->credit_title }}
                                @else
                                    {{ $transaction->debit_title }}
                                @endif
                            </td>
                            <td>
                                @if ($transaction->type === 'credit')
                                    {{ $transaction->credit_ref }}
                                @else
                                    {{ $transaction->debit_ref }}
                                @endif
                            </td>
                            <td>{{ $transaction->balance }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- <button id="printButton" class="btn btn-primary" style="display: block;">Print Ledger</button> --}}
            </div>
        </div>
</div>

<script>
    document.getElementById('printButton').addEventListener('click', function () {
        // Hide the print button before printing
        this.style.display = 'none';
        
        // Call the browser's print function
        window.print();
        
        // Show the print button after printing
        this.style.display = 'block';
    });
</script>
<!-- partial -->
@include('admin.script')

</body>
</html>
