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
                            <th>Kategori Adı</th>
                            <th>Kategori İd</th>
                            <th>Toplam Ürün Sayısı</th>
                            <th>Firma Sayısı</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-bold-500">Bilgisayar</td>
                            <td>100</td>
                            <td class="text-bold-500">2500</td>
                            <td>8</td>
                            <td><a href="#"><i
                                        class="badge-circle badge-circle-light-secondary font-medium-1"
                                        data-feather="mail"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-bold-500">Telefon</td>
                            <td>101</td>
                            <td class="text-bold-500">4152</td>
                            <td>10</td>
                            <td><a href="#"><i
                                        class="badge-circle badge-circle-light-secondary font-medium-1"
                                        data-feather="mail"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-bold-500">Tablet</td>
                            <td>102</td>
                            <td class="text-bold-500">1241</td>
                            <td>7</td>
                            <td><a href="#"><i
                                        class="badge-circle badge-circle-light-secondary font-medium-1"
                                        data-feather="mail"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-bold-500">Televizyon</td>
                            <td>104</td>
                            <td class="text-bold-500">562</td>
                            <td>15</td>
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