<div>
    <h1>Passing Data From Class Component to its view</h1>

<table class="table table-striped w-50 bg-success">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['qty'] }}</td>
                    <td>{{ $product['price'] }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>

</div>