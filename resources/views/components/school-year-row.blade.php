<tr class="font-regular">
    <th>{{ $no }}</th>
    <td class="font-bold">
        <a href="" class="link link-info">
            S. Y. {{ date('Y', strtotime($schoolYear->start_date)) }} -
            @if ($schoolYear->end_date)
                {{ date('Y', strtotime($schoolYear->end_date)) }}
            @endif
        </a>

    </td>
    <td>{{ date('d F Y', strtotime($schoolYear->start_date)) }}</td>
    @if ($schoolYear->end_date)
        <td>{{ date('d F Y', strtotime($schoolYear->end_date)) }}</td>
    @else
        <td class="font-bold text-success">On Going</td>
    @endif
</tr>
