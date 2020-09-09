@if(Session::has(\App\Http\Enums\FlashStatus::SUCCESS))
    <p class="alert alert-success">{{ Session::get(\App\Http\Enums\FlashStatus::SUCCESS)}}</p>
@endif
@if(Session::has(\App\Http\Enums\FlashStatus::WARNING))
    <div class="alert alert-block alert-danger">{!! Session::get(\App\Http\Enums\FlashStatus::WARNING) !!}</div>
@endif
