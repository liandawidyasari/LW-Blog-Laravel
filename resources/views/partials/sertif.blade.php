{{-- <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
            <!-- Page Features-->
                <div class="row gx-lg-5"> 
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100" >
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0"style="background-color: #6B4F4F">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="text-white">{{ $certifs->title }}</h2>
                                <p class="text-white">{{ $certifs->publis }}</p>
                                <p class="text-white">{{ $certifs->credentialid }}</p>
                                <div class="text-center"><a class="btn btn-outline-light mt-auto" href="{{ $certifs["url"] }}">Credential</a></div>
                            </div>
                        </div>
                    </div>
    @foreach ($certifs as $certif)
    @endforeach --}}