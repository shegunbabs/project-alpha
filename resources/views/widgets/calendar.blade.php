<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <?php
        $daysInWeek = ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'];
        $startDay = 1;
        $dayOfWeek = $calendarMonth->dayOfWeek; //returns a number between 0 (sunday) & 6 (saturday)
        $endDay = $calendarMonth->daysInMonth;
        $dayToday = $today->day;
    ?>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-2">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow-xl overflow-hidden border border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            @foreach($daysInWeek as $dayInWeek)
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                    {{ $dayInWeek }}
                                </th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <?php $count = 0; ?>
                            @while( $count !== $dayOfWeek )
                                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">&nbsp;</td>
                                <?php $count++; ?>
                            @endwhile

                            @for($day = 1; $day <= $endDay; $day++)
                                <td class="p-4 bg-white whitespace-nowrap text-sm text-gray-800 text-center border border-r m-2 {{ $dayToday === $day ? 'bg-gray-200 rounded-md font-medium' : '' }}">{{ $day }}</td>

                                <?php $count++; ?>
                                @if ( $count > 6 && $day < $endDay )
                                    <?php $count = 0; ?>
                                </tr>
                                <tr>
                                @endif
                            @endfor
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
