@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'La Cocinita') 
<img src="https://www.la-cocinita.com/imagenes/otros/LaCocinita.png" class="logo" alt="La Cocinita"> 
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
