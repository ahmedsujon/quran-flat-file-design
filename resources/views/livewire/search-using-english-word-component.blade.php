@push('styles')
<style>

</style>
@endpush
<div>
  <div class="px-4 py-5 my-5 text-center">
    <h4 style="padding-bottom: 20px; padding-top: 20px; font-size:35px;" class="display-5 fw-bold">Quran
      Search Using English Word/Subject</h4>
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
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">Search by Single English
              Word/Subject</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Search by Multiple English
              Word/Subject</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
              type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Search by Multiple English
              Word/Subject</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter single word/subject..">
            <div style="overflow-x:auto;">
              <table id="myTable">
                <tr class="header">
                  <th>Sura Number</th>
                  <th>Ayat Number in Surah</th>
                  <th>English-Word-Subject-Category</th>
                  <th>Inference Flag</th>
                  <th>Sura Ayat English Description</th>
                  <th>Hadith Description</th>
                </tr>
                @foreach ($search_using_english_word as $ayat_word)
                <tr>
                  <td>{{ $ayat_word->surah_no }}</td>
                  <td>{{ $ayat_word->ayat_no }}</td>
                  <td>{{ $ayat_word->word_sub_category }}</td>
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
              <input type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter multiple english word/subject.."><span style="padding-top: 12px;"
                class="justify-content-center">AND</span>
              <input type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter multiple english word/subject.."><span style="padding-top: 12px;"
                class="justify-content-center">AND</span>
              <input type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter multiple english word/subject..">
            </div>
            <div style="overflow-x:auto;">
              <table id="myTable">
                <tr class="header">
                  <th>Sura Number</th>
                  <th>Ayat Number in Surah</th>
                  <th>English Word-Subject-Category</th>
                  <th>Inference Flag</th>
                  <th>Sura Ayat English Description</th>
                  <th>Hadith Description</th>
                </tr>
                @foreach ($search_using_english_word as $ayat_word)
                <tr>
                  <td>{{ $ayat_word->surah_no }}</td>
                  <td>{{ $ayat_word->ayat_no }}</td>
                  <td>{{ $ayat_word->word_sub_category }}</td>
                  <td>{{ $ayat_word->inference_flag }}</td>
                  <td>{{ $ayat_word->arabic_root_word }}</td>
                  <td>{{ $ayat_word->arabic_root_word }}</td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
            tabindex="0">
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
              <input type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter multiple english word/subject.."><span style="padding-top: 12px;"
                class="justify-content-center">AND</span>
              <input type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter multiple english word/subject.."><span style="padding-top: 12px;"
                class="justify-content-center">AND</span>
              <input type="text" id="myInput" onkeyup="myFunction()"
                placeholder="Enter multiple english word/subject..">
            </div>
            <div style="overflow-x:auto;">
              <table id="myTable">
                <tr class="header">
                  <th>Sura Number</th>
                  <th>Ayat Number</th>
                  <th>Sura Ayat English Description </th>
                </tr>
                @foreach ($search_using_english_word as $ayat_word)
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