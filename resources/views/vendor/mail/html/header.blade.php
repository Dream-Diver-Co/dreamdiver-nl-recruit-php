@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Dreamdiver')
{{-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo"> --}}

<img src="https://dreamdiver.nl/frontend/img/logo.png" width="70px" height="70px">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
