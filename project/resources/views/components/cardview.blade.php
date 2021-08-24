<!-- catalogue -->
<div class="catalog">
    <div class="container-fluid bg-trasparent my-4">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
            @if (count($products) > 0)
                @foreach ($products as $product)
                    <div class="col-sm-12 col-md-4 mb-3">
                        <div class="card h-100 shadow-sm"> <img src="
                            @if (empty($product->ProductImg))
                                 {{ asset('assets/images/no-image.png') }}
                            @else
                                {{ $product->ProductImg }}
                            @endif
                            " class="card-img-top" alt="...">
                            <div class="label-top shadow-sm">{{ $product->ProductName }}</div>
                            <div class="card-body">
                                <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">{{ $product->ProductPrice }} Lei</span></div>
                                <h5 class="card-title">{{ $product->ProductDesc }}</h5>
                                <div class="text-center my-2"> 
                                    <button class="btn btn-success d-flex justify-content-center d-md-table mx-auto" onclick="displayParam({{ $product->id }})">PARAMETRI</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h1>Nothing</h1>
            @endif
        </div>
        <div class="paginator">
            {{ $products->render() }}
            </div>
        </div>
    </div>
</div>
<!-- catalogue -->