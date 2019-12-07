<div class="table-wrapper mb-3">
    <table class="table table-hover ">
        <thead>
            <tr>
                @foreach ($tableHeaders as $tableHeader)
                <th class="bg-white text-heading" scope="col">{{$tableHeader}} </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @yield('tbody')
        </tbody>
    </table>
</div>