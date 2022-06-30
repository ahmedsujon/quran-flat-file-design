@push('styles')
<style>

</style>
@endpush

<div>
  <div class="px-5 py-6 my-6 text-center">
    <h4 style="padding-bottom: 50px; font-size:35px;" class="display-5 fw-bold">Quran Single
      Word
      Search</h4>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
          type="button" role="tab" aria-controls="pills-home" aria-selected="true">Processing Logic for Function
          1.1</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
          type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Processing Logic for Function
          1.2</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
          type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Processing Logic for Function
          1.3</button>
      </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
        tabindex="0">
        <div class="card">
          <div class="card-body">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
            <table id="myTable">
              <tr class="header">
                <th>Arabic Root Word</th>
                <th>Normalize Arabic Word</th>
                <th>Inference Flag</th>
                <th>Sura Ayat Arabic Description </th>
                <th>Hadith Description</th>
              </tr>
    
              @foreach ($ayat_words as $ayat_word)
              <tr>
                <td>{{ $ayat_word->surah_no }}</td>
                <td>{{ $ayat_word->ayat_no }}</td>
                <td>{{ $ayat_word->arabic_root_word }}</td>
                <td>{{ $ayat_word->normalize_word }}</td>
                <td>{{ $ayat_word->Transliteration_word }}</td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <div class="card">
          <div class="card-body">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
            <table id="myTable">
              <tr class="header">
                <th>Normalize Arabic Word</th>
                <th>Arabic Root Word</th>
                <th>Inference Flag</th>
                <th>Sura Ayat Arabic Description</th>
                <th>Hadith Description</th>
              </tr>
    
              @foreach ($ayat_words as $ayat_word)
              <tr>
                <td>{{ $ayat_word->surah_no }}</td>
                <td>{{ $ayat_word->ayat_no }}</td>
                <td>{{ $ayat_word->arabic_root_word }}</td>
                <td>{{ $ayat_word->normalize_word }}</td>
                <td>{{ $ayat_word->Transliteration_word }}</td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
        <div class="card">
          <div class="card-body">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
            <table id="myTable">
              <tr class="header">
                <th>Sura Ayat Arabic Description</th>
                <th>Sura Number Key </th>
                <th>Ayat Number</th>
              </tr>
    
              @foreach ($ayat_words as $ayat_word)
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