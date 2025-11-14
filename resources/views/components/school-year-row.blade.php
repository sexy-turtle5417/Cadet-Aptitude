<tr class="font-regular">
    <th>{{ $no }}</th>
    <td>S. Y. {{ date('Y', strtotime($schoolYear->start_date)) }} -
        @if ($schoolYear->end_date)
            {{ date('Y', strtotime($schoolYear->end_date)) }}
        @endif
    </td>
    <td>{{ date('d F Y', strtotime($schoolYear->start_date)) }}</td>
    @if ($schoolYear->end_date)
        <td>{{ date('d F Y', strtotime($schoolYear->end_date)) }}</td>
    @else
        <td class="font-bold text-success">On Going</td>
    @endif
    <td>
        <a href="" class="link link-info">Details</a>
    </td>
</tr>
