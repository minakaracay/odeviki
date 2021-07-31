@extends('layout.admin')

@section('title', $data_['title'])

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">{{$data_['title']}}</li>
@endsection

@section('content')
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Ürün Adı</th>
                            <th>Ürün İd</th>
                            <th>Ürün İndirimli Fiyatı</th>
                            <th>İndirim Oranı</th>
                            <th>Ürün Normal Fiyatı</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-bold-500">Huawei P30 Lite</td>
                            <td>0</td>
                            <td class="text-bold-500">2530</td>
                            <td>%10</td>
                            <td>2700</td>
                        </tr>
                        <tr>
                            <td class="text-bold-500">Xiaomi 10 Pro</td>
                            <td>2</td>
                            <td class="text-bold-500">4300</td>
                            <td>%5</td>
                            <td>4500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection