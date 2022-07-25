@push('styles')
<style>

</style>
@endpush
<div>
  <div class="my-5 text-center">
    <h4 style="padding-bottom: 20px; padding-top: 20px; font-size:35px;" class="display-5 fw-bold">Quran Multiple
      Word (Either, OR)
      Search</h4>
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
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">Search by Arabic Root
              word</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Search by Normalize Arabic
              Word</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
              type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Search by Actual Arabic Words
              in Quran</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
              <input dir="rtl" type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter arabic root words"><span style="padding-top: 12px;"
                class="justify-content-center">OR</span>
              <input dir="rtl" type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter arabic root words"><span style="padding-top: 12px;"
                class="justify-content-center">OR</span>
              <input dir="rtl" type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter arabic root words">
            </div>
            <div style="overflow-x:auto;">
              <table id="myTable">
                <tr class="header">
                  <th>Surah-Ayat</th>
                  <th>Arabic Root Word</th>
                  <th>Normalize Arabic Word</th>
                  <th>Inference Flag</th>
                  <th>Sura Ayat Arabic Description</th>
                  <th>Hadith Description</th>
                </tr>
                @foreach ($multiple_words_search as $ayat_word)
                <tr>
                  <td>{{ $ayat_word->surah_no }}:{{ $ayat_word->ayat_no }}</td>
                  <td>{{ $ayat_word->arabic_root_word }}</td>
                  <td>{{ $ayat_word->normalize_word }}</td>
                  <td>{{ $ayat_word->inference_flag }}</td>
                  <td>{{ $ayat_word->arabic_root_word }}</td>
                  <td>{{ $ayat_word->arabic_root_word }}</td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
              <input dir="rtl" type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter nomalize arabic words"><span style="padding-top: 12px;"
                class="justify-content-center">OR</span>
              <input dir="rtl" type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter nomalize arabic words"><span style="padding-top: 12px;"
                class="justify-content-center">OR</span>
              <input dir="rtl" type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter nomalize arabic words">
            </div>
            <div style="overflow-x:auto;">
              <table id="myTable">
                <tr class="header">
                  <th>Surah-Ayat</th>
                  <th>Normalize Arabic Word</th>
                  <th>Arabic Root Word</th>
                  <th>Inference Flag</th>
                  <th>Sura Ayat Arabic Description </th>
                  <th>Hadith Description</th>
                </tr>
                @foreach ($multiple_words_search as $ayat_word)
                <tr>
                  <td>{{ $ayat_word->surah_no }}:{{ $ayat_word->ayat_no }}</td>
                  <td>{{ $ayat_word->normalize_word }}</td>
                  <td>{{ $ayat_word->arabic_root_word }}</td>
                  <td>{{ $ayat_word->inference_flag }}</td>
                  <td>{{ $ayat_word->inference_flag }}</td>
                  <td>{{ $ayat_word->inference_flag }}</td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
            tabindex="0">
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
              <input dir="rtl" type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter actual arabic words in quran"><span style="padding-top: 12px;"
                class="justify-content-center">OR</span>
              <input dir="rtl" type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter actual arabic words in quran"><span style="padding-top: 12px;"
                class="justify-content-center">OR</span>
              <input dir="rtl" type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter actual arabic words in quran">
            </div>
            <div style="overflow-x:auto;">
              <table id="myTable">
                <tr class="header">
                  <th>Sura Number</th>
                  <th>Ayat Number in Surah</th>
                  <th>Sura Ayat Arabic Description</th>
                </tr>
                @foreach ($multiple_words_search as $ayat_word)
                <tr>
                  <td>{{ $ayat_word->surah_no }}</td>
                  <td>{{ $ayat_word->ayat_no }}</td>
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
</div>