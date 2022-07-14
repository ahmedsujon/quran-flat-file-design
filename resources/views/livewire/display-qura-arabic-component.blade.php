@push('styles')
<style>

</style>
@endpush
<div>
  <div class="px-4 py-5 my-5 text-center">
    <h4 style="padding-bottom: 20px; padding-top: 20px; font-size:35px;" class="display-5 fw-bold">Display Quran
      In Arabic</h4>
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
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">Display Complete Quran Sorted By: Root Word</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Display Complete Quran Sorted By: Normalized Arabic Word</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <table id="myTable">
              <tr class="header">
                <th>Sura Number</th>
                <th>Ayat Number in Surah </th>
                <th>Arabic Root Word</th>
                <th>Normalized Arabic Word</th>
                <th>Sura Ayat Arabic Description</th>
              </tr>
              @foreach ($display_quran_arabic as $ayat_word)
              <tr>
                <td>{{ $ayat_word->surah_no }}</td>
                <td>{{ $ayat_word->ayat_no }}</td>
                <td>{{ $ayat_word->arabic_root_word }}</td>
                <td>{{ $ayat_word->normalize_word }}</td>
                <td>{{ $ayat_word->arabic_root_word }}</td>
              </tr>
              @endforeach
            </table>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <table id="myTable">
              <tr class="header">
                <th>Sura Number</th>
                <th>Ayat Number in Surah</th>
                <th>Normalized Arabic Word</th>
                <th>Arabic Root Word</th>
                <th>Sura Ayat Arabic Description</th>
              </tr>
              @foreach ($display_quran_arabic as $ayat_word)
              <tr>
                <td>{{ $ayat_word->surah_no }}</td>
                <td>{{ $ayat_word->ayat_no }}</td>
                <td>{{ $ayat_word->normalize_word }}</td>
                <td>{{ $ayat_word->arabic_root_word }}</td>
                <td>{{ $ayat_word->arabic_root_word }}</td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>