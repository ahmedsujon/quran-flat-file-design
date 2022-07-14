<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ayat Word Main Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="datatable_1">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Hadith Reference</th>
                                        <th>Hadith Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hadith_references as $hadith_reference)
                                    <tr>
                                        <td>{{ $hadith_reference->hadith_referance }}</td>
                                        <td>{{ $hadith_reference->hadith_description }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>