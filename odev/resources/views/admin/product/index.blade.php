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
                            <th>Ürün Kategorisi</th>
                            <th>Ürün Firması</th>
                            <th>Ürün Fiyatı</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-bold-500">Huawei P30 Lite</td>
                            <td>0</td>
                            <td class="text-bold-500">Telefon</td>
                            <td>Huawei</td>
                            <td>2800</td>
                            <td><a href="#"><i
                                        class="badge-circle badge-circle-light-secondary font-medium-1"
                                        data-feather="mail"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-bold-500">iPhone 12</td>
                            <td>1</td>
                            <td class="text-bold-500">Telefon</td>
                            <td>Apple</td>
                            <td>8815</td>
                            <td><a href="#"><i
                                        class="badge-circle badge-circle-light-secondary font-medium-1"
                                        data-feather="mail"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-bold-500">Xiamoi 10 Pro</td>
                            <td>2</td>
                            <td class="text-bold-500">Telefon</td>
                            <td>Xiaomi</td>
                            <td>4500</td>
                            <td><a href="#"><i
                                        class="badge-circle badge-circle-light-secondary font-medium-1"
                                        data-feather="mail"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection