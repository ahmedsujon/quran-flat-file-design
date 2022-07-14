<div>
    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Surah Ayat Table</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="datatable_1">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Surah No.</th>
                                        <th>Ayat No.</th>
                                        <th>English Description</th>
                                        <th>NArabic Description</th>
                                        <th>Arabic Root Words</th>
                                        <th>Normailzed Arabic Words in Ayat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sura_ayats as $sura_ayat)
                                    <tr>
                                        <td>{{ $sura_ayat->surah_number }}</td>
                                        <td>{{ $sura_ayat->ayat_number }}</td>
                                        <td>{{ $sura_ayat->ayat_english_description }}</td>
                                        <td>{{ $sura_ayat->ayat_arabic_description }}</td>
                                        <td>{{ $sura_ayat->arabic_root_word }}</td>
                                        <td>{{ $sura_ayat->normalized_arabic_word }}</td>
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