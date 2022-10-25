<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <h1>Sports</h1>
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
                        <th scope="col">Image</th>
                        <th scope="col">Sport</th>
                        <th scope="col">Description</th>
                    </tr>
                    @foreach($collection as $sport)
                    <tr>
                        <td>{{ $sport['idSport'] }}</td>
                        <td><img src="{{ $sport['strSportThumb'] }}" alt="{{ $sport['strSport'] }}"></td>
                        <td>{{ $sport['strSport'] }}</td>
                        <td>{{ $sport['strSportDescription'] }}</td>
                    </tr>
                    @endforeach
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

