<h2>Bàn cờ {{ $n }} x {{ $n }}</h2>

<table border="1" cellpadding="10">
@for ($i = 0; $i < $n; $i++)
<tr>
    @for ($j = 0; $j < $n; $j++)
        <td style="width:30px;height:30px;
            background: {{ ($i + $j) % 2 == 0 ? '#fff' : '#000' }};">
        </td>
    @endfor
</tr>
@endfor
</table>
