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
                            <div style="overflow-x:auto;">
                                <table class="table" id="datatable_1">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Surah-Ayat</th>
                                            <th>Ayat No.</th>
                                            <th>Arabic Root Word</th>
                                            <th>Normalized Arabic Word</th>
                                            <th>Transliteration Word </th>
                                            <th>English Word</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ayat_words as $ayat_word)
                                        <tr>
                                            <td>{{ $ayat_word->surah_no }} : {{ $ayat_word->ayat_no }}</td>
                                            <td>{{ $ayat_word->arabic_root_word }}</td>
                                            <td>{{ $ayat_word->normalize_word }}</td>
                                            <td>{{ $ayat_word->Transliteration_word }}</td>
                                            <td>{{ $ayat_word->english_word }}</td>
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
</div>