<!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
            <!-- Page Features-->
                <div class="row gx-lg-5">   
                    <div class="col-lg-8 col-xxl-4 mb-5 ">
                        <div class="card border-0 h-100 " style="background-color: #6B4F4F">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="text-white">{{ $post->title }}</h2>
                                <p class="text-white">{{ $post->program }}</p>
                                <p class="text-white">{{ $post->body }} </p>
                                <div class="text-center"><a class="btn btn-outline-light mt-auto" href="{{ $post["url"] }}">Link Github</a></div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </section>