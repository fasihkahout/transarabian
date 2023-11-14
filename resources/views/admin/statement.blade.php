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
                <h1 class="card-title">Statement</h1>   
                    <form method="get">
                        <label for="bank_id">Select Bank:</label>
                        <select name="bank_id" id="bank_id">
                            <option value="">Select a bank</option>
                            @foreach ($banks as $bank)
                                <option value="{{ $bank->id }}" {{ $selectedBank && $selectedBank->id == $bank->id ? 'selected' : '' }}>
                                    {{ $bank->name }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit">Show Statement</button>
                    </form>
                        
                    @if ($selectedBank)
                        <h2>Account Statement for {{ $selectedBank->name }}</h2>

                        <!-- Display credits and debits for the selected bank -->
                        <!-- Loop through and display the credits -->
                        @foreach ($credits as $credit)
                            <!-- Display credit details as needed -->
                        @endforeach

                        <!-- Loop through and display the debits -->
                        @foreach ($debits as $debit)
                            <!-- Display debit details as needed -->
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

@include('admin.script')

</body>
</html>