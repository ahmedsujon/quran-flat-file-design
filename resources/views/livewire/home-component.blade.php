<div>
    <div class="px-4 py-5 my-5 text-center">
        <h1 style="padding-top: 100px;" class="display-5 fw-bold">Quran Database Search</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium qui a, consectetur
                necessitatibus dolores cumque saepe quaerat totam, minus porro velit, beatae modi cum nobis eum. Earum
                similique dolor veniam.</p>
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                <a style="padding: 20px; width: 300px;" href="{{ route('database.search') }}"
                    class="btn btn-primary btn-lg px-4 gap-3">Beginning Search</a>
            </div>
        </div>
    </div>


    <div class="px-4 py-5 my-5 text-center">
        <h4 style="padding-top: 100px;" class="display-5 fw-bold">Quran Database Search</h4>
        <div class="col-lg-6 mx-auto">
            <form wire:submit.prevent='uploadExcel'>
                <label for="img">Ayat Execl File:</label>
                <input type="file" wire:model='excel'>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>


    {{-- <div class="px-4 py-5 my-5 text-center">
        <h4 style="padding-top: 100px;" class="display-5 fw-bold">Quran Database Search</h4>
        <div class="col-lg-6 mx-auto">
            <form wire:submit.prevent='uploaSuradExcel'>
                <label for="img">Sura Execl File:</label>
                <input type="file" wire:model='excel'>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div> --}}
    {{-- <div class="px-4 py-5 my-5 text-center">
        <h4 style="padding-top: 100px;" class="display-5 fw-bold">Quran Database Search</h4>
        <div class="col-lg-6 mx-auto">
            <form wire:submit.prevent='uploadHadithExcel'>
                <label for="img">Hadith Execl File:</label>
                <input type="file" wire:model='excel'>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div> --}}
</div>