<section class="hotline">
    @if($hotline !== null | $Email !== null | $Address !== null)
    <li>Hotline: {{$hotline}}</li>
    <li>Email: {{$Email}}</li>
    <li>Address: {{$Address}}</li>
    @else
    <li>Hotline: <span class="text-danger">Không có dữ liệu !</span></li>
    <li>Email: <span class="text-danger">Không có dữ liệu !</span></li>
    <li>Address: <span class="text-danger">Không có dữ liệu !</span></li>
    @endif
</section>
