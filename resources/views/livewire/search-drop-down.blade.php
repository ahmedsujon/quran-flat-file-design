@push('styles')
<style>

</style>
@endpush
<div>
  <div class="my-3 text-center">
    <h4 style="padding-bottom: 20px; padding-top: 20px; font-size:35px;" class="display-5 fw-bold">Select One From
      Folling Searches</h4>
    <a href="{{ route('website') }}" type="button" class="btn btn-primary">
      Home
    </a>
    <a href="{{ route('database.search') }}" type="button" class="btn btn-primary">
      Search List
    </a>
  </div>

  <div style="padding-left: 20px; padding-right: 20px;" class="row">
    <div style="padding-left: 20px;" class="card">
      <div class="card-body">
        <div style="text-align: center; padding-bottom: 50px; margin-left: 20%; margin-right: 20%;" class="dropdown">
          <select wire:model="dropdownsearch" class="form-select" aria-label="Default select example">
            <option value="">Open this select topics</option>
            <option value="Mankind Creation">Mankind Creation</option>
            <option value="Discrimination In Islam">Discrimination In Islam</option>
            <option value="One Ness of Allah">One Ness of Allah</option>
            <option value="Allah's Permission">Allah's Permission</option>
          </select>
        </div>
        
        <div style="overflow-x:auto;">
          <table id="myTable">
            <tr class="header">
              <th>Sura-Ayat</th>
              <th>English-Word-Subject-Category</th>
              <th>English-Word-Subsubject-Subcategory</th>
              <th>Sura Ayat English Description</th>
              <th>Hadith Description</th>
            </tr>
            @php
                $sl = ($search_dropdowns->perPage() *
                $search_dropdowns->currentPage())-($search_dropdowns->perPage() - 1)
                @endphp
                @if ($search_dropdowns->count() > 0)
            @foreach ($search_dropdowns as $ayat_word)
            <tr>
              <td>{{ $ayat_word->surah_no }}:{{ $ayat_word->ayat_no }}</td>
              <td>{{ $ayat_word->english_word }}</td>
              <td>{{ $ayat_word->word_sub_category }}</td>
              <td>{{ suraAyatData($ayat_word->surah_no,$ayat_word->ayat_no)->ayat_english_description }}</td>
              <td>
                @if (isset($ayat_word->hadithData->hadith_description))
                {{ $ayat_word->hadithData->hadith_description }}
                @endif
              </td>
            </tr>
            @endforeach
            @else
                <tr>
                  <td colspan="5" style="text-align: center;">No data available!</td>
                </tr>
                @endif
          </table>
        </div>
        {{ $search_dropdowns->links('pagination-links-table') }}
      </div>
    </div>
  </div>
</div>