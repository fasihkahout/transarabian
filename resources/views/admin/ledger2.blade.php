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
            <div class="card-body" id="printable-content"  style="overflow-x:auto;">
                <h2>Bank Statement</h2>
                <table class="table table-striped" >
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Reference ID</th>
                            <th>Title</th>
                            <th>Credits</th> <!-- New column for Credits -->
                            <th>Debits</th>
                            <th>Expense Debits</th>
                            
                            <th>Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                        <tr>
                           <td>
                                @if ($transaction->type === 'credit')
                                    {{ $transaction->credit_date }}
                                @elseif ($transaction->type === 'debit' && $transaction->debit_date)
                                    {{ $transaction->debit_date }}
                                @else
                                    {{ $transaction->date }}
                                @endif
                            </td>
                             <td>
                                @if ($transaction->type === 'credit')
                                    {{ $transaction->credit_ref }}
                                 @elseif ($transaction->type === 'debit' && $transaction->debit_ref)
                                    {{ $transaction->debit_ref }}
                                @else
                                    {{ $transaction->ref_id }}
                                @endif
                            </td>
                            <td>
                                @if ($transaction->type === 'credit')
                                    {{ $transaction->credit_title }}
                                 @elseif ($transaction->type === 'debit' && $transaction->debit_title)
                                    {{ $transaction->debit_title }}
                                @else
                                    {{ $transaction->title }}
                                @endif
                            </td>
                            <td>
                                @if ($transaction->type === 'credit')
                                    {{ $transaction->credit_amount }}
                                @else
                                    @if ($transaction->type === 'debit')
                                        0
                                         @else
                                @if ($transaction->type === 'expense')
                                    0
                                @endif
                                
                                    @endif
                                @endif
                            </td>
                           <td>
    @if ($transaction->type === 'debit')
        {{ $transaction->debit_amount }}
    @elseif ($transaction->type === 'credit')
        0
    @elseif ($transaction->type === 'expense')
        0
   
    @endif
</td>

                          <td>
    @if ($transaction->type === 'expense')
        {{ $transaction->expense_price }}
    @else
        @if ($transaction->type === 'credit')
            0
        @else
            @if ($transaction->type === 'debit')
                0
            @endif
            
        @endif
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
