@extends('layouts.default-product')

@section('content')
     <!-- Shop Start -->
     <div class="container-fluid container-product-car pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">All Price</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">$0 - $100</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">$100 - $200</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">$200 - $300</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">$300 - $400</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5">$400 - $500</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
                
                <!-- Color Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">All Color</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Black</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-2">
                            <label class="custom-control-label" for="color-2">White</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-3">
                            <label class="custom-control-label" for="color-3">Red</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-4">
                            <label class="custom-control-label" for="color-4">Blue</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="color-5">
                            <label class="custom-control-label" for="color-5">Green</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Color End -->

            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by name">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                            Sort by
                                        </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{ url('frontend/assets/img/portfolio/portfolio-1.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-truncate mb-3">Ford F2 Sport</h6>
                                    <div class="div"><h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6></div>
                                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                </div>
                                
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="accordion accordion-flush" id="accordionFlushExample1">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        </button>
                                      </h2>
                                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample1">
                                        <div class="accordion-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="1 mr-5">
                                                    Stock : 10
                                                </div>
                                                <div class="2 mr-5">
                                                    Merk : Chevrolet
                                                </div>
                                                <div class="3 mr-5">
                                                    Condition : 80%
                                                </div>
                                                <div class="3 mr-5">
                                                    Fuel Type : Gas
                                                </div>
                                            </div>
                                            <div class="d-flex mt-5">
                                                <div class="3 mr-5">
                                                    Category : Sedan
                                                </div>
                                                <div class="3 mr-5">
                                                    Odometer : 1200807
                                                </div>
                                                <div class="3 mr-5">
                                                    Color : Red
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{ url('frontend/assets/img/portfolio/portfolio-2.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-truncate mb-3">Ford F2 Sport</h6>
                                    <div class="div"><h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6></div>
                                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                </div>
                                
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="accordion accordion-flush" id="accordionFlushExample2">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        </button>
                                      </h2>
                                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample2">
                                        <div class="accordion-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="1 mr-5">
                                                    Stock : 10
                                                </div>
                                                <div class="2 mr-5">
                                                    Merk : Chevrolet
                                                </div>
                                                <div class="3 mr-5">
                                                    Condition : 80%
                                                </div>
                                                <div class="3 mr-5">
                                                    Fuel Type : Gas
                                                </div>
                                            </div>
                                            <div class="d-flex mt-5">
                                                <div class="3 mr-5">
                                                    Category : Sedan
                                                </div>
                                                <div class="3 mr-5">
                                                    Odometer : 1200807
                                                </div>
                                                <div class="3 mr-5">
                                                    Color : Red
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{ url('frontend/assets/img/portfolio/portfolio-3.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-truncate mb-3">Ford F2 Sport</h6>
                                    <div class="div"><h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6></div>
                                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                </div>
                                
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="accordion accordion-flush" id="accordionFlushExample3">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="flush-headingTree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTree" aria-expanded="false" aria-controls="flush-collapseTree">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        </button>
                                      </h2>
                                      <div id="flush-collapseTree" class="accordion-collapse collapse" aria-labelledby="flush-headingTree" data-bs-parent="#accordionFlushExample3">
                                        <div class="accordion-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="1 mr-5">
                                                    Stock : 10
                                                </div>
                                                <div class="2 mr-5">
                                                    Merk : Chevrolet
                                                </div>
                                                <div class="3 mr-5">
                                                    Condition : 80%
                                                </div>
                                                <div class="3 mr-5">
                                                    Fuel Type : Gas
                                                </div>
                                            </div>
                                            <div class="d-flex mt-5">
                                                <div class="3 mr-5">
                                                    Category : Sedan
                                                </div>
                                                <div class="3 mr-5">
                                                    Odometer : 1200807
                                                </div>
                                                <div class="3 mr-5">
                                                    Color : Red
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{ url('frontend/assets/img/portfolio/portfolio-4.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-truncate mb-3">Ford F2 Sport</h6>
                                    <div class="div"><h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6></div>
                                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                </div>
                                
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="accordion accordion-flush" id="accordionFlushExample4">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        </button>
                                      </h2>
                                      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample4">
                                        <div class="accordion-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="1 mr-5">
                                                    Stock : 10
                                                </div>
                                                <div class="2 mr-5">
                                                    Merk : Chevrolet
                                                </div>
                                                <div class="3 mr-5">
                                                    Condition : 80%
                                                </div>
                                                <div class="3 mr-5">
                                                    Fuel Type : Gas
                                                </div>
                                            </div>
                                            <div class="d-flex mt-5">
                                                <div class="3 mr-5">
                                                    Category : Sedan
                                                </div>
                                                <div class="3 mr-5">
                                                    Odometer : 1200807
                                                </div>
                                                <div class="3 mr-5">
                                                    Color : Red
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{ url('frontend/assets/img/portfolio/portfolio-5.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-truncate mb-3">Ford F2 Sport</h6>
                                    <div class="div"><h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6></div>
                                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                </div>
                                
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="accordion accordion-flush" id="accordionFlushExample5">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        </button>
                                      </h2>
                                      <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample5">
                                        <div class="accordion-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="1 mr-5">
                                                    Stock : 10
                                                </div>
                                                <div class="2 mr-5">
                                                    Merk : Chevrolet
                                                </div>
                                                <div class="3 mr-5">
                                                    Condition : 80%
                                                </div>
                                                <div class="3 mr-5">
                                                    Fuel Type : Gas
                                                </div>
                                            </div>
                                            <div class="d-flex mt-5">
                                                <div class="3 mr-5">
                                                    Category : Sedan
                                                </div>
                                                <div class="3 mr-5">
                                                    Odometer : 1200807
                                                </div>
                                                <div class="3 mr-5">
                                                    Color : Red
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{ url('frontend/assets/img/portfolio/portfolio-6.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-truncate mb-3">Ford F2 Sport</h6>
                                    <div class="div"><h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6></div>
                                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                </div>
                                
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="accordion accordion-flush" id="accordionFlushExample6">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        </button>
                                      </h2>
                                      <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample6">
                                        <div class="accordion-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="1 mr-5">
                                                    Stock : 10
                                                </div>
                                                <div class="2 mr-5">
                                                    Merk : Chevrolet
                                                </div>
                                                <div class="3 mr-5">
                                                    Condition : 80%
                                                </div>
                                                <div class="3 mr-5">
                                                    Fuel Type : Gas
                                                </div>
                                            </div>
                                            <div class="d-flex mt-5">
                                                <div class="3 mr-5">
                                                    Category : Sedan
                                                </div>
                                                <div class="3 mr-5">
                                                    Odometer : 1200807
                                                </div>
                                                <div class="3 mr-5">
                                                    Color : Red
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center mb-3">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
@endsection