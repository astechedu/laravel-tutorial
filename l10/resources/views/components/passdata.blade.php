<div>    
    <h1>Passing Data From Controller To Component </h1>

    @if($users)
        <table class="table table-strped w-50 bg-warning">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    @endif

</div>





