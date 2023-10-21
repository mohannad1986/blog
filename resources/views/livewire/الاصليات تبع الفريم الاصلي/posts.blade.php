
<!-- row -->
<!-- row -->
<div>
{{-- ++++++++++++++++++++++++++fبداية الناف الهدر +++++++++++++++++++++++++++ --}}

<div class="container-fluid p-0">
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">Biz<span class="text-white font-weight-normal">News</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="category.html" class="nav-item nav-link">Category</a>
                    <a href="single.html" class="nav-item nav-link">Single News</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a class="dropdown-item" wire:click="toggleCategory('')" class="{{ ! $selectedCategory ? 'bg-yellow-500' : '' }} w-full text-left p-2 text-gray-600 focus:outline-none">
                                All
                            </a>
                            @foreach ($categories as $category)
                            <a class="dropdown-item" wire:click="toggleCategory('{{ $category->id }}')" class="{{ $selectedCategory == $category->id ? 'bg-yellow-500 text-white focus:outline-none' : ''}} p-2 w-full text-left tracking-wide">
                                {{ $category->name }}
                            </a>
                            @endforeach
                            <a href="#" class="dropdown-item">Menu item 1</a>
                            <a href="#" class="dropdown-item">Menu item 2</a>
                            <a href="#" class="dropdown-item">Menu item 3</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

{{-- ++++++++++++++++++++++++++++++ نهاية الناف الهدر+++++++++++++++++++++++++++++++++ --}}
{{-- +++++++++++++++++++++ --}}



   <!-- News With Sidebar Start -->
   <div class="container-fluid">
    @php
    use Illuminate\Support\Str;
@endphp
@if($allnews == 1)
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>


                    {{-- ++++++++++++++++++++++++++++++++++++++ --}}
                    @foreach ($posts as  $post)
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{Storage::url('images/'.'/'.$post->cover_image.'')}}" style="object-fit: cover;">
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    {{-- <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="{{route('post.edit',[$post->id])}}">Edit</a>
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="{{route('post.delet',[$post->id])}}">Delete</a> --}}

                                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    <a class="text-body"  wire:click="readPost('{{ $post->id }}')" >REad</a>

                                </div>
                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">{{$post->title}}</a>
                                <p class="m-0">{{str::limit(($post->body),200, '...')}}</p>
                            </div>
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                    <small>John Doe</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                    <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                </div>
                            </div>
                        </div>
                    </div>


                    @endforeach

                    {{-- +++++++++++++++++++++++++++++++++++++++ --}}

                </div>
            </div>


        </div>
    </div>
@endif

    @include('livewire.thepost')
</div>
<!-- News With Sidebar End -->

{{-- +++++++++++++++++ --}}

</div>
