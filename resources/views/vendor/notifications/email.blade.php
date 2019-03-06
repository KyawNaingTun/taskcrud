@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
<table>
    <tr>
        <td class="greeting-text" width="100%" cellpadding="35">
            <h2>{{ $greeting }}</h2>
        </td>
    </tr>
</table>
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hello!')
@endif
@endif
<table>
    <tr>
        <td class="greeting-text" width="100%" cellpadding="35">
            {{-- Intro Lines --}}
            @foreach ($introLines as $line)
            <p>{{ $line }}</p>
            @endforeach
        </td>
    </tr>
</table>

<table class="" align="center" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td class="task-detail-box" width="100%" cellpadding="0" cellspacing="0">
            Task Detail
        </td>
    </tr>
</table>
{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'red';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Regards'),<br>{{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
@lang(
    "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser: [:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl,
    ]
)
@endcomponent
@endisset
@endcomponent
