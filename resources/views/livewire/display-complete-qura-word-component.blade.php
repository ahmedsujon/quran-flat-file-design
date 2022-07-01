@push('styles')
<style>

</style>
@endpush
<div>
  <div class="px-4 py-5 my-5 text-center">
    <h4 style="padding-bottom: 20px; padding-top: 20px; font-size:35px;" class="display-5 fw-bold">Display
      Complete Quran Sorted By English Word/Subject</h4>
    <a href="{{ route('website') }}" type="button" class="btn btn-primary">
      Home
    </a>
    <a href="{{ route('database.search') }}" type="button" class="btn btn-primary">
      Search List
    </a>
  </div>

  <div style="padding-left: 50px; padding-right: 50px;" class="row">
    <div style="padding-left: 20px;" class="card">
      <div class="card-body">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
            <table id="myTable">
              <tr class="header">
                <th>English-Word-Subject-Category</th>
                <th>English-Word-Subsubject-Subcategory</th>
                <th>Sura Number</th>
                <th>Ayat Number </th>
                <th>Sura Ayat English Description</th>
                <th>Hadith Description</th>
              </tr>
              @foreach ($display_complete_quran_word as $ayat_word)
              <tr>
                <td>{{ $ayat_word->surah_no }}</td>
                <td>{{ $ayat_word->ayat_no }}</td>
                <td>{{ $ayat_word->arabic_root_word }}</td>
                <td>{{ $ayat_word->arabic_root_word }}</td>
                <td>{{ $ayat_word->arabic_root_word }}</td>
                <td>{{ $ayat_word->arabic_root_word }}</td>
              </tr>
              @endforeach
            </table>
      </div>
    </div>
  </div>
</div>