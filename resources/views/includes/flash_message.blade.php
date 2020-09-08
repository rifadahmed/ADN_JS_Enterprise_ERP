@if ($message = Session::get('success'))
    <div class="card-alert card green lighten-5">
        <div class="card-content green-text">
            <p>{{--SUCCESS :--}} {{ $message }}</p>
        </div>
        <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

@if ($message = Session::get('error') || $message = Session::get('danger'))
    <div class="card-alert card red lighten-5">
        <div class="card-content red-text">
            <p>{{--DANGER :--}} {{ $message }}</p>
        </div>
        <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="card-alert card orange lighten-5">
        <div class="card-content orange-text">
            <p>{{--WARNING :--}} {{ $message }}</p>
        </div>
        <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="card-alert card cyan lighten-5">
        <div class="card-content cyan-text">
            <p>{{--INFO :--}} {{ $message }}</p>
        </div>
        <button type="button" class="close cyan-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

@if ($message = Session::get('news'))
    <div class="card-alert card purple lighten-5">
        <div class="card-content purple-text">
            <p>{{--NEWS : --}} {{ $message }}</p>
        </div>
        <button type="button" class="close cyan-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

@if ($errors->any())
    <div class="card-alert card red lighten-5">
        <div class="card-content red-text">
            <p>{{--DANGER :--}} Please check the form below for errors</p>
        </div>
        <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

