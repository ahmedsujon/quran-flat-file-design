@push('styles')
<style>

</style>
@endpush
<div>
  <div class="px-4 py-5 my-5 text-center">
    <h4 style="padding-bottom: 20px; padding-top: 20px; font-size:35px;" class="display-5 fw-bold">Select One From
      Folling Searches</h4>
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
        <div style="text-align: center; padding-bottom: 50px;" class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            Select One From Folling Searches
          </button>
          <ul style="width: 280px;" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Mankind Creation</a></li>
            <li><a class="dropdown-item" href="#">Discrimination In Islam</a></li>
            <li><a class="dropdown-item" href="#">one Ness of Allah</a></li>
          </ul>
        </div>
        <table id="myTable">
          <tr class="header">
            <th>Sura Number</th>
            <th>Ayat Number </th>
            <th>English-Word-Subject-Category</th>
            <th>English-Word-Subsubject-Subcategory</th>
            <th>Sura Ayat English Description</th>
            <th>Hadith Description</th>
          </tr>
          @foreach ($search_dropdowns as $ayat_word)
          <tr>
            <td>{{ $ayat_word->surah_no }}</td>
            <td>{{ $ayat_word->ayat_no }}</td>
            <td>{{ $ayat_word->word_sub_category }}</td>
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