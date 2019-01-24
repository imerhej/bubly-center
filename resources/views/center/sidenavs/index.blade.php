@extends('layouts.center')

@section('content')
<!-- Modal -->
<div class="modal fade" id="sidenav" tabindex="-1" role="dialog" aria-labelledby="sidenavLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New menu item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('sidenavs.store') }}" method="POST">
      <div class="modal-body">
        
            @csrf
          <div class="form-group">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" name="name" class="form-control" id="name">
          </div>

          <div class="form-group">
            <label for="link" class="col-form-label">Link:</label>
            <input type="text" name="link" class="form-control" id="link">
          </div>

          <div class="form-group">
            <label for="icon" class="col-form-label">Icon:</label>
            <input type="text" name="icon" class="form-control" id="icon">
          </div>

          <div class="form-group">
            <label for="options" class="col-form-label">Options:</label>
            <input type="text" name="options" class="form-control" id="options">
          </div>

          <div class="form-group">
            <label for="order" class="col-form-label">Order:</label>
            <select name="order" id="order" class="form-control">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
          </div>

        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--end of Modal -->
<div class="container-fluid px-xl-5">
    <section class="py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                            <h6 class="text-uppercase">Side navigation items</h6>
                            </div>
                            <div class="col">
                            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#sidenav" data-whatever="@mdo">New menu item</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-sm table-responsive card-text">
                            <thead>
                                <tr>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Icon</th>
                                <th>Options</th>
                                <th>Order</th>
                                <th>Created At</th>
                                <th></th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>{{ $item->icon }}</td>
                                    <td>{{ $item->options }}</td>
                                    <td>{{ $item->order }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td><a href="#" class="far fa-edit"></a></td>
                                    <td><a href="#" class="fas fa-trash-alt"></a></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection