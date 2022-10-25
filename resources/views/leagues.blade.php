<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <h1>Leagues</h1>
        </div>
    </div>
</div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">League</th>
                        <th scope="col">Sport</th>
                    </tr>
                    @foreach($collection as $league)
                    <tr>
                        <td>{{ $league['idLeague'] }}</td>
                        <td>{{ $league['strLeague'] }}</td>
                        <td>{{ $league['strSport'] }}</td>
                    </tr>
                    @endforeach
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

