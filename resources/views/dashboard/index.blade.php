@include('layout.head', ['title' => 'Dashboard'])
@include('layout.sidebar')
@include('layout.header')

<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    {{-- <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript: void(0">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                        </ul>
                    </div> --}}
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="mb-0">Selamat datang, {{ Auth::user()->name }}!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hello card</h5>
                    </div>
                    <div class="card-body"></div>
                </div>
            </div><!-- [ sample-page ] end -->
        </div><!-- [ Main Content ] end -->
    </div>
</div>

@include('layout.footer')
