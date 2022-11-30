@extends("dashboard::layouts.tabler")

@section("content")
    <div class="container-xl">
        <div class="card">
            <div class="row g-0">
                <div class="col-2 d-none d-md-block border-end">
                    <div class="card-body">
                        <h4 class="subheader">{{ __("dashboard::settings.title") }}</h4>
                        <div class="list-group list-group-transparent">
                            <a href="{{ route('dashboard.settings.index') }}"
                               class="list-group-item list-group-item-action d-flex align-items-center active">
                                {{ __("dashboard::settings.menu.global.title") }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex flex-column">
                    @yield("settings.content")
                    <div class="card-footer bg-transparent mt-auto">
                        <div class="btn-list justify-content-end">
                            <a href="#" class="btn">
                                Cancel
                            </a>
                            <a href="#" class="btn btn-primary">
                                Submit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

