<div class="col-md-8"> <canvas id="pieChartjs" width="400" height="300"></canvas></div>
<div class="col-md-4">
    <table class="table datatables table-bordered table-hover table-data" id="revenue-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th class="text-right">Jumlah</th>
            </tr>
        </thead>
        <tbody> @php
            $total = 0;
        @endphp

            @foreach ($revenue as $item)
                <tr>
                    <td class="text-uppercase">Therapist</td>
                    <td class="text-right">{{ number_format($item->therapist) }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Nona</td>
                    <td class="text-right">{{ number_format($item->nona) }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Kitchen</td>
                    <td class="text-right">{{ number_format($item->kitchen) }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Beverage</td>
                    <td class="text-right">{{ number_format($item->beverage) }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Paket</td>
                    <td class="text-right">{{ number_format($item->paket) }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Minol</td>
                    <td class="text-right">{{ number_format($item->minol) }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Wine</td>
                    <td class="text-right">{{ number_format($item->wine) }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Cigarettes</td>
                    <td class="text-right">{{ number_format($item->cigarretes) }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Cerutu</td>
                    <td class="text-right">{{ number_format($item->cerutu) }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Minibar</td>
                    <td class="text-right">{{ number_format($item->minibar) }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Room</td>
                    <td class="text-right">{{ number_format($item->room) }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Lost and Break</td>
                    <td class="text-right">{{ number_format($item->lostnbrake) }}</td>
                </tr>

                @php
                    // Add the current item values to the total
                    $total +=
                        $item->therapist +
                        $item->nona +
                        $item->kitchen +
                        $item->beverage +
                        $item->paket +
                        $item->minol +
                        $item->wine +
                        $item->cigarretes +
                        $item->cerutu +
                        $item->minibar +
                        $item->room +
                        $item->lostnbrake;
                @endphp
            @endforeach
        </tbody>
        <tfoot>


            <tr>
                <td class="text-uppercase"><strong>Total</strong></td>
                <td class="text-right"><strong>{{ number_format($total) }}</strong></td>
            </tr>
        </tfoot>
    </table>
</div>



{{-- @php
                $name = [
                    'THERAPIST',
                    'NONA',
                    'FOOD',
                    'BEVERAGE',
                    'PAKET',
                    'ALKOHOL',
                    'WINE',
                    'CIGARETTE',
                    'CERUTU',
                    'MINIBAR',
                    'SPA & ROOM',
                    'FDC & FS',
                ];
                $value = [
                    417650000,
                    904400000,
                    44937500,
                    210940500,
                    383828092,
                    736220750,
                    0,
                    128040000,
                    0,
                    11950000,
                    286850000,
                    44800000,
                ];
                $total = 0;
            @endphp
            @foreach ($name as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item }}</td>
                    <td class="text-right">{{ number_format($value[$key]) }}</td>
                </tr>
                @php
                    $total += $value[$key];
                @endphp
            @endforeach
            <tr class="font-weight-bold">
                <td colspan="2" class="text-right">Total</td>
                <td class="text-right">{{ number_format($total) }}</td>
            </tr> --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    function generateColorGradient(colorStart, colorEnd, steps) {
        var result = [];
        var start = hexToRgb(colorStart);
        var end = hexToRgb(colorEnd);

        for (var i = 0; i < steps; i++) {
            var r = Math.round(start.r + (end.r - start.r) * i / (steps - 1));
            var g = Math.round(start.g + (end.g - start.g) * i / (steps - 1));
            var b = Math.round(start.b + (end.b - start.b) * i / (steps - 1));
            result.push(rgbToHex(r, g, b));
        }

        return result;
    }

    function hexToRgb(hex) {
        var bigint = parseInt(hex.slice(1), 16);
        var r = (bigint >> 16) & 255;
        var g = (bigint >> 8) & 255;
        var b = bigint & 255;
        return {
            r: r,
            g: g,
            b: b
        };
    }

    function rgbToHex(r, g, b) {
        return "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);
    }

    function createChart() {
        var labels = [];
        var data = [];
        var backgroundColor = generateColorGradient('#004d00', '#00cc00', 12); // Dark Green to Light Green

        // Loop through each row in the table
        $('#revenue-table tbody tr').each(function() {
            var name = $(this).find('td:first').text();
            if (name !== "TOTAL") {
                var value = parseFloat($(this).find('td:last').text().replace(/,/g, ''));
                labels.push(name);
                data.push(value);
            }
        });

        // Create a Chart.js dataset
        var ctx = document.getElementById('pieChartjs').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Revenue',
                    data: data,
                    backgroundColor: backgroundColor,
                    borderColor: 'rgba(255, 255, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    }

    // Call the function to create the chart when the page is loaded
    $(document).ready(function() {
        createChart();
    });
</script>
<script>
    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    function createChart() {
        var labels = [];
        var data = [];
        var backgroundColor = [];

        // Loop through each row in the table
        $('#revenue-table tbody tr').each(function() {
            var name = $(this).find('td:first').text();
            if (name !== "TOTAL") {
                var value = parseFloat($(this).find('td:last').text().replace(/,/g, ''));
                labels.push(name);
                data.push(value);
                backgroundColor.push(getRandomColor());
            }
        });

        // Create a Chart.js dataset
        var ctx = document.getElementById('pieChartjs').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Revenue',
                    data: data,
                    backgroundColor: backgroundColor,
                    borderColor: 'rgba(255, 255, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    }

    // Call the function to create the chart when the page is loaded
    $(document).ready(function() {
        createChart();
    });
</script>
