@extends("dashboard::pages.settings")

@section("settings.content")
    <div class="card-body">
        <h3 class="card-title">Logo</h3>
        <div class="row align-items-center mb-2">
            <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url(./static/avatars/000m.jpg)"></span>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-auto">
                <input type="file" class="form-control" name="logo">
            </div>
        </div>
    </div>

    <div class="card-body">
        <h3 class="card-title">Banner</h3>
        <div class="row align-items-center mb-2">
            <div class="col-auto">
                <img src="{{ asset('/assets/dashboard/dist/static/avatars/000m.jpg') }}" alt="banner">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-auto">
                <input type="file" class="form-control" name="banner">
            </div>
        </div>
    </div>

    <div class="card-body">
        <h3 class="card-title">Favicon</h3>
        <div class="row align-items-center mb-2">
            <div class="col-auto">
                <img src="{{ asset('/assets/dashboard/dist/static/avatars/000m.jpg') }}" alt="banner">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-auto">
                <input type="file" class="form-control" name="favicon">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Color Input</label>
            <div class="row g-2">
                @foreach(['dark','white','blue','azure','indigo','purple','pink','red','orange','yellow','lime'] as $value)
                    <div class="col-auto">
                        <label class="form-colorinput">
                            <input name="theme-color" type="radio" value="{{ $value }}" class="form-colorinput-input">
                            <span class="form-colorinput-color bg-{{ $value }}"></span>
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection