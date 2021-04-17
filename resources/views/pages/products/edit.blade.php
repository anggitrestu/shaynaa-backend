@extends('layouts.default')

@section('content')
<!-- Header-->
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo" /></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo" /></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="header-left">
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search" />
                        <button class="search-close" type="submit">
                            <i class="fa fa-close"></i>
                        </button>
                    </form>
                </div>

                <div class="dropdown for-notification">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="count bg-danger">3</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="notification">
                        <p class="red">You have 3 Notification</p>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-check"></i>
                            <p>Server #1 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-info"></i>
                            <p>Server #2 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-warning"></i>
                            <p>Server #3 overloaded.</p>
                        </a>
                    </div>
                </div>

                <div class="dropdown for-message">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="count bg-primary">4</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red">You have 4 Mails</p>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg" /></span>
                            <div class="message media-body">
                                <span class="name float-left">Jonathan Smith</span>
                                <span class="time float-right">Just now</span>
                                <p>Hello, this is an example msg</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg" /></span>
                            <div class="message media-body">
                                <span class="name float-left">Jack Sanders</span>
                                <span class="time float-right">5 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg" /></span>
                            <div class="message media-body">
                                <span class="name float-left">Cheryl Wheeler</span>
                                <span class="time float-right">10 minutes ago</span>
                                <p>Hello, this is an example msg</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg" /></span>
                            <div class="message media-body">
                                <span class="name float-left">Rachel Santos</span>
                                <span class="time float-right">15 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar" />
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                    <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications
                        <span class="count">13</span></a>

                    <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                    <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /header -->
<!-- Header-->

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="card">
    <div class="card-header">
        <strong class="card-title">Ubah Barang</strong>
        <small>{{$item->name}}</small>
    </div>
    <div class="card-body">
        <form action="{{route('products.update', $item->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama Barang</label>
                <input type="text" name="name" value="{{old('name') ? old('name') : $item->name}}" class="form-control @error('name') is-invalid @enderror" />
            @error('name') <div class="text-muted">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label for="type" class="form-control-label">Tipe Barang</label>
                <input type="text" name="type" value="{{old('typr') ? old('type') : $item->type}}" class="form-control @error('type') is-invalid @enderror" />
                @error('type') <div class="text-muted">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label for="name" class="form-control-label">Deskripsi Barang</label>
            <textarea name="description" class="ckeditor form-control @error('description') is-invalid @enderror">{{old('description') ? old('description') : $item->description}}</textarea>
            @error('description') <div class="text-muted">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label for="price" class="form-control-label">Harga Barang</label>
                <input type="number" name="price" value="{{old('price') ? old('price') : $item->price}}" class="form-control @error('price') is-invalid @enderror" />
                @error('price') <div class="text-muted">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label for="quantity" class=" form-control-label">Kuantitas Barang</label>
                <input type="number" name="quantity" value="{{old('quantity') ? old('quantity') : $item->quantity}}" class="form-control @error('quantity') is-invalid @enderror" />
                @error('quantity') <div class="text-muted">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Edit Barang
                </button>
            </div>
        </form>
    </div>
</div>

</div>


@endsection