<x-wrapper>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Transport Orders</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Reference Number</th>
                                    <th>Price</th>
                                    <th>Currency</th>
                                    <th>Truck</th>
                                    <th>Loading Date</th>
                                    <th>Unloading Date</th>
                                    <th>Loading Address</th>
                                    <th>Unloading Address</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transportOrders as $transportOrder)
                                <tr>
                                    <td>{{ $transportOrder->client }}</td>
                                    <td>{{ $transportOrder->reference_number }}</td>
                                    <td>{{ $transportOrder->price }}</td>
                                    <td>{{ $transportOrder->currency }}</td>
                                    <td>{{ $transportOrder->truck }}</td>
                                    <td>{{ $transportOrder->loading_date }}</td>
                                    <td>{{ $transportOrder->unloading_date }}</td>
                                    <td>{{ $transportOrder->loading_address }}</td>
                                    <td>{{ $transportOrder->unloading_address }}</td>
                                    <td>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-wrapper>
